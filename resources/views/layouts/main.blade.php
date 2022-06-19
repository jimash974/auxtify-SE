<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Actor&family=Poppins:wght@300;600;700&display=swap"
      rel="stylesheet">
  <link rel="shortcut icon" href="../images/auxtify_logo 1.ico" type="image/x-icon">
  <title>{{ $title }} - Auxtify</title>
</head>

<body>

  <header class="navbar">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand m-lg-3" href="\dashboard"><img src="../images/logo.svg" alt="Auxtify Logo"></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <form action="/dashboard" class="search d-flex">
              <img class="fa fa-search" src="../images/Location.png" alt="location logo">
              <input
                  type="text" class="form-control search-bar"
                  placeholder="Sepatu Converse Chuck 70s ukuran...." name="search"> 
              <button type="submit" class="btn">Search</button>
            </form>
          </div>
        </div>
        <div class="profile-wrapper">
          <div class="user-profile">
            @auth
              @if(auth()->user()->profile_picture )
              <img src="{{ url('/profile-picture' . '/' . auth()->user()->profile_picture  ) }}" style="cursor:pointer" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%">
              @else
              <img src="{{ url('/images/user_profile.png') }}" style="cursor:pointer" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%">
              @endif
            @else
              <img src="{{ url('/images/user_profile.png') }}" style="cursor:pointer" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%">
            @endauth

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            @auth
            <li><a class="dropdown-item" href="#">Notifications</a></li>
            <li><a class="dropdown-item" href="/informations/status/watchlists/{{ auth()->user()->username }}">Watchlist</a></li>
            <li><a class="dropdown-item" href="/informations/status/balance/{{ auth()->user()->username }}">Wallet</a></li>
            <li><a class="dropdown-item" href="#">Filter</a></li>
            <li><a class="dropdown-item" href="/informations/settings/{{ auth()->user()->username }}">Settings</a></li>
            <li>
              <form action="/logout" class="ms-0" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    Logout
                </button>
              </form>
            </li>
            @else
            <li>
              <a class="dropdown-item" href="/login">Login</a>
            </li>
            @endauth
          </ul>
          
          @auth
          <div class="user-profile-text">
            <h4>{{ auth()->user()->username }}</h4>
            @if (auth()->user()->saldo)
            <p>Saldo : Rp. {{ auth()->user()->saldo }}</p>
            @else
            <p>Saldo : Rp. 0</p>
            @endif
            {{-- <p>Balance : Rp{{ auth()->user()->saldo }}</p> --}}
          </div>
          @else
          <div class="user-profile-text">
            <h4>Guest</h4>
            <p>Balance: -</p>
          </div>
          @endauth
          
        </div>
      </div>
      </div>
    </nav>
  </header>
  <!-- Navbar End -->


  <div class="sidebar">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width:16vw;background-color: #203239">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item top">
          <a href="/categorymenu" class="nav-link text-white" aria-current="page">
            <img src="../images/Paper.png" alt="paper">
            Category
          </a>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <img src="../images/Alarmclock.png" alt="error gais">
              Ending Soon
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <img src="../images/lightning_ring.png" alt="error gais">
              Rising Fast
            </a>
          </li>
      </ul>
      <a href="/help/chat" class="nav-link text-white">
        <img src="../images/Chat_alt_3.png" alt="error gais">
          Help & Support
      </a>
    </div>
  </div>

  <div class="barrier">
    @yield('contentFill')
  </div>


  <footer>
    <div class="container">
      <div id="logo">
        <img src="../images/logo_white.png" alt="Auxtify Logo">
      </div>
      <div id="social-media">
        <a href="#"><img src="../images/phone.png" alt="phone"></a>
        <a href="#" id="end"><img src="../images/mail.png" alt="mail"></a>
      </div>
    </div>
  </footer>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>
