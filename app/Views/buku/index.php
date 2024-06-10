<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Buku
                    </h1>
                    <div class="page-header-subtitle">An extension of the Simple DataTables library, customized for SB Admin Pro</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Extended DataTables</div>

        <div class="card-body overflow-auto">
            <div class="my-3">
                <?php if (session()->get('role') === 'admin') : ?>
                    <a href="/dashboard/buku/create" class="btn btn-success btn-sm">Tambah Buku</a>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger mt-3">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
            </div>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Jenis Buku</th>
                        <th>Status</th>
                        <?php if (session()->get('role') === 'admin') : ?>
                            <th>Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $b) : ?>
                        <tr>
                            <td><?= $b['no_buku'] ?></td>
                            <td><?= $b['judul'] ?></td>
                            <td><?= $b['pengarang'] ?></td>
                            <td><?= $b['tahun_terbit'] ?></td>
                            <td><?= $b['genre_buku'] ?></td>
                            <!-- pengkondisian ketika tersedia dengan warna hijau, warna merah untuk tidak dipinjam -->
                            <td><?= ($b['status'] == 'Tersedia') ? '<span class="badge bg-success">Tersedia</span>' : '<span class="badge bg-danger">Dipinjam</span>' ?></td>
                            <?php if (session()->get('role') === 'admin') : ?>
                                <td>
                                    <a href="/dashboard/buku/edit/<?= $b['no_buku'] ?>" class="btn btn-datatable btn-icon text-warning"><i data-feather="edit"></i></a>
                                    <a href="/dashboard/buku/delete/<?= $b['no_buku'] ?>" class="btn btn-datatable btn-icon text-danger" onclick="return confirm('Apakah Anda yakin?')"><i data-feather="trash-2"></i></a>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>