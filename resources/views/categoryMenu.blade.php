@extends('layouts.main')
@section('contentFill')
<link rel="stylesheet" href="{{ url('/css/navbar.css') }}">
<link rel="stylesheet" href="{{ url('/css/categoryMenu.css') }}">

<div class="content">
  <div class="main-content">
    <div class="container">
      <p style="font-size: 52px; font-family: Actor, 'Sans serif';" class="ms-4"><strong>CATEGORY</strong></p>
      <div class="wrapper">
      <a href="/categories/baju-dan-celana">
      <div class="product-reg">
        <div class="product-img"><img src="../images/cloth.png" alt="cloth"></div>
        <h1 class="fs-3 pt-4">BAJU DAN CELANA</h1>
      </div>
    </a>
    <a href="/categories/aksesoris">
      <div class="product-reg">
        <div class="product-img"><img src="../images/pants.png" alt="cloth"></div>
        <h1 class="fs-3 pt-4">AKSESORIS</h1>
      </div>
    </a>
    <a href="/categories/sepatu">
      <div class="product-reg">
        <div class="product-img"><img src="../images/shoes.png" alt="cloth"></div>
        <h1 class="fs-3 pt-4">SEPATU</h1>
      </div>
    </a>
    </div>
  </div>
  </div>
</div>

@endsection