<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/bootstrap.bundle.min.js"></script>
<div class="container">
<div class="card-body">
<h5>Halaman Cari Data Kelas</h5>
<hr>
<form action="cari-kelas.php" method="GET">
    <div class="input-group input-group-sm w-50">
        <input type="text" name="cari" placeholder="Cari Kelas berdasarkan Nama Kelas dan Kompetensi Keahlian.." class="form-control">
        <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-dark">Cari</button>
        </div>
    </div>
</form>
<hr>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
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
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td>
                <a href = "?url=edit-kelas&id_kelas= <?= $data['id_kelas'] ?>" class="btn btn-outline-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href = "?url=hapus-kelas&id_kelas= <?= $data['id_kelas'] ?>" class="btn btn-outline-danger">Hapus</a>
            </td>
        </tr>
    <?php }?>
</table>