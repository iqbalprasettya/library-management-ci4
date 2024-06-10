<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin Pro</title>
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
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Basic login form-->
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success mt-3">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger mt-3">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-3"><h2 class="fw-bolder">Masuk Anggota</h2></div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <!-- Login form-->
                                    <form action="/login" method="post">
                                        <!-- Form Group (Username)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="emailExample">Username</label>
                                            <input class="form-control form-control-solid" type="username" name="username" required placeholder="Enter Username" />
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="passwordExample">Password</label>
                                            <input class="form-control form-control-solid" type="password" name="password" required placeholder="Enter password" />
                                        </div>
                                        <!-- Form Group (forgot password link)-->
                                        <!-- <div class="mb-3"><a class="small" href="auth-password-social.html">Forgot your password?</a></div> -->
                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" id="checkRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="checkRememberPassword">Remember password</label>
                                            </div> -->
                                            <button class="btn btn-primary">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-footer text-center">
                                    <div class="small">Belum punya akun?<a href="/register"> Daftar</a></div>
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