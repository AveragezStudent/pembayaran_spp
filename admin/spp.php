<h3 class="text-center">Halaman Data SPP</h3>
<hr>
<a href="?url=tambah-spp" class="btn btn-outline-dark"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Tambah</a>
<br></br>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>No</b></td>
        <td><b>Kode SPP</b></td>
        <td><b>Tahun</b></td>
        <td><b>Nominal</b></td>
        <td><b>Edit</b></td>
        <td><b>Hapus</b></td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM spp ORDER BY id_spp ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_spp'] ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td>
                <a href = "?url=edit-spp&id_spp= <?= $data['id_spp'] ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href = "?url=hapus-spp&id_spp= <?= $data['id_spp'] ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php }?>
</table>