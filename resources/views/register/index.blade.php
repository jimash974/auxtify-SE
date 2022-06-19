<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Register page</title>
  <link rel="stylesheet" href="{{ url('/css/register.css') }}">
  <link rel="shortcut icon" href="../images/auxtify_logo 1.ico" type="image/x-icon">

</head>

<body>
  <img src="../images/auxtify_logo 1.png" class="logo" alt="" width="800">
  <div class="container allbox">
    <h1>Register Account</h1>
    <p>
      Already have account ??? 
      <a href="/login">Login</a>
    </p>
      <form action="/register" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control email @error('name') is-invalid @enderror"
            placeholder="Type your name here" name="name" id="name" required value="{{ old('name') }}">
            @error ('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control email @error('email') is-invalid @enderror"
            placeholder="Type your email address here" id="email" name="email" required value="{{ old('email') }}">
            @error ('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control email @error('username') is-invalid @enderror" id="username" name="username"
            placeholder="Type your username here" required value="{{ old('username') }}">
            @error ('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control pass @error('password') is-invalid @enderror" id="password" name="password" placeholder="Type your password here" required> 
            @error ('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <button class="btn" type="submit">Register</button>
    </form>
  </div>

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