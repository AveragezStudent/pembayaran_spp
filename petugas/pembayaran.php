<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/bootstrap.bundle.min.js"></script>
<div class="container mt-5 mb-5">
<div class="card mt-2">
<div class="card-body">
<h5>Halaman Pilih Data Siswa Untuk Pembayaran.</h5>
<hr>
<form action="pembayaran.php" method="GET">
    <div class="input-group input-group-sm w-50">
        <input type="text" name="cari" placeholder="Cari Siswa berdasarkan Nama dan NISN.." class="form-control">
        <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-outline-dark">Cari</button>
        </div>
    </div>
<hr>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
        <td><b>NISN</b></td>
        <td><b>Nama</b></td>
        <td><b>Kelas</b></td>
        <td><b>SPP</b></td>
        <td><b>Nominal</b></td>
        <td><b>Sudah Dibayar</b></td>
        <td><b>Belum Bayar</b></td>
        <td><b>Status</b></td>
        <td><b>History</b></td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    if(isset($_GET['submit'])){
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND (siswa.nisn LIKE '%$cari%' OR siswa.nama LIKE '%$cari%') ORDER BY nama ASC";
    } else {
        $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
    }
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ 
        // cek apakah sudah bayar / belum
        $data_pembayaran = mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn='$data[nisn]'");
        $data_pembayaran = mysqli_fetch_array($data_pembayaran);
        $sudah_bayar = $data_pembayaran['jumlah_bayar'];
        $belum_bayar = $data['nominal'] - $data_pembayaran['jumlah_bayar'];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= number_format($data['nominal'],2,',','.'); ?></td>
            <td><?= number_format($sudah_bayar,2,',','.'); ?></td>
            <td><?= number_format($belum_bayar,2,',','.'); ?></td>
            <td>
                <?php
                if($belum_bayar==0){
                    echo "<span class='badge text-bg-success'>Sudah Lunas</span>";
                } else{?>
                    <a href="?url=tambah-pembayaran&nisn=<?= $data['nisn']?>&belum_bayar=<?=$belum_bayar?>" class="btn btn-outline-danger">Pilih & Bayar</a>
                <?php }?>
            </td>   
            <td>
                <a href = "?url=history-pembayaran&nisn= <?= $data['nisn'] ?>" class="btn btn-outline-info">History</a>
            </td>
        </tr>
    <?php }?>
</table>
</form>
</div>
</div>