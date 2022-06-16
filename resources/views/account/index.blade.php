@extends('layouts.settings')
@section('contentFill')
<link rel="stylesheet" href="/css/account.css">

<div class="account-content">
    <div class="top-bg"></div>
    <div class="main-content">
        <img src="/images/user_profile.png" alt="">
        <div class="text-content">
            <h1 class="fw-bold mb-0">SUSI SUSANTI</h1>
            <p class="fs-4 mb-0">Jakarta,Indonesia</p>
            <p class="fw-bold">User</p>
            <div class="following-followers">
                <div class="followers fs-4">
                    <h1>157</h1>
                    <h2>Followers</h2>
                </div>
                <div class="vr"></div>
                <div class="following fs-4">
                    <h1>92</h1>
                    <h2>Following</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection