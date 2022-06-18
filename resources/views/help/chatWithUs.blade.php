@extends('layouts.settings')
@section('contentFill')
@include('partials.navbarHelpSupport')
<link rel="stylesheet" href="/css/chatWithUs.css">
<div class="settings-content d-flex justify-content-around py-5">
	<div class="settings-left px-5">
		<ul>
			<li class="fw-bold"><a href="/help/chat">Chat with Us</a></li>
			<li><a href="/help/faq">FAQ</a></li>
		</ul>
	</div>
	<div class="vr"></div>
	<div class="settings-right">
    <h1>Chat with Us</h1>
    <hr>
    <form action="#" method="post" id="chat-form">
        <label for="name">Full Name</label>
        <input type="text" name="name" class="form-control" required>
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" class="form-control" required>
        <label for="message">Problem</label>
        <textarea name="message" id="" cols="30" rows="3" class="form-control" required></textarea>
        <button type="submit" class="btn" id="submit-btn">Submit</button>
    </form>
  </div>
</div>

@endsection