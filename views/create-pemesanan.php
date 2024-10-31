<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- navbar -->
            <?= include('../components/layout/navbar.php') ?>

            <!-- sidebar -->
            <?= include('../components/layout/sidebar.php') ?>



            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Blank Page</h1>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 p-2 d-flex justify-content-center align-items-center ">
                            <div class="row g-0">
                                <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                    <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                    <img alt="image" src="../assets/img/example-image.jpg" class="img-fluid">
                                    <h5 class="m-0">Rendang Apa aja</h5>
                                    <p class="m-0">10.000</p>
                                </div>
                                <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                    <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                    <img alt="image" src="../assets/img/example-image.jpg" class="img-fluid">
                                    <h5 class="m-0">Rendang Apa aja</h5>
                                    <p class="m-0">10.000</p>
                                </div>
                                <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                    <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                    <img alt="image" src="../assets/img/example-image.jpg" class="img-fluid">
                                    <h5 class="m-0">Rendang Apa aja</h5>
                                    <p class="m-0">10.000</p>
                                </div>
                                <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                    <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                    <img alt="image" src="../assets/img/example-image.jpg" class="img-fluid">
                                    <h5 class="m-0">Rendang Apa aja</h5>
                                    <p class="m-0">10.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card w-full">
                                <div class="card-header">
                                    <h4>Input Text</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Menu</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group ">
                                        <label class="form-control-label">Gambar</label>
                                        <div class="custom-file ">
                                            <div class="custom-file">
                                                <input type="file" name="site_favicon" class="custom-file-input" id="site-favicon">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Kategori</label>
                                        <select class="form-control selectric">
                                            <option>Terbayar</option>
                                            <option>Ngutang</option>
                                            <option>Cancel</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary">Tambahkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-body">
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>


    <!-- JS Libraies -->
    <script src="../assets/modules/cleave-js/dist/cleave.min.js"></script>
    <script src="../assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
    <script src="../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="../assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>