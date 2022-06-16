@extends('layouts.main')
@section('contentFill')
<link rel="stylesheet" href="{{ asset ('css/productunder.css') }}">
<link rel="stylesheet" href="{{ url('/css/navbar.css') }}">

    <div class="content">
        <div class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width:16vw;background-color: #203239">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item top">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <img src="../images/Paper.png" alt="paper">
                            Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <img src="../images/Alarmclock.png" alt="error gais">
                            Ending Soon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <img src="../images/lightning_ring.png" alt="error gais">
                            Rising Fast
                        </a>
                    </li>
                </ul>
                <a href="#" class="nav-link text-white">
                    <img src="../images/Chat_alt_3.png" alt="error gais">
                    Help & Support
                </a>
            </div>
        </div>


        <div class="main-content">
            <div class="container">
                <!-- <--EDIT DISINI ADICK ADICK-->
                <div class="product-under">
                    <div class="img-product">
                        <img src="../images/{{ $item->gambar }}" width="250px" id="under-img" alt="error gais">
                    </div>
                    <div class="midcontent">
                        <h3 style="font-size: 30px;font-weight: bold; margin-left: 8%;">{{ $item->judul }}</h3>
                        <div class="price">
                            <p style="font-size: 20px; opacity: 0.55"><u>{{ $item->category->name }}</u></p>
                            <h3 style="font-size: 20px;">Start Price :</h3>
                            <h3 style="font-size: 20px;">Rp {{ $item->price }},-</h3>
                            <h3 style="font-size: 20px;">Current Bid :</h3>
                            <h3 style="font-size: 20px;">Rp {{ $item->bid }},-</h3>
                        </div>
                        <div class="button">
                            <button type="button" class="btn btn-outline-warning" id="buttonbid">BUY NOW :<br>Rp
                                {{ $item->buyNow }},-</button>
                            <button type="button" class="btn btn-outline-warning" id="buttontime">Time Remaining :<br>
                                <b id="countdown"></b></button>
                        </div>
                        <div style="clear: both;"></div>


                    </div>
                </div>

                <form action="/ProductDetail/{{ $item->slug }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="bidding">
                            <button id="btn-rf"><img src="../images/Refresh.png" alt="refresh button"></button>
                            <div class="bidrange">
                                <button class="changebid">-</button>
                                <input type="text" class="bidvalue text-center mx-3" value="{{ $item->bid }}" id="bid" name="bid">
                                <button class="changebid">+</button>
                            </div>
                            <button type="submit" class="btn btn-outline-dark" id="bidbid">BID ITEM</button>
                    </div>
                </form>


                <div class="description">
                    <div class="olshop">
                        <div class="logo">
                            <img src="../images/olshop.png" alt="">
                            <div class="title">
                                <b>Budi Parbudi</b> <br>
                                <h1>Aktif 3 jam yang lalu</h1>
                            </div>
                            <button type="button" class="btn btn-outline-dark" id="chat">
                                <img src="../images/Chat_alt_3.png" alt="">
                                Chat Penjual</button>

                            <div style="clear: both;"></div>
                        </div>

                        <div class="detail">
                            <u> Deskripsi Produk: </u>
                            <div class="descript-material">
                                {!! $item->deskripsi !!}
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <!-- <div  style="clear: both;"></div> -->
                    </div>
                    <div class="addres">
                        <h1>Dikirim dari :</h1>KOTA JAKARTA BARAT, ID
                        <h1>Menuju ke :</h1> KOTA BOGOR, ID
                        <br>
                        <h1>Estimasi Ongkir :</h1> Rp10.000 - Rp15.000
                        <br> (1kg)
                    </div>
                    <div class="line"></div>
                    <div style="clear: both;"></div>


                </div>
            </div>
        </div>
        {{-- <h1>{{ $item->created_at +5 }}</h1> --}}
        {{-- <div id="countdown">  --}}

    </div>
    <script>
        CountDownTimer('countdown');
        function CountDownTimer( id)
        {
            var end = new Date('{{$item->End_date}}');
            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;
            function showRemaining() {
                var now = new Date();
                var distance = end - now;
                if (distance < 0) {

                    clearInterval(timer);
                    document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
                    return;
                }
                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);

                document.getElementById(id).innerHTML = days + 'days ';
                document.getElementById(id).innerHTML += hours + 'hrs ';
                document.getElementById(id).innerHTML += minutes + 'mins ';
                document.getElementById(id).innerHTML += seconds + 'secs';
                // document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
            }
            timer = setInterval(showRemaining, 1000);
        }
    </script>


    <hr id="separator-footer">

@endsection