@extends('layouts.settings')
@section('contentFill')
@include('partials.navbar-informations')
  <div class="settings-content d-flex justify-content-around py-5">
    <div class="settings-left">
      <h1 class="mb-5">Profile</h1>
      <div class="profile-settings">

        @if(auth()->user()->profile_picture)
          {{-- <p>1</p> --}}
          {{-- <p>{{ auth()->user()->profile_picture }}</p> --}}
          <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="user profile picture">
        @else
        {{-- <p>2</p> --}}
          <img src="{{ url('/images/user_profile.png') }}" alt="user profile picture">
        @endif

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
      @if(session()->has('profileMessage'))
      <div class="alert alert-success alert-dismissible fade show w-75 mx-auto" role="alert">
          {{ session('profileMessage') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <form action="/informations/settings/image/{{ auth()->user()->username }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" class="form-control" id="new-avatar" name="image" accept=".jpg,.jpeg,.png" required />
        <button type="submit" class="p-3 upload-btn fs-4">Upload New Avatar</button>
      </form>
      <div class="user-location mt-4">
        <h3>Jakarta, Indonesia</h3>
      </div>
    </div>
    <div class="vr"></div>
    <div class="settings-right">
      <div class="right-top d-flex align-items-center justify-content-between">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <h3>Basic Info</h3>
      </div>
      <hr id="settings-separator">
      <div class="right-bottom">
        <form action="/informations/settings/{{ auth()->user()->username }}" method="post">
          @csrf
          @method('PUT')
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control mb-3 @error('name') is-invalid @enderror" value="{{ $user->name }}">
          @error ('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control mb-3 @error('title') is-invalid @enderror" value="{{ $user->title }}" disabled>
          @error ('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ $user->email }}">
          @error ('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control mb-3 @error('username') is-invalid @enderror" value="{{ $user->username }}" disabled>
          @error ('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

            <div class="form-btn-group d-flex justify-content-end">
            <button type="reset" class="btn btn-light btn-cancel me-4">Cancel</button>
            <button type="submit" class="btn btn-save">Save</button>
          </div>
        </form>
  </div>

@endsection