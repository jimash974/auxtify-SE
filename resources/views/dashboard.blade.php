@extends('layouts.main')
@section('contentFill')
<link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">

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
                            Susi!<br>What are you
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
                    {{-- @for ($x = 1; $x <= 6; $x+=3) 
                        <div class="row">
                            <div class="col product-reg">
                                <div class="category"><a href="/categories/{{ $Items->find($x)->category->slug }}">{{ $Items->find($x)->category->name }}</a></div>
                                <div class="product-title">{{ $Items->find($x)->judul }}</div>
                                <div class="product-img"><img src="../images/{{ $Items->find($x)->gambar }}" alt="cloth"></div>
                                <div class="product-details d-flex justify-content-between">
                                    <div class="prices">
                                        <div class="starting-price">
                                            <p class="my-0" style="font-weight:bold">Start Price:</p>
                                            <div class="start-price">Rp. {{ $Items->find($x)->price }}</div>
                                        </div>
                                        <div class="buy-now">
                                            <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                            <div class="buy-price">Rp. {{ $Items->find($x)->buyNow }}</div>
                                        </div>
                                    </div>
                                    <div class="right my-1">
                                        <div class="time-remaining">
                                            <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                            <div class="time" style="font-size: 20px;">4:05:30</div>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="ProductDetail/{{ $Items->find($x)->slug }}"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col product-under">
                                <div class="category"><a href="/categories/{{ $Items->find($x+1)->category->slug }}">{{ $Items->find($x+1)->category->name }}</a></div>
                                <div class="product-title">{{ $Items->find($x+1)->judul }}</div>
                                <div class="product-img"><img src="../images/{{ $Items->find($x+1)->gambar }}" alt="pants"></div>
                                <div class="product-details d-flex justify-content-between">
                                    <div class="prices">
                                        <div class="starting-price">
                                            <p class="my-0" style="font-weight:bold">Start Price:</p>
                                            <div class="start-price">Rp. {{ $Items->find($x+1)->price }}</div>
                                        </div>
                                        <div class="buy-now">
                                            <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                            <div class="buy-price">Rp. {{ $Items->find($x+1)->buyNow }}</div>
                                        </div>
                                    </div>
                                    <div class="right my-1">
                                        <div class="time-remaining my-1">
                                            <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                            <div class="time" style="font-size: 20px;">0:35:30</div>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="ProductDetail/{{ $Items->find($x+1)->slug }}"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col product-exp">
                                <div class="category"><a href="/categories/{{ $Items->find($x+2)->category->slug }}">{{ $Items->find($x+2)->category->name }}</a></div>
                                <div class="product-title">{{ $Items->find($x+2)->judul }}</div>
                                <div class="product-img"><img src="../images/{{ $Items->find($x+2)->gambar }}" alt="shoes"></div>
                                <div class="product-details d-flex justify-content-between">
                                    <div class="prices">
                                        <div class="starting-price">
                                            <p class="my-0" style="font-weight:bold">Start Price:</p>
                                            <div class="start-price">Rp. {{ $Items->find($x+2)->price }}-</div>
                                        </div>
                                        <div class="buy-now">
                                            <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                            <div class="buy-price">Rp. {{ $Items->find($x+2)->buyNow }}</div>
                                        </div>
                                    </div>
                                    <div class="right my-1">
                                        <div class="time-remaining my-1">
                                            <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                            <div class="time" style="font-size: 20px;">EXPIRED</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="m-0" style="width: fit-content">Final Bid:</p>
                                            <div class="more-button float-end">
                                                <a href="ProductDetail/{{ $Items->find($x+2)->slug }}"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endfor --}}
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
                                    <div class="time" style="font-size: 20px;">
                                        4:05:30
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

@endsection