<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>{{ $title }} - Auxtify</title>
  {{-- <link rel="stylesheet" href="login.css"> --}}
  <link rel="stylesheet" href="{{ url('/css/login.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200;400;700&family=Montserrat&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" href="../images/auxtify_logo 1.ico" type="image/x-icon">
</head>

<body>

  <section class="form my-4 mx-5 mysection">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="../images/auxtify_logo 1.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 header">
          <h1 class="font-weight-bold-py-3">Login</h1>
          <h4>Go and check today's top bidded items!</h4>

          {{-- cek apakah di dalalm session ada key yg namanya success, kalau ada maka akan masuk ke if --}}
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <form action="/login" method="post">
            @csrf
            <div class="form-row">
              <div class="col-lg-7">
                <input type="Email" placeholder="Email" class="form-control1 my-3 p-4 @error('email') is-invalid @enderror" name="email" id="email" autofocus required>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-row memex">
              <div class="col-lg-7">
                <input type="password" placeholder="Password" name="password" id="password" class="form-control2 my-3 p-4 @error('password') is-invalid @enderror">
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              </div>
              <div class="form-check box">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember Me
                </label>
              </div>
              <a href="#">Forgot Password</a>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" class="btn1 mt-3 mb-5">Login</button>
              </div>
            </div>
            <p id="myid">Not a member yet? <a href="/register">Register Here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
</body>

</html>