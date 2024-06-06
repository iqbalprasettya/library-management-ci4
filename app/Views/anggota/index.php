<!-- extend layout/main -->
<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<h1>Daftar Anggota</h1>
<?php if (session()->get('role') === 'admin') : ?>
    <a href="/anggota/create" class="btn btn-success">Tambah Anggota</a>
<?php endif; ?>
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
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
                <td><?= $a['alamat'] ?></td>
                <td><?= $a['kota'] ?></td>
                <td><?= $a['no_telp'] ?></td>
                <td><?= $a['tgl_lahir'] ?></td>
                <?php if (session()->get('role') === 'admin') : ?>
                    <td>
                        <a href="/anggota/edit/<?= $a['id_anggota'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/anggota/delete/<?= $a['id_anggota'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<?= $this->endSection(); ?>