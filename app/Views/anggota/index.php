<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Anggota
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
                    <a href="/dashboard/anggota/create" class="btn btn-success btn-sm">Tambah Anggota</a>
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>No. Telp</th>
                        <th>Tgl Lahir</th>
                        <?php if (session()->get('role') === 'admin') : ?>
                            <th>Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $a['id_anggota'] ?></td>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['username'] ?></td>
                             
                            <td><?= $a['alamat'] ?></td>
                            <td><?= $a['kota'] ?></td>
                            <td><?= $a['no_telp'] ?></td>
                            <td><span class="badge bg-primary"><?= $a['tgl_lahir'] ?></span></td>
                            <?php if (session()->get('role') === 'admin') : ?>
                                <td>
                                    <a href="/dashboard/anggota/edit/<?= $a['id_anggota'] ?>" class="btn btn-datatable btn-icon text-warning"><i data-feather="edit"></i></a>
                                    <a href="/dashboard/anggota/delete/<?= $a['id_anggota'] ?>" class="btn btn-datatable btn-icon text-danger " onclick="return confirm('Apakah Anda yakin?')"><i data-feather="trash-2"></i></a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>