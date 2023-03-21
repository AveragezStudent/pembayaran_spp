<h3 class="text-center">Halaman Data Petugas</h3>
<hr>
<a href="?url=tambah-petugas" class="btn btn-outline-dark"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Tambah</a>
<br></br>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
        <td><b>Kode Petugas</b></td>
        <td><b>Username</b></td>
        <td><b>Password</b></td>
        <td><b>Nama Petugas</b></td>
        <td><b>Level</b></td>
        <td><b>Edit</b></td>
        <td><b>Hapus</b></td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM petugas ORDER BY id_petugas ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_petugas'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href = "?url=edit-petugas&id_petugas= <?= $data['id_petugas'] ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href = "?url=hapus-petugas&id_petugas= <?= $data['id_petugas'] ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php }?>
</table>