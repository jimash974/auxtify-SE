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
                </div>
                <div class="product-disp mx-auto container">
                    <div class="row">
                        <div class="col product-reg">
                            <div class="category">{{ $Items->find(1)->category }}</div>
                            <div class="product-title">{{ $Items->find(1)->judul }}</div>
                            <div class="product-img"><img src="../images/cloth.png" alt="cloth"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. {{ $Items->find(1)->price }}</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. {{ $Items->find(1)->buyNow }}</div>
                                    </div>
                                </div>
                                <div class="right my-1">
                                    <div class="time-remaining my-1">
                                        <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                        <div class="time" style="font-size: 20px;">4:05:30</div>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col product-under">
                            <div class="category">{{ $Items->find(2)->category }}</div>
                            <div class="product-title">{{ $Items->find(2)->judul }}</div>
                            <div class="product-img"><img src="../images/pants.png" alt="pants"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. {{ $Items->find(2)->price }}</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. {{ $Items->find(2)->buyNow }}</div>
                                    </div>
                                </div>
                                <div class="right my-1">
                                    <div class="time-remaining my-1">
                                        <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                        <div class="time" style="font-size: 20px;">0:35:30</div>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col product-exp">
                            <div class="category">SEPATU</div>
                            <div class="product-title">Mr.SHOES KD-111 2021 Casual Shoes Autumn</div>
                            <div class="product-img"><img src="../images/shoes.png" alt="shoes"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. 50.000,-</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. 250.000,-</div>
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
                                            <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col product-reg">
                            <div class="category">BAJU DAN CELANA</div>
                            <div class="product-title">ZET Bomber || Bomber Jacket || Jacket Pilot</div>
                            <div class="product-img"><img src="../images/cloth.png" alt="cloth"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. 50.000,-</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. 250.000,-</div>
                                    </div>
                                </div>
                                <div class="right my-1">
                                    <div class="time-remaining">
                                        <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                        <div class="time" style="font-size: 20px;">4:05:30</div>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col product-under">
                            <div class="category">AKSESORIS</div>
                            <div class="product-title">Chain Decor Buckle Belt</div>
                            <div class="product-img"><img src="../images/pants.png" alt="pants"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. 30.000,-</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. 80.000,-</div>
                                    </div>
                                </div>
                                <div class="right my-1">
                                    <div class="time-remaining my-1">
                                        <p class="my-0" style="font-weight:bold; font-size: 15px;">Time Remaining:</p>
                                        <div class="time" style="font-size: 20px;">0:35:30</div>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col product-exp">
                            <div class="category">SEPATU</div>
                            <div class="product-title">Mr.SHOES KD-111 2021 Casual Shoes Autumn</div>
                            <div class="product-img"><img src="../images/shoes.png" alt="shoes"></div>
                            <div class="product-details d-flex justify-content-between">
                                <div class="prices">
                                    <div class="starting-price">
                                        <p class="my-0" style="font-weight:bold">Start Price:</p>
                                        <div class="start-price">Rp. 50.000,-</div>
                                    </div>
                                    <div class="buy-now">
                                        <p class="my-0" style="font-weight:bold">Buy Now:</p>
                                        <div class="buy-price">Rp. 250.000,-</div>
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
                                            <a href="ProductDetail"><button><img src="../images/Expand More.png" alt="more"></button></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- STOP -->
            </div>
        </div>
    </div>
    <hr id="separator-footer">

@endsection



  