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
			<li><a href="/informations/status/balance/{{ auth()->user()->username }}">Balance</a></li>
			<li class="fw-bold"><a href="/informations/status/watchlists/{{ auth()->user()->username }}">Watchlists</a></li>
		</ul>
	</div>
	<div class="vr"></div>
	<div class="settings-right">
		<div class="textwatch">
			<h1 class="fs-4">Watchlist</h1>
			<hr>
			<div class="activebids">
				<h1 class="fs-4 fw-bold">ACTIVE BIDS</h1>
				@forEach($itemActive as $item)
					<div class="boxactive greenborder">
						<img src="/images/{{ $item->gambar }}" alt="">
						<div class="boxactivetext">
							<p>{{ $item->judul }}</p>
							<table>
								<tr>
									<td>Start Price :</td>
									<td>Bid :</td>
								</tr>
								<tr>
									<td>Rp {{ $item->price }},-</td>
									<td>Rp {{ $item->bid }},-</td>
								</tr>
								<tr>
									<td>Buy Now :</td>
									<td>Time Remaining :</td>
								</tr>
								<tr>
									<td>Rp {{ $item->buyNow }},-</td>
									<td id="countdown"></td>
								</tr>
							</table>
						</div>
					</div>
				@endforeach
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
								<td class="countdown"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	var array = @json($itemActive);

	CountDownTimer('$itemActive', '#countdown');

	// console.log(array);


	function CountDownTimer(dt, id)
	{
		let i = 0;
		id = document.querySelectorAll('#countdown');

		// id.forEach(function(id2){
		//     console.log(id2);
		//     id2.innerHTML = 'hai';
		//     console.log(array[i++].End_date);
		// })

		// return;
		id.forEach(function(id2){
			var end = new Date(array[i++].End_date);
			var _second = 1000;
			var _minute = _second * 60;
			var _hour = _minute * 60;
			var _day = _hour * 24;
			var timer;
			function showRemaining() {
				var now = new Date();
				var distance = end - now;
				if (distance < 0) {

					clearInterval(timer);
					id2.innerHTML = '<b>TIMES UP</b> ';
					return;
				}
				var days = Math.floor(distance / _day);
				var hours = Math.floor((distance % _day) / _hour);
				var minutes = Math.floor((distance % _hour) / _minute);
				var seconds = Math.floor((distance % _minute) / _second);

				console.log(id2);
				id2.innerHTML = days + 'days ';
				id2.innerHTML += hours + 'hrs ';
				id2.innerHTML += minutes + 'mins ';
				id2.innerHTML += seconds + 'secs';            
				// document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
				}
			timer = setInterval(showRemaining, 1000);
		})
	}
</script>


@endsection