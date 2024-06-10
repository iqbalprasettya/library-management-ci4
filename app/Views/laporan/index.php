<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Laporan Peminjaman Buku
                    </h1>
                    <div class="page-header-subtitle">An extension of the Simple DataTables library, customized for SB Admin Pro</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <a href="/dashboard/laporan/export-pinjam" class="btn btn-success my-1">Export Peminjaman to Excel</a>
    <a href="/dashboard/laporan/export-anggota" class="btn btn-success my-1">Export Anggota to Excel</a>
    <a href="/dashboard/laporan/export-buku" class="btn btn-success my-1">Export Buku to Excel</a>
</div>
<?= $this->endSection() ?>