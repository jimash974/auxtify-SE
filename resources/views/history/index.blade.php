@extends('layouts.settings')
@section('contentFill')
@include('partials.navbar-informations')
<link rel="stylesheet" href="/css/accountHistoryDetail.css">

<div class="settings-content d-flex justify-content-around py-5">
	<div class="settings-left px-5">
		<div class="name-and-type d-flex align-items-baseline">
			<h3 class="profile-name fw-bold me-3">{{ auth()->user()->name }}</h3>
			<h4 class="user-type fw-bold">{{ auth()->user()->title }}</h4>
		</div>
	</div>
	<div class="vr"></div>
	<div class="settings-right">
		<div class="textwatch">
			<h1 class="fs-4">Items</h1>
			<hr>
			<div class="activebids">
				<h1 class="fs-4 fw-bold">WON</h1>
				@forEach($Items as $item)
					{{-- <h3>{{ $item->user->username }}</h3> --}}
					<div class="boxactive greenborder">
						<img src="/images/{{ $item->gambar }}" alt="">
						<div class="boxactivetext">
							<p>{{ $item->judul }}</p>
							<table>
								<tr>
									<td>Start Price :</td>
									<td>Sold For :</td>
								</tr>
								<tr>
									<td>Rp {{ $item->price }},-</td>
									<td>Rp 280.500,-</td>
								</tr>
								<tr>
									<td>Buy Now :</td>
									<td>Time Remaining :</td>
								</tr>
								<tr>
									<td>Rp {{ $item->buyNow }},-</td>
									<td>Expired</td>
								</tr>
							</table>
						</div>
					</div>
				@endforeach
			</div>
			<div class="expirebids mt-4">
				<h1 class="fs-4 fw-bold">EXPIRED</h1>
				<div class="boxactive blackborder">
					<img src="/images/cloth.png" alt="">
					<div class="boxactivetext">
						<p>Jaket Zara Man Duble Breasted Trench Coat Water Repellent Khakis</p>
						<table>
							<tr>
								<td>Start Price :</td>
								<td>Sold For :</td>
							</tr>
							<tr>
								<td>Rp 240.000,-</td>
								<td>Rp 275.000,-</td>
							</tr>
							<tr>
								<td>Buy Now :</td>
								<td>Time Remaining :</td>
							</tr>
							<tr>
								<td>Rp 400.000,-</td>
								<td>Expired</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection