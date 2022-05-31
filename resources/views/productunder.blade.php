@extends('layouts.main')
@section('contentFill')
    <link rel="stylesheet" href="{{ ('css/productunder.css') }}">

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
                        <img src="../images/productunder.png" width="250px" id="under-img" alt="error gais">
                    </div>
                    <div class="midcontent">

                        <div class="price">
                            <h3 style="font-size: 30px;font-weight: bold;">Chain Decor Buckle<br>Belt</h3>
                            <p style="font-size: 20px; opacity: 0.55"><u>AKSESORIS</u></p>
                            <h3 style="font-size: 20px;">Start Price :</h3>
                            <h3 style="font-size: 20px;">Rp 30.000,-</h3>
                            <h3 style="font-size: 20px;">Current Bid :</h3>
                            <h3 style="font-size: 20px;">Rp 42.000,-</h3>
                        </div>
                        <div class="button">
                            <!-- <h1>123123123</h1>
                            <h1>123123123</h1>
                            <h1>123123123</h1>
                            <h1>123123123</h1> -->
                            <button type="button" class="btn btn-outline-warning" id="buttonbid">BUY NOW :<br>Rp
                                80.000,-</button>
                            <button type="button" class="btn btn-outline-warning" id="buttontime">Time Remaining :<br>
                                <b>0 : 35 : 29</b></button>
                        </div>
                        <div style="clear: both;"></div>


                    </div>
                </div>
                <div class="bidding">
                    <button id="btn-rf"><img src="../images/Refresh.png" alt="refresh button"></button>
                    <div class="bidrange">
                        <button class="changebid">-</button>
                        <div id="bidvalue">
                            <h4>55.000</h4>
                        </div>
                        <button class="changebid">+</button>
                    </div>
                    <button type="button" class="btn btn-outline-dark" id="bidbid">BID ITEM</button>
                </div>

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
                                belt free rantai <br>
                                bahan biasa <br>
                                lebar : 4cm <br>
                                panjang : 98cm <br>
                                realpict
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



    <hr id="separator-footer">
@endsection