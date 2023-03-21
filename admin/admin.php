<?php
session_start();
if(empty($_SESSION['id_petugas'])){
        echo"<script>
        alert('Maaf Anda Belum Login');
        window.location.assign('../index2.php')
        </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
        alert('Maaf Anda Bukan Sesi Admin');
        window.location.assign('../index2.php')
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
        
<style>
        /* Tambahkan style untuk sidebar menu */
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #f5f5f5;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: 200px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 1;
        overflow: hidden;
    }

    .menu-toggle {
        display: block;
        padding: 10px 20px;
        font-weight: bold;
        border: none;
        background: #f7f7f7;
        cursor: pointer;
        transition: all 0.3s;
    }

    .menu-container {
        overflow-y: auto;
        max-height: 100%;
        padding: 20px;
        transition: all 0.3s;
    }

    .menu-search {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid #ccc;
        background: #f7f7f7;
        font-size: 14px;
        color: #333;
    }

    .menu-item {
        display: block;
        padding: 10px 20px;
        font-weight: bold;
        text-decoration: none;
       
    }
    </style>
</head>

<body>
<div class="sidebar">
    <button class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
    <div class="menu-container">
        <a href="admin.php" class="menu-item active">
            <i class="fa fa-home"></i>
            <span>Home</span>
        </a>
        <a href="admin.php?url=spp" class="menu-item">
            <i class="fa fa-dollar"></i>
            <span>SPP</span>
        </a>
        <a href="admin.php?url=kelas" class="menu-item">
            <i class="fa fa-building"></i>
            <span>Kelas</span>
        </a>
        <a href="admin.php?url=siswa" class="menu-item">
            <i class="fa fa-users"></i>
            <span>Siswa</span>
        </a>
        <a href="admin.php?url=petugas" class="menu-item">
            <i class="fa fa-user"></i>
            <span>Petugas</span>
        </a>
        <a href="admin.php?url=pembayaran" class="menu-item">
            <i class="fa fa-money"></i>
            <span>Pembayaran</span>
        </a>
        <a href="admin.php?url=logout" class="menu-item">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

<style>
  
    </style>
    <div class="content">
    <div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-md-8">
      <h3>S<i class="fa fa-paypal" aria-hidden="true"></i>aySPP.</h3>
      <p>Smart Payment for School Tuition Fee.</p>
    </div>
  </div>
</div>

            <hr>
            <div class="alert alert-warning">
                Anda Login Sebagai <b><?=$_SESSION['nama_petugas'];?></b> di Aplikasi SPaySPP.
            </div>

        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang di Homepage Aplikasi SPaySPP.</h4>";
                echo "<p>Aplikasi pembayaran SPP adalah sebuah aplikasi yang dirancang untuk memudahkan proses pembayaran SPP (Sumbangan Pembinaan Pendidikan) atau biaya pendidikan yang harus dibayarkan oleh siswa/siswi kepada sekolah atau institusi pendidikan. Aplikasi ini biasanya digunakan oleh sekolah, kampus, atau institusi pendidikan lainnya.</p>";
                echo "<p>Aplikasi pembayaran SPP juga memudahkan sekolah atau institusi pendidikan dalam mengelola pembayaran SPP, karena semua transaksi pembayaran akan tercatat secara digital dan dapat diakses kapan saja. Selain itu, aplikasi ini juga memudahkan pengguna untuk melakukan pelacakan pembayaran SPP, mengingatkan siswa/siswi tentang batas waktu pembayaran, dan memberikan notifikasi kepada sekolah jika ada pembayaran yang masih tertunda.</p>";
                echo "<p>Dengan menggunakan aplikasi pembayaran SPaySPP, proses pembayaran SPP menjadi lebih efisien dan praktis, sehingga siswa/siswi dan sekolah dapat fokus pada kegiatan belajar mengajar tanpa harus khawatir dengan masalah administrasi keuangan.</p>";
            }else{
                include $file.'.php';
            }
            ?>
            </div>
        </div>
    </div>
</body>

</html>