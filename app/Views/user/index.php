<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Anggota</title>
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">

                    <div class="text-end mt-5"><a href="/user/logout" class="btn btn-danger">Logout <i class="m-1" data-feather="log-out"></i></a></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">

                            <div class="card my-3">
                                <div class="card-header">Extended DataTables</div>

                                <div class="card-body overflow-auto">
                                    <div class="my-3">

                                        <a href="/user/pinjam" class="btn btn-success btn-sm">Pinjam <i class="m-1" data-feather="book-open"></i></a>

                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger mt-3">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (session()->getFlashdata('success')) : ?>
                                            <div class="alert alert-success mt-3">
                                                <?= session()->getFlashdata('success') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>No Pinjam</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pinjam as $p) : ?>
                                                <tr>
                                                    <td><?= $p['no_pinjam'] ?></td>
                                                    <td><?= $p['judul_buku'] ?></td>
                                                    <td><span class="badge bg-primary"><?= $p['tgl_pinjam'] ?></span></td>
                                                    <td><span class="badge bg-info"><?= $p['tgl_kembali'] ?></span></td>

                                                    <td>
                                                        <button class="btn btn-danger btn-sm" onclick="location.href='/user/pinjam/delete/<?= $p['no_pinjam'] ?>'">Kembalikan <i class="m-1" data-feather="log-out"></i></button>


                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>


                                    <div class="row mt-5">
                                    <h3 class="mb-3">Library Management System</h3>

                                    <div class="col-lg-6 col-xl-3 mb-4">
                                        <div class="card bg-primary text-white h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="me-3">
                                                        <div class="text-white-75 small">Total Anggota</div>
                                                        <!-- hittung total anggota -->
                                                         <div class="fs-2 fw-semibold"><?php echo $totalAnggota ?></div>
                                                    </div>
                                                    <i class="feather-xl text-white-50" data-feather="users"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between small">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-3 mb-4">
                                        <div class="card bg-warning text-white h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="me-3">
                                                        <div class="text-white-75 small">Total Buku</div>
                                                        <div class="text-lg fw-bold"><?php echo $totalBuku ?></div>

                                                    </div>
                                                    <i class="feather-xl text-white-50" data-feather="book-open"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between small">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-3 mb-4">
                                        <div class="card bg-success text-white h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="me-3">
                                                        <div class="text-white-75 small">Total Peminjaman</div>
                                                        <div class="text-lg fw-bold"><?php echo $totalPinjam ?></div>
                                                    </div>
                                                    <i class="feather-xl text-white-50" data-feather="bookmark"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between small">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-3 mb-4">
                                        <div class="card bg-info text-white h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="me-3">
                                                        <div class="text-white-75 small">Total Buku Tersedia</div>
                                                        <div class="text-lg fw-bold"><?php echo $totalBukuTersedia ?></div>
                                                    </div>
                                                    <i class="feather-xl text-white-50" data-feather="check-square"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Pinjam Buku <?= date('Y') ?></div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables/datatables-simple-demo.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>