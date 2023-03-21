<?php
    $nisn = $_GET['nisn'];
    include '../koneksi.php';
    $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>
<h3 class="text-center">Halaman Edit Data Siswa.</h3>
<hr>
<a href="?url=siswa" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
<form method="post" action="?url=proses-edit-siswa&nisn=<?= $nisn;?>">
    <div class="form-group mb-2">
        <label>NISN</label>
        <input value="<?= $data['nisn']?>" readonly type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>NIS</label>
        <input value="<?= $data['nis']?>" type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama</label>
        <input value="<?= $data['nama']?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="<?= $data['id_kelas']?>"> <?= $data['nama_kelas']?></option>
            <?php
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas){
            ?>
            <option value="<?= $data_kelas['id_kelas']?>"> <?= $data_kelas['nama_kelas'];?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required><?= $data['alamat']?></textarea>
    </div>
    <div class="form-group mb-2">
        <label>No Telpon</label>
        <input value="<?= $data['no_telp']?>" type="number" name="no_telp" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>SPP</label>
        <input readonly value="<?= $data['tahun'];?> | <?= number_format($data['nominal'],2,',','.');?>" name="nominal" class="form-control" required>
        <!-- <select name="id_spp" class="form-control" required>
            <option value="">Pilih SPP</option>
           <?php
            include '../koneksi.php';
            $spp = mysqli_query($koneksi, "SELECT*FROM spp ORDER BY id_spp ASC");
            foreach($spp as $data_spp){
            ?>
            <option value="<?= $data_spp['id_spp']?>"> <?= $data_spp['tahun'];?> | <?= number_format($data_spp['nominal'],2,',','.');?></option>
            <?php } ?>
        </select> -->
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <button type="reset" class="btn btn-outline-warning"><i class="fa fa-ban" aria-hidden="true"></i> Clear</button>
    </div>
</form>