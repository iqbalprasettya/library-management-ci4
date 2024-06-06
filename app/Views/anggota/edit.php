<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Edit Anggota</h1>
<form action="/anggota/update/<?= $anggota['id_anggota'] ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota['nama'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?= $anggota['alamat'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota" value="<?= $anggota['kota'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No. Telp</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $anggota['no_telp'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $anggota['tgl_lahir'] ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<?= $this->endSection() ?>