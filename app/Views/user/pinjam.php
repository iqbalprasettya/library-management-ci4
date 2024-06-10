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

                    <div class="text-end mt-5"><a href="/user/logout" class="btn btn-danger">Logout</a></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">

                            <div class="card mb-4">
                                <div class="card-header">Tambah Pinjam</div>
                                <div class="card-body">
                                    <!-- Component Preview-->
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                            <form action="/user/pinjam/" method="post">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="exampleFormControlInput1">Buku</label>
                                                        <select class="form-control" id="no_buku" name="no_buku" required>
                                                            <?php foreach ($buku as $b) : ?>
                                                                <option value="<?= $b['no_buku'] ?>"><?= $b['judul'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="exampleFormControlTextarea1">Tanggal Kembali</label>
                                                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </form>
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