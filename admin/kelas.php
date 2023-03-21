<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<div class="container mt-2 mb-2">
<div class="card mt-2">
<div class="card-body">
<h3 class="text-center">Halaman Data Kelas</h3>
<hr>
<form action="kelas.php" method="GET">
<div class="d-flex justify-content-between">
<div class="input-group-append">
  <a href="admin.php?url=kelas" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
  <a href="?url=tambah-kelas" class="btn btn-outline-dark"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="input-group input-group-sm w-50 ml-auto">
    <input type="text" name="cari" placeholder="Cari Kelas berdasarkan Nama Kelas dan Kompetensi Keahlian.." class="form-control">
    <div class="input-group-append">
      <button type="submit" name="submit" class="btn btn-outline-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
<br>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
        <td><b>Kode Kelas</b></td>
        <td><b>Nama Kelas</b></td>
        <td><b>Kompetensi Keahlian</b></td>
        <td><b>Edit</b></td>
        <td><b>Hapus</b></td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    if(isset($_GET['submit'])){
        $cari = $_GET['cari'];
        $sql = $sql = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$cari%' OR kompetensi_keahlian LIKE '%$cari%' ORDER BY id_kelas ASC";
    } else {
        $sql = "SELECT * FROM kelas ORDER BY id_kelas ASC";
    }
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_kelas'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td>
                <a href = "?url=edit-kelas&id_kelas= <?= $data['id_kelas'] ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href = "?url=hapus-kelas&id_kelas= <?= $data['id_kelas'] ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php }?>
</table>
</div>
</div>
</form>