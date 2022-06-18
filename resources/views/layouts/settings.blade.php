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
    <link href="https://fonts.googleapis.com/css2?family=Actor&family=Poppins:wght@200;300;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('/images/auxtify_logo 1.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="/css/settings-navbar.css">
    <link rel="stylesheet" href=" {{ request()->segment(1) == 'informations' && request()->segment(2) == 'status' ? url('/css/accountStatusDetail.css') : url('/css/accountSettingsDetail.css') }} ">
    <title>Account Settings - Auxtify</title>
</head>

<body>

  <header>
    <nav class="navbar p-2 px-4 d-flex justify-content-between align-items-center">
      <div class="left">
        <a href="/dashboard"><img src="{{ url('/images/Home_duotone_line.png') }}" alt=""></a>
      </div>
      <div class="mid">
        <ul class="d-flex justify-content-around align-items-center">
          <li class="{{(request()->segment(1) == 'account') ? 'active' : ''}}"><a href="/account/{{ auth()->user()->username }}">Account</a></li>
          <li class="{{(request()->segment(1) == 'informations') ? 'active' : ''}}"><a href="/informations/settings/{{ auth()->user()->username }}">Informations</a></li>
          <li class="{{(request()->segment(1) == 'help') ? 'active' : ''}}"><a href="/help/chat">Help & Support</a></li>
        </ul>
      </div>
      <div class="profile-wrapper d-flex align-items-center">
        <div class="user-profile-text">
          @auth
            <h4>{{ auth()->user()->username }}</h4>
            @if (auth()->user()->saldo)
              <p>Saldo : Rp. {{ auth()->user()->saldo }}</p>
            @else
              <p>Saldo : Rp. 0</p>
            @endif
          @else
            <h4>Guest</h4>
            <p>-</p>
          @endauth
        </div>
        <div class="user-profile">
          <img src="{{ url('/images/user_profile.png') }}" style="cursor:pointer" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%">
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Notifications</a></li>
              <li><a class="dropdown-item" href="#">Watchlist</a></li>
              <li><a class="dropdown-item" href="/informations/status/{{ auth()->user()->username }}">Wallet</a></li>
              <li><a class="dropdown-item" href="#">Filter</a></li>
              <li><a class="dropdown-item" href="/informations/settings/{{ auth()->user()->username }}">Settings</a></li>
              <li>
                <form action="/logout" method="post" class="ms-0">
                  @csrf
                  <button type="submit" class="dropdown-item">
                      Logout
                  </button>
                </form>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @yield('contentFill')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>