<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!-- link css style -->
  <link rel="stylesheet" href="style.css">
  <!-- link google font poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <section class="login d-flex">
    <div class="login-left w-50 h-100">
    <form action="proses-login-petugas.php" method="post">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
          <div class="header">
            <h1 class="text-center">Login SPaySPP</h1>
            <div class="alert alert-warning" role="alert">
                Silahkan login dengan Username dan Password yang tersedia. Klik <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=db_spp&table=petugas" class="alert-link">disini</a> jika lupa dengan Username dan Password Anda!
            </div>
          </div>
          <div class="login-form">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
            <button type="submit" class="signin">LOGIN</button>
            <div class="text-center">
              <span class="d-inline">Anda seorang Siswa? <a href="index.php"
                  class="signup d-inline text-decoration-none">Login disini!</a></span>
            </div>
          </div>

        </div>
      </div>
    </div>

    </div>
    <div class="login-right w-50 h-100">
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/image 3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold">Bayar SPP dengan mudah dan cepat!</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/image 4.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold">Mudahkan pembayaran SPP dengan layanan kami.</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/image 5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold">Pembayaran SPP jadi lebih praktis dan efisien bersama kami.</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</form>
    </div>
  </section>
</body>

</html>