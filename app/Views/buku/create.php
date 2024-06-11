<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="book"></i></div>
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
                                <form action="/dashboard/buku" method="post">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">Judul</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="judul" required />
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="exampleFormControlInput1">Pengarang</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="pengarang" required />
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <!-- year option loop -->
                                            <label for="exampleFormControlSelect1">Tahun Terbit</label><select class="form-select" id="tahun_terbit" name="tahun_terbit" required>
                                                <option value="">Tahun</option>
                                                <?php for ($i = date('Y'); $i >=  (date('Y')
                                                    - 100); $i--) : ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlTextarea1">Genre Buku</label>
                                            <select class="form-select" id="genre_buku" name="genre_buku" required>
                                                <option value="">Genre Buku</option>
                                                <option value="Fiksi">Fiksi</option>
                                                <option value="Non-Fiksi">Non-Fiksi</option>
                                                <option value="Romantis">Romantis</option>
                                                <option value="Dongeng">Dongeng</option>
                                                <option value="Novel">Novel</option>
                                                <option value="Edukasi">Edukasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan <i class="m-1" data-feather="save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>