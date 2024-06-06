<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Daftar Buku</h1>
<?php if (session()->get('role') === 'admin') : ?>
    <a href="/buku/create" class="btn btn-success">Tambah Buku</a>
<?php endif; ?>

<?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger mt-3">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<table class="table mt-3">
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
                <td><?= ($b['status'] == 'Tersedia') ? '<span class="badge text-bg-success">Tersedia</span>' : '<span class="badge text-bg-danger">Dipinjam</span>' ?></td>
                <?php if (session()->get('role') === 'admin') : ?>
                    <td>
                        <a href="/buku/edit/<?= $b['no_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/buku/delete/<?= $b['no_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                <?php endif ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>