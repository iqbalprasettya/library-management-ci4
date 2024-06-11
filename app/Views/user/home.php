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

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success mt-3">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>
                            <div class="card mt-5 py-4 px-4">
                                <div class="row justify-content-between my-3">
                                    <div>
                                        <h3>Library Management System</h3>
                                    </div>
                                    <!-- sembunyikan tombol ketika anggota sudah login dan gantikan dengan tombol logout -->

                                    <div class="btn-auth mt-3">
                                        <a href="<?php echo base_url('register') ?>" class="btn btn-success btn-sm">Register</a>
                                        <a href="<?php echo base_url('login') ?>" class="btn btn-outline-success btn-sm me-1">Login</a>
                                    </div>


                                </div>
                                <!-- Example Colored Cards for Dashboard Demo-->
                                <div class="row mt-4">
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