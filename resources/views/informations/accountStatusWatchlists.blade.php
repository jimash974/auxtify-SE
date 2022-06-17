@extends('layouts.settings')
@section('contentFill')
@include('partials.navbar-informations')
<link rel="stylesheet" href="/css/accountStatusWatchlists.css">

<div class="settings-content d-flex justify-content-around py-5">
    <div class="settings-left px-5">
      <div class="name-and-type d-flex align-items-baseline">
        <h3 class="profile-name fw-bold me-3">{{ auth()->user()->name }}</h3>
        <h4 class="user-type fw-bold">User</h4>
      </div>
      <ul>
        <li><a href="">Balance</a></li>
        <li><a href="">Watchlist</a></li>
      </ul>
    </div>
    <div class="vr"></div>
    <div class="settings-right">
      <div class="textwatch">
        <h1 class="fs-4">Watchlist</h1>
        <hr>
        <div class="activebids">
            <h1 class="fs-4 fw-bold">ACTIVE BIDS</h1>
        <div class="boxactive greenborder">
            <img src="/images/cloth.png" alt="">
            <div class="boxactivetext">
                <p>Colorblock Jacket by R&A, Size F // Free size, Like new</p>
                <table>
                    <tr>
                        <td>Start Price :</td>
                        <td>Bid :</td>
                    </tr>
                    <tr>
                        <td>Rp 50.000,-</td>
                        <td>Rp 78.500,-</td>
                    </tr>
                    <tr>
                        <td>Buy Now :</td>
                        <td>Time Remaining :</td>
                    </tr>
                    <tr>
                        <td>Rp 250.000,-</td>
                        <td>1:05:30</td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        <div class="expirebids mt-4">
            <h1 class="fs-4 fw-bold">WATCHED ITEMS</h1>
        <div class="boxactive blackborder">
            <img src="/images/cloth.png" alt="">
            <div class="boxactivetext">
                <p>Sepatu Converse Chuck Taylor 70s HI Cream IMPORT Premium Quality</p>
                <table>
                    <tr>
                        <td>Start Price :</td>
                        <td>Bid :</td>
                    </tr>
                    <tr>
                        <td>Rp 550.000,-</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Buy Now :</td>
                        <td>Time Remaining :</td>
                    </tr>
                    <tr>
                        <td>Rp 900.000,-</td>
                        <td>00:57:49</td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
      </div>
      </div>
    </div>

@endsection