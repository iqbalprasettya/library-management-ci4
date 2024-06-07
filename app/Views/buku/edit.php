<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                        Buku
                    </h1>
                    <div class="page-header-subtitle">Dynamic form components to give your users informative and intuitive inputs</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <!-- Default Bootstrap Form Controls-->
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Tambah Buku</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="/buku/update/<?= $buku['no_buku'] ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">Judul</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="judul" value="<?= $buku['judul'] ?>" required />
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="exampleFormControlInput1">Pengarang</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="pengarang" value="<?= $buku['pengarang'] ?>" required />
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <!-- year option loop  -->
                                            <label for="exampleFormControlInput1">Tahun Terbit</label>
                                            <select class="form-control" id="exampleFormControlInput1" name="tahun_terbit" required>
                                                <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                                                    <option value="<?= $i ?>" <?= $buku['tahun_terbit'] == $i ? 'selected' : '' ?>><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlTextarea1">Genre Buku</label>
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
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>