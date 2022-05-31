<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />


  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="{{ url('/images/auxtify_logo 1.ico') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">

  <title>Auxtify</title>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./images/logo.svg" alt="auxtify logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="/dashboard">Home</a>
          <a class="nav-item nav-link account" href="./login.html">Account</a>
          <a class="nav-item nav-link" href="#">About Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Make the <i>preloveds</i> feel<br>“loved” again!</h1>
      <p class="lead">Tempat para pecinta barang preloved bersaing untuk memberikan rumah baru<br>bagi barang yang
        sudah pernah dicintai pemilik sebelumnya.</p>
      <div class="row height d-flex align-items-center">
        <div class="col-md-8">
          <form class="search" action="/dashboard">
            <img class="fa fa-search" src="./images/Location.png" alt="location logo"> <input type="text"
              class="form-control" placeholder="Sepatu Converse Chuck 70s ukuran...."> 
              <button class="btn">Search</button>
          </form>
        </div>
      </div>
      <img src="./images/auxtify_logo 1.png" class="float-right" alt="error gais">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>200<span>+</span></h1>
            <p>Barang siap<br>ditawar</p>
          </div>
          <div class="col-sm">
            <h1>100%</h1>
            <p>Keamanan saat<br>lelang</p>
          </div>
          <div class="col-sm">
            <h1>999<span>+</span></h1>
            <p>Pelelang dan<br>penawar didalam<br>platform</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>