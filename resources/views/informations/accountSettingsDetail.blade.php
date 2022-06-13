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
    <link rel="shortcut icon" href="{{ url('/images/auxtify_logo 1.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('/css/accountSettingsDetail.css') }}">
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
          <img src="{{ url('/images/user_profile.png') }}" style="cursor:pointer" id="dropdownMenuButton1"
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
    <div class="settings-left">
      <h1 class="mb-5">Profile</h1>
      <div class="profile-settings">
        <img src="{{ url('/images/user_profile.png') }}" alt="">
        <h1 class="profile-name fs-3 fw-bold">Susi Susianti</h1>
        <h3 class="user-type fw-bold">USER</h3>
      </div>
      <div class="followers-following d-flex align-items-center my-3 mx-auto">
        <div class="followers">
          <h1 class="followers-count">157</h1>
          <h3>Followers</h3>
        </div>
        <div class="vr"></div>
        <div class="following">
          <h1 class="following-count">157</h1>
          <h3>Following</h3>
        </div>
      </div>
      <button class="btn p-3 upload-btn fs-4">Upload New Avatar</button>
      <div class="user-location mt-4">
        <h3>Jakarta, Indonesia</h3>
      </div>
    </div>
    <div class="vr"></div>
    <div class="settings-right">
      <div class="right-top d-flex align-items-center justify-content-between">
        <h3>Basic Info</h3>
      </div>
      <hr id="settings-separator">
      <div class="right-bottom">
        <form action="#" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control mb-3" value="">

          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control mb-3" value="title">

          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control mb-3" value="">

          <label for="address">Address</label>
          <input type="text" name="address" id="address" class="form-control mb-3" value="">

          <div class="form-btn-group d-flex justify-content-end">
            <button type="reset" class="btn btn-light btn-cancel me-4">Cancel</button>
            <button type="submit" class="btn btn-save">Save</button>
          </div>
        </form>
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
