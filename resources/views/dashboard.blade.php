@extends('layouts.main')
@section('contentFill')
<link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">
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
                <!-- EDIT DISINI -->
                <div id="greetings">
                    <p style="font-size: 36px; font-family: Actor, 'Sans serif';"><strong>Welcome Back,
                            @auth
                            {{ auth()->user()->name }}
                            @else
                            CANTIK DAN GANTENG
                            @endauth

                            <br>What are you
                            looking for today?</strong></p>

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="wrapper">
                    @foreach($Items as $item)
                        <div class="product-reg">
                            <div class="category">
                                <a href="/categories/{{ $item->category->slug }}">
                                    {{ $item->category->name }}
                                </a>
                            </div>
                            <div class="product-title">
                                {{ $item->judul }}
                            </div>
                            <div class="product-img"><img src="../images/{{ $item->gambar }}" alt="cloth">
                            </div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">
                                            Start Price:
                                        </p>
                                        <div class="start-price">
                                            Rp. {{ $item->price }}
                                        </div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">
                                            Buy Now:
                                        </p>
                                        <div class="buy-price">
                                            Rp. {{ $item->buyNow }}
                                        </div>
                                    </div>
                                </div>
                                <div class="right my-1">
                                    <div class="time-remaining">
                                        <p class="my-0" style="font-weight:bold; font-size: 15px;">
                                            Time Remaining:
                                        </p>
                                        <div class="time" style="font-size: 15px;">
                                            <b id="countdown"></b>
                                        </div>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="ProductDetail/{{ $item->slug }}">
                                            <button>
                                                <img src="../images/Expand More.png" alt="more">
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- STOP -->
            </div>
        </div>
    </div>
    <hr id="separator-footer">


    <script>
        // console.log('{{ $Items[0] }}')
        // console.log(id);
        var array = @json($Items);

        CountDownTimer('$Items', '#countdown');

        // console.log(array);

 
        function CountDownTimer(dt, id)
        {
            let i = 0;
            id = document.querySelectorAll('#countdown');

            // id.forEach(function(id2){
            //     console.log(id2);
            //     id2.innerHTML = 'hai';
            //     console.log(array[i++].End_date);
            // })

            // return;
            id.forEach(function(id2){
                var end = new Date(array[i++].End_date);
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
                        document.getElementById(id2).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
                        return;
                    }
                    var days = Math.floor(distance / _day);
                    var hours = Math.floor((distance % _day) / _hour);
                    var minutes = Math.floor((distance % _hour) / _minute);
                    var seconds = Math.floor((distance % _minute) / _second);

                    console.log(id2);
                    id2.innerHTML = days + 'days ';
                    id2.innerHTML += hours + 'hrs ';
                    id2.innerHTML += minutes + 'mins ';
                    id2.innerHTML += seconds + 'secs';            
                    // document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
                    }
                timer = setInterval(showRemaining, 1000);
            })

        }
    </script>

@endsection