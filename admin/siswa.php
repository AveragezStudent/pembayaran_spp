<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<div class="container mt-2 mb-2">
<div class="card mt-2">
<div class="card-body">
<h3 class="text-center">Halaman Data Siswa</h3>
<hr>
<form action="siswa.php" method="GET">
<div class="d-flex justify-content-between">
<div class="input-group-append">
  <a href="admin.php?url=siswa" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
  <a href="?url=tambah-siswa" class="btn btn-outline-dark"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="input-group input-group-sm w-50 ml-auto">
    <input type="text" name="cari" placeholder="Cari Siswa berdasarkan Nama dan NISN.." class="form-control">
    <div class="input-group-append">
      <button type="submit" name="submit" class="btn btn-outline-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
<br>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
        <td><b>NISN</b></td>
        <td><b>NIS</b></td>
        <td><b>Nama</b></td>
        <td><b>Kelas</b></td>
        <td><b>Alamat</b></td>
        <td><b>No Telpon</b></td>
        <td><b>SPP</b></td>
        <td><b>Edit</b></td>
        <td><b>Hapus</b></td>
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
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td><?= $data['tahun'] ?> - <?= number_format($data['nominal'],2,',','.'); ?></td>

            <td>
                <a href = "?url=edit-siswa&nisn= <?= $data['nisn'] ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>   
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href = "?url=hapus-siswa&nisn= <?= $data['nisn'] ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php }?>
</table>
</form>
</div>
</div>