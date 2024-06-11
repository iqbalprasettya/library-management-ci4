<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin Pro</title>
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/site.webmanifest">
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Basic registration form-->
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="alert alert-danger mt-3" role="alert">
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <?= $error ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-bolder my-4">Daftar Akun Anggota</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Registration form-->
                                    <form action="/register" method="post">

                                        <!-- Form Row-->
                                        <!-- <div class="row gx-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter last name" />
                                                </div>
                                            </div>
                                            
                                        </div> -->
                                        <!-- Form Group (email address)            -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>

                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Username</label>
                                            <input class="form-control" id="inputEmailAddress" type="username" name="username" required placeholder="Enter username" />
                                        </div>
                                        <!-- Form Row    -->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (password)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control" id="inputPassword" type="password" name="password" required placeholder="Enter password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputConfirmPassword">Konfirmasi Password</label>
                                                    <input class="form-control" id="inputConfirmPassword" type="password" name="confirm_password" required placeholder="Confirm password" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                                        </div>

                                        <div class="row gx-3">
                                            <div class="col-md-4 mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">No Telp</label>
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Kota</label>
                                                <input type="text" class="form-control" id="kota" name="kota" required>
                                            </div>
                                        </div>
                                        <!-- Form Group (create account submit)-->
                                        <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small">Sudah Punya Akun?<a href="/login"> Masuk</a></div>
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
    <script src="/js/script.js"></script>
</body>

</html>