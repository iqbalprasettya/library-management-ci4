<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Edit Peminjaman</h1>
<form action="/pinjam/update/<?= $pinjam['no_pinjam'] ?>" method="post">
    <div class="mb-3">
        <label for="id_anggota" class="form-label">Anggota</label>
        <select class="form-control" id="id_anggota" name="id_anggota" required>
            <?php foreach ($anggota as $a) : ?>
                <option value="<?= $a['id_anggota'] ?>" <?= $a['id_anggota'] == $pinjam['id_anggota'] ? 'selected' : '' ?>><?= $a['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="no_buku" class="form-label">Buku</label>
        <select class="form-control" id="no_buku" name="no_buku" required>
            <?php foreach ($buku as $b) : ?>
                <option value="<?= $b['no_buku'] ?>" <?= $b['no_buku'] == $pinjam['no_buku'] ? 'selected' : '' ?>><?= $b['judul'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $pinjam['tgl_pinjam'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $pinjam['tgl_kembali'] ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<?= $this->endSection() ?>