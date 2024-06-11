<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                        Anggota
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
                    <div class="card-header">Tambah Anggota</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="/dashboard/anggota" method="post">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">Nama</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="nama" placeholder="Jhon Doe" required />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">Kota</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="kota" placeholder="Bandung" required />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="date" name="tgl_lahir" placeholder="Bandung" required />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleFormControlInput1">No Telp</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="text" name="no_telp" placeholder="08577..." required />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" required></textarea>
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
</div>
<?= $this->endSection() ?>