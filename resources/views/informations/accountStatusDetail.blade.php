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
    <link rel="stylesheet" href="{{ url('/css/accountStatusDetail.css') }}">
    <title>Account Status - Auxtify</title>
</head>

<body>

  <header>
    <nav class="navbar p-2 px-4 d-flex justify-content-between align-items-center">
      <div class="left">
        <a href="/dashboard"><img src="../images/Home_duotone_line.png" alt=""></a>
      </div>
      <div class="mid">
        <ul class="d-flex justify-content-around align-items-center">
          <li><a href="">Account</a></li>
          <li><a href="">Informations</a></li>
          <li><a href="">Help & Support</a></li>
        </ul>
      </div>
      <div class="profile-wrapper d-flex align-items-center">
        <div class="user-profile-text">
          <h4>Susi Susianti</h4>
          <p>Balance: Rp 5.000</p>
      </div>
        <div class="user-profile">
          <img src="../images/user_profile.png" style="cursor:pointer" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%">
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Notifications</a></li>
              <li><a class="dropdown-item" href="#">Watchlist</a></li>
              <li><a class="dropdown-item" href="#">Wallet</a></li>
              <li><a class="dropdown-item" href="#">Filter</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <div class="title-wrapper">
    <div class="title-text my-3">
      <h1>Informations</h1>
    </div>
    <div class="title-buttons">
      <ul class="d-flex justify-content-around">
        <li class="title-btn"><a href="#">Settings</a></li>
        <li class="title-btn"><a href="#">Status</a></li>
        <li class="title-btn"><a href="#">History</a></li>
      </ul>
    </div>
  </div>

  <div class="settings-content d-flex justify-content-around py-5">
    <div class="settings-left px-5">
      <div class="name-and-type d-flex align-items-baseline">
        <h3 class="profile-name fw-bold me-3">Susi Susianti</h3>
        <h4 class="user-type fw-bold">User</h4>
      </div>
      <ul>
        <li><a href="">Balance</a></li>
        <li><a href="">Watchlist</a></li>
      </ul>
    </div>
    <div class="vr"></div>
    <div class="settings-right">
      <div class="right-top d-flex align-items-center justify-content-between">
        <h3>Balance</h3>
      </div>
      <hr id="settings-separator">
      <div class="right-bottom">
        <label for="profile-name">Full Name</label>
        <h1 id="profile-name" class="fs-3">Susi Susianti</h1>

        <label for="remaining-balance" class="mt-3">Remaining Balance</label>
        <h1 id="remaining-balance" class="fs-3">Rp 5.000</h1>

        <div class="deposit-group mt-5">
          <h2>DEPOSIT</h2>
          <form action="" method="post">
            <div class="form-group">
              <label for="deposit-amount">ENTER BALANCE AMOUNT:</label>
              <input type="text" name="amount" id="amount">
            </div>
            <div class="form-group mt-4">
              <label for="payment-method">PAYMENT METHOD:</label>
              <select name="payment-method" id="payment-method">
                <option value="">Select Payment Method</option>
                <option value="">Bank Transfer</option>
                <option value="">Paypal</option>
                <option value="">Credit Card</option>
              </select>
            </div>
            <div class="form-btn-group d-flex justify-content-end">
              <button type="reset" class="btn btn-light btn-cancel me-4">Cancel</button>
              <button type="submit" class="btn btn-save">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
