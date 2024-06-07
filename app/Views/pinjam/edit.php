<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                        Pinjam
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
                    <div class="card-header">Tambah Pinjam</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="/pinjam/update/<?= $pinjam['no_pinjam'] ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1">Anggota</label>
                                            <select class="form-control" id="id_anggota" name="id_anggota" required>
                                                <?php foreach ($anggota as $a) : ?>
                                                    <option value="<?= $a['id_anggota'] ?>" <?= $a['id_anggota'] == $pinjam['id_anggota'] ? 'selected' : '' ?>><?= $a['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1">Buku</label>
                                            <select class="form-control" id="no_buku" name="no_buku" required>
                                                <?php foreach ($buku as $b) : ?>
                                                    <option value="<?= $b['no_buku'] ?>" <?= $b['no_buku'] == $pinjam['no_buku'] ? 'selected' : '' ?>><?= $b['judul'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="exampleFormControlTextarea1">Tanggal Pinjam</label>
                                            <input type="date" class="form-control visually-hidden" id="tgl_pinjam" name="tgl_pinjam" value="<?= $pinjam['tgl_pinjam'] ?>" required>
                                            <h1><span class="badge bg-secondary"><?= $pinjam['tgl_pinjam'] ?></span></h1>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="exampleFormControlTextarea1">Tanggal Kembali</label>
                                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $pinjam['tgl_kembali'] ?>" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
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