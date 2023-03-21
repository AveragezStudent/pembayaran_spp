<h5>Halaman Tambah Data Kelas.</h5>
<a href="?url=kelas" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
<hr>
<form method="post" action="?url=proses-tambah-kelas">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <button type="reset" class="btn btn-outline-warning"><i class="fa fa-ban" aria-hidden="true"></i> Clear</button>
    </div>
</form>