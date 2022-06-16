@extends('layouts.main')
@section('contentFill')
<link rel="stylesheet" href="{{ asset ('css/productunder.css') }}">
<link rel="stylesheet" href="{{ url('/css/navbar.css') }}">

    <div class="content">
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
                            <br>

                            @if($item->user)
                                @if($TimeLeft <= 0 )
                                <h5>Sold to : </h5>
                                <h4>{{ $item->user->name }}</h4>
                                @else
                                <h5>Current Bidder : </h5>
                                <h4>{{ $item->user->name }}</h4>
                                @endif
                            @endif
 
                        </div>
                        <div class="button">
                            <button type="button" class="btn btn-outline-warning {{ ($TimeLeft <= 0) ? 'hidden' : '' }}" id="buttonbid">BUY NOW :<br>Rp
                                {{ $item->buyNow }},-</button>
                            <button type="button" class="btn btn-outline-warning" id="buttontime">Time Remaining :<br>
                                <b id="countdown"></b></button>
                        </div>
                        <div style="clear: both;"></div>


                    </div>
                </div>

                <form action="/ProductDetail/{{ $item->slug }}" method="post" class=" {{ ($TimeLeft <= 0) ? 'hidden' : '' }} ">
                    @csrf
                    @method('PUT')

                    <div class="bidding">
                            <button id="btn-rf"><img src="../images/Refresh.png" alt="refresh button"></button>
                            <div class="bidrange">
                                <button class="changebid">-</button>
                                <input type="text" class="bidvalue text-center mx-3" value="{{ $item->bid }}" id="bid" name="bid" readonly>
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
                    document.getElementById(id).innerHTML = '<b>TIMES UP</b> ';
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

        const bidBtn = document.querySelectorAll('.changebid');
        let bidValue = parseInt(document.querySelector('.bidvalue').value);

        bidBtn.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (this.classList.contains('changebid')) {
                    if (this.innerHTML == '+') {
                        bidValue += 50000;
                    } else {
                        bidValue -= 50000;
                    }
                }
                document.querySelector('.bidvalue').value = bidValue;
            });
        });
    </script>


    <hr id="separator-footer">

@endsection