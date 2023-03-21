<?php
session_start();
if(empty($_SESSION['nisn'])){
        echo"<script>
        alert('Maaf Anda Belum Login');
        window.location.assign('../index.php')
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
        
    <div class="container mt-5 mb-5">
        <nav class="d-flex">
            <div>
                <h3>SPaySPP.</h3>
                <p>Smart Payment for School Tuition Fee.
            </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item"><a href="siswa.php" class="text-decoration-none text-dark fw-bold">Home</a></li>
                    <li class="list-inline-item"><a href="siswa.php?url=logout" class="text-decoration-none text-dark fw-bold">Logout</a></li>

                </ul>
            </div>
        </nav>
        <hr>
        <div class="alert alert-warning">
        Anda Login Sebagai Siswa <b><?=$_SESSION['nama'];?></b> di Aplikasi SPaySPP
        
        </div>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Siswa.</h4>";
                echo "Aplikasi SPaySPP digunakan untuk mempermudah siswa/ siswi mengecek History Pembayaran SPP.";
                echo "<hr>";
                    include 'history-pembayaran.php';
            }else{
                include $file.'.php';
            }
            ?>
        </div>
    </div>

    </div>
</body>
</html>