<h5>Halaman Tambah Data Petugas.</h5>
<a href="?url=petugas" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
    <div class="form-group mb-2">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Level Petugas</label>
        <select name="level" class="form-control" required>
            <option value="">Pilih Level Petugas</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <button type="reset" class="btn btn-outline-warning"><i class="fa fa-ban" aria-hidden="true"></i> Clear</button>
    </div>
</form>