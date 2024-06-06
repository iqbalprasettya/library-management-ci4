<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Tambah Buku</h1>
<form action="/buku" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" required>
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
    </div>
    <div class="mb-3">
        <label for="genre_buku" class="form-label">Genre Buku</label>
        <!-- option genre Fiksi, Non-FIksi, Romantis, Dongeng, Novel, Edukasi -->
        <select class="form-select" id="genre_buku" name="genre_buku" required>
            <option value="">Pilih Genre Buku</option>
            <option value="Fiksi">Fiksi</option>
            <option value="Non-Fiksi">Non-Fiksi</option>
            <option value="Romantis">Romantis</option>
            <option value="Dongeng">Dongeng</option>
            <option value="Novel">Novel</option>
            <option value="Edukasi">Edukasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
<?= $this->endSection() ?>