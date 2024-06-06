<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Daftar Peminjaman</h1>
<?php if (session()->get('role') === 'admin') : ?>
    <a href="/pinjam/create" class="btn btn-success">Pinjam</a>
<?php endif; ?>
<table class="table mt-3">
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
                <td><span class="badge text-bg-primary"><?= $p['tgl_pinjam'] ?></span></td>
                <td><span class="badge text-bg-secondary"><?= $p['tgl_kembali'] ?></span></td>
                <?php if (session()->get('role') === 'admin') : ?>
                    <td>
                        <a href="/pinjam/edit/<?= $p['no_pinjam'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/pinjam/delete/<?= $p['no_pinjam'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Kembalikan</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>