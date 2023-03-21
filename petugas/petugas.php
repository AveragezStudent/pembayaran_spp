<?php
session_start();
if(empty($_SESSION['id_petugas'])){
        echo"<script>
        alert('Maaf Anda Belum Login');
        window.location.assign('../index2.php')
        </script>";
}
if($_SESSION['level']!='petugas'){
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
                    <li class="list-inline-item"><a href="petugas.php" class="text-decoration-none text-dark fw-bold">Home</a></li>
                    <li class="list-inline-item"><a href="petugas.php?url=pembayaran" class="text-decoration-none text-dark fw-bold">Pembayaran</a></li>
                    <li class="list-inline-item"><a href="petugas.php?url=logout" class="text-decoration-none text-dark fw-bold">Logout</a></li>

                </ul>
            </div>
        </nav>
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