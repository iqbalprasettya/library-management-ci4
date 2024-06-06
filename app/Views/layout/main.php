<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="bg-warning-subtle">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-warning navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Library Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <!-- hilangkan nav link ketika belum login-->
                    <?php if (isset($_SESSION['username'])) : ?>
                        <a class="nav-link active fs-bold" href="<?= base_url('anggota') ?>">Anggota</a>
                        <a class="nav-link active fs-bold" href="<?= base_url('buku') ?>">Buku</a>
                    <?php endif; ?>
                </div>
                <div class="button-pinjam">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <a class="btn btn-success btn-sm" href="<?= base_url('pinjam') ?>">Pinjam</a>
                        <a class="btn btn-outline-success btn-sm" href="<?= base_url('logout') ?>">Logout</a>
                    <?php else : ?>
                        <a class="btn btn-success btn-sm" href="<?= base_url('register') ?>">Register</a>
                        <a class="btn btn-outline-success btn-sm" href="<?= base_url('login') ?>">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer class="footer text-lg-start mt-4 bg-warning text-white">
        <div class="container">
            <div class="p-3 row justify-content-between">
                <div class="col-md-5">
                    &copy; <?= date('Y') ?> Library Management System
                </div>
                <div class="col-md-5">
                    <!-- Login info sebagai role : -->
                    <?php if (isset($_SESSION['username'])) : ?>
                        Login Sebagai :  <?= ($_SESSION['role'] == 'admin') ? '<span class="badge text-bg-success">Admin</span>' : '<span class="badge text-bg-primary">User</span>' ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>