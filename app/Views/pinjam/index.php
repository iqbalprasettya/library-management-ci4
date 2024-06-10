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
                    <a href="/dashboard/pinjam/create" class="btn btn-success btn-sm">Pinjam</a>
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
                        <th>No Pinjam</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <?php if (session()->get('role') === 'admin') : ?>
                            <th>Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pinjam as $p) : ?>
                        <tr>
                            <td><?= $p['no_pinjam'] ?></td>
                            <td><?= $p['nama_anggota'] ?></td>
                            <td><?= $p['judul_buku'] ?></td>
                            <td><span class="badge bg-primary"><?= $p['tgl_pinjam'] ?></span></td>
                            <td><span class="badge bg-info"><?= $p['tgl_kembali'] ?></span></td>
                            <?php if (session()->get('role') === 'admin') : ?>
                                <td>
                                    <a href="/dashboard/pinjam/edit/<?= $p['no_pinjam'] ?>" class="btn btn-datatable btn-icon text-warning"><i data-feather="edit"></i></a>
                                    <a href="/dashboard/pinjam/delete/<?= $p['no_pinjam'] ?>" class="btn btn-datatable btn-icon text-danger " onclick="return confirm('Apakah Anda yakin?')"><i data-feather="trash-2"></i></a>
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