@extends('layouts.settings')
@section('contentFill')
@include('partials.navbar-informations')
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
      <div class="right-top d-flex align-items-center justify-content-between">
        <h3>Balance</h3>
      </div>
      <hr id="settings-separator">
      <div class="right-bottom">
        <label for="profile-name">Full Name</label>
        <h1 id="profile-name" class="fs-3">{{ auth()->user()->name }}</h1>

        <label for="remaining-balance" class="mt-3">Remaining Balance</label>
        <h1 id="remaining-balance" class="fs-3">Rp {{ auth()->user()->saldo }}</h1>

        <div class="deposit-group mt-5">
          <h2>DEPOSIT</h2>
          <form action="/informations/status/{{ auth()->user()->username }}" method="post">
            @csrf
            <div class="form-group">
              <label for="deposit-amount">ENTER BALANCE AMOUNT:</label>
              <input type="text" name="amount" id="amount">
            </div>
            <div class="form-group mt-4">
              <label for="payment-method">PAYMENT METHOD:</label>
              <select name="payment-method" id="payment-method">
                <option value="">Select Payment Method</option>
                <option value="">Bank Transfer</option>
                <option value="">Paypal</option>
                <option value="">Credit Card</option>
              </select>
            </div>
            <div class="form-btn-group d-flex justify-content-end">
              <button type="reset" class="btn btn-light btn-cancel me-4">Cancel</button>
              <button type="submit" class="btn btn-save">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
