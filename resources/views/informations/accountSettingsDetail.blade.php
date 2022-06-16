@extends('layouts.settings')
@section('contentFill')

  <div class="settings-content d-flex justify-content-around py-5">
    <div class="settings-left">
      <h1 class="mb-5">Profile</h1>
      <div class="profile-settings">
        <img src="{{ url('/images/user_profile.png') }}" alt="">
        <h1 class="profile-name fs-3 fw-bold">{{ auth()->user()->username }}</h1>
        <h3 class="user-type fw-bold">USER</h3>
      </div>
      <div class="followers-following d-flex align-items-center my-3 mx-auto">
        <div class="followers">
          <h1 class="followers-count">157</h1>
          <h3>Followers</h3>
        </div>
        <div class="vr"></div>
        <div class="following">
          <h1 class="following-count">157</h1>
          <h3>Following</h3>
        </div>
      </div>
      <button class="btn p-3 upload-btn fs-4">Upload New Avatar</button>
      <div class="user-location mt-4">
        <h3>Jakarta, Indonesia</h3>
      </div>
    </div>
    <div class="vr"></div>
    <div class="settings-right">
      <div class="right-top d-flex align-items-center justify-content-between">
        <h3>Basic Info</h3>
      </div>
      <hr id="settings-separator">
      <div class="right-bottom">
        <form action="#" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control mb-3" value="{{ $user->name }}">

          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control mb-3" value="Mr/Mrs">

          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control mb-3" value="{{ $user->email }}">

          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control mb-3" value="{{ $user->username }}">

          <div class="form-btn-group d-flex justify-content-end">
            <button type="reset" class="btn btn-light btn-cancel me-4">Cancel</button>
            <button type="submit" class="btn btn-save">Save</button>
          </div>
        </form>
  </div>

@endsection