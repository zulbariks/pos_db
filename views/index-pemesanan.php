<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
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
                        <h1>Home Pemesanan</h1>
                    </div>
                    <section class="section">
                        <div class="section-header">
                            <div class="section-body">
                                <h2 class="section-title">Table</h2>
                                <p class="section-lead">Example of some Bootstrap table components.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Sortable Table</h4>
                                                <div class="card-header-action">
                                                    <form>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="sortable-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <i class="fas fa-th"></i>
                                                                </th>
                                                                <th>Task Name</th>
                                                                <th>Progress</th>
                                                                <th>Members</th>
                                                                <th>Due Date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="sort-handler">
                                                                        <i class="fas fa-th"></i>
                                                                    </div>
                                                                </td>
                                                                <td>Create a mobile app</td>
                                                                <td class="align-middle">
                                                                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                                                        <div class="progress-bar bg-success" data-width="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                                                </td>
                                                                <td>2018-01-20</td>
                                                                <td>
                                                                    <div class="badge badge-success">Completed</div>
                                                                </td>
                                                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="sort-handler">
                                                                        <i class="fas fa-th"></i>
                                                                    </div>
                                                                </td>
                                                                <td>Redesign homepage</td>
                                                                <td class="align-middle">
                                                                    <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                                                        <div class="progress-bar" data-width="0"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                                                                </td>
                                                                <td>2018-04-10</td>
                                                                <td>
                                                                    <div class="badge badge-info">Todo</div>
                                                                </td>
                                                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="sort-handler">
                                                                        <i class="fas fa-th"></i>
                                                                    </div>
                                                                </td>
                                                                <td>Backup database</td>
                                                                <td class="align-middle">
                                                                    <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                                                        <div class="progress-bar bg-warning" data-width="70"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                                                                </td>
                                                                <td>2018-01-29</td>
                                                                <td>
                                                                    <div class="badge badge-warning">In Progress</div>
                                                                </td>
                                                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="sort-handler">
                                                                        <i class="fas fa-th"></i>
                                                                    </div>
                                                                </td>
                                                                <td>Input data</td>
                                                                <td class="align-middle">
                                                                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                                                        <div class="progress-bar bg-success" data-width="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                                                                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                                                                </td>
                                                                <td>2018-01-16</td>
                                                                <td>
                                                                    <div class="badge badge-success">Completed</div>
                                                                </td>
                                                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                        </div>
                    </section>

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
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>