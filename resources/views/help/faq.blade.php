@extends('layouts.settings')
@section('contentFill')
@include('partials.navbarHelpSupport')
<link rel="stylesheet" href="/css/faq.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<div class="settings-content d-flex justify-content-around py-5">
	<div class="settings-left px-5">
		<ul>
			<li><a href="/help/chat">Chat with Us</a></li>
			<li class="fw-bold"><a href="/help/faq">FAQ</a></li>
		</ul>
	</div>
	<div class="vr"></div>
	<div class="settings-right">
    <h1>FAQ</h1>
    <hr>
    <p>
      <button class="btn btn-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
        Q : Bagaimana mekanisme lelangnya?<i class='bx bx-chevron-down'></i>
      </button>
    </p>
    <div class="collapse" id="faq1">
      <div class="card card-body">
        A : Penawar melakukan Bid, lalu jika sampai waktu habis tidak ada penawar lain yang menawar dengan harga lebih tinggi, maka kamulah yang menjadi pemenang lelang tersebut. Setelah itu pelelang bisa langsung mengirimkan barangnya kepada penawar
      </div>
    </div>
    <p>
      <button class="btn btn-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
        Q : Bagaimana cara Deposit Saldo?
        <i class='bx bx-chevron-down'></i>
      </button>
    </p>
    <div class="collapse" id="faq2">
      <div class="card card-body">
        A : Bisa menggunakan Transfer ATM, dan m-Banking.
      </div>
    </div>
    <p>
      <button class="btn btn-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
        Q : Bagaimana cara menjadi “SELLER”?<i class='bx bx-chevron-down'></i>
      </button>
    </p>
    <div class="collapse" id="faq3">
      <div class="card card-body">
        A : Harus mendaftar dan melewati proses verifikasi dari kami.
      </div>
    </div>
  </div>
</div>

<script>
  const btns = document.querySelectorAll('.btn-toggle');
  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('activated');
    });
  });
</script>
@endsection