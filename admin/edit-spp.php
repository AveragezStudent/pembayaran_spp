<?php
    $id_spp = $_GET['id_spp'];
    include '../koneksi.php';
    $sql = "SELECT * FROM spp WHERE id_spp=$id_spp";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>
<h3 class="text-center">Halaman Edit Data SPP.</h3>
<hr>
  <a href="?url=spp" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
<br><br>
<form method="post" action="?url=proses-edit-spp&id_spp=<?= $id_spp;?>">
    <div class="form-group mb-2">
        <label>Tahun</label>
        <input value="<?= $data['tahun']?>" type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input value="<?= $data['nominal']?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <button type="reset" class="btn btn-outline-warning"><i class="fa fa-ban" aria-hidden="true"></i> Clear</button>
    </div>
</form>