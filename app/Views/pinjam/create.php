<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Pinjam Buku</h1>
<form action="/pinjam" method="post">
    <div class="mb-3">
        <label for="id_anggota" class="form-label">Anggota</label>
        <select class="form-control" id="id_anggota" name="id_anggota" required>
            <?php foreach ($anggota as $a) : ?>
                <option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></ </option>
                <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="no_buku" class="form-label">Buku</label>
        <select class="form-control" id="no_buku" name="no_buku" required>
            <?php foreach ($buku as $b) : ?>
                <option value="<?= $b['no_buku'] ?>"><?= $b['judul'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
<?= $this->endSection() ?>