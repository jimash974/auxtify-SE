@extends('layouts.settings')
@section('contentFill')
@include('partials.navbar-informations')
<link rel="stylesheet" href="/css/accountHistoryDetail.css">
<?php
use Carbon\Carbon;
?>

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
									<td>Rp {{ $item->bid }},-</td>
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
				<?php 
				$date = Carbon::now();
				?>
				@forEach($Watchs as $watch)
					{{-- <p>{{ $watch->item->End_date }}</p>
					<p>{{ $date }}</p> --}}
					@if($watch->item->End_date < $date and $watch->item->user_id != auth()->user()->id)
						<div class="boxactive blackborder">
							<img src="/images/{{ $watch->item->gambar }}" alt="">
							<div class="boxactivetext">
								<p>{{ $watch->item->judul }}</p>
								<table>
									<tr>
										<td>Start Price :</td>
										<td>Sold For :</td>
									</tr>
									<tr>
										<td>Rp {{ $watch->item->price }},-</td>
										<td>Rp {{ $watch->item->bid }},-</td>
									</tr>
									<tr>
										<td>Buy Now :</td>
										<td>Time Remaining :</td>
									</tr>
									<tr>
										<td>Rp {{ $watch->item->buyNow }},-</td>
										<td>Expired</td>
									</tr>
								</table>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection