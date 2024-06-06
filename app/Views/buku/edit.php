<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Edit Buku</h1>
<form action="/buku/update/<?= $buku['no_buku'] ?>" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="jenis_buku" class="form-label">Jenis Buku</label>
        <!-- option genre. Fiksi, Non-FIksi, Romantis, Dongeng, Novel, Edukasi -->
        <select class="form-select" id="genre_buku" name="genre_buku" required>
            <option value="Fiksi" <?= $buku['genre_buku'] == 'Fiksi' ? 'selected' : '' ?>>Fiksi</option>
            <option value="Non-Fiksi" <?= $buku['genre_buku'] == 'Non-Fiksi' ? 'selected' : '' ?>>Non-Fiksi</option>
            <option value="Romantis" <?= $buku['genre_buku'] == 'Romantis' ? 'selected' : '' ?>>Romantis</option>
            <option value="Dongeng" <?= $buku['genre_buku'] == 'Dongeng' ? 'selected' : '' ?>>Dongeng</option>
            <option value="Novel" <?= $buku['genre_buku'] == 'Novel' ? 'selected' : '' ?>>Novel</option>
            <option value="Edukasi" <?= $buku['genre_buku'] == 'Edukasi' ? 'selected' : '' ?>>Edukasi</option>
        </select>
    </div>
    <!-- status -->
    <div class="mb-3 visually-hidden">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="Tersedia" <?= $buku['status'] == 'Tersedia' ? 'selected' : '' ?>>Tersedia</option>
            <option value="Tidak Tersedia" <?= $buku['status'] == 'Tidak Tersedia' ? 'selected' : '' ?>>]Tidak Tersedia</option>
        </select>
    </div>


    <button type="submit" class="btn btn-success">Update</button>
</form>
<?= $this->endSection() ?>