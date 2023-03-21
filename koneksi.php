<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_spp_paket1');

if(!$koneksi){
    echo "Koneksi Anda Gagal";
}
?>