<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Smart Cage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Jquery Library -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            setInterval(function() {
                $("#ceksuhu").load('ceksuhu.php');
                $("#cekkelembaban").load('cekkelembaban.php');
                $("#cekamoniak").load('cekamoniak.php');
                $("#responsecontainer").load('Data_grafik.php');
            }, 1000);

        });
    </script>



</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="logo-light" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="ri-settings-2-line"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <!-- <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- User details -->
                <div class="user-profile text-center mt-3">
                    <div class="">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="mt-3">
                        <h4 class="font-size-16 mb-1">Admin</h4>
                        <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smart Cage</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Suhu Cage</p>
                                            <h4 class="mb-2"><span id="ceksuhu">0</span> <b>C</b></h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2">20-25 C</span>Best Ideal Temperature</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="mdi mdi-coolant-temperature font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Humidity Cage</p>
                                            <h4 class="mb-2"><span id="cekkelembaban">0</span> <b>%</b></h4>
                                            <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2">30-80%</span>Humidity Ideal</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-hydraulic-oil-temperature font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Ammonia Gas Level</p>
                                            <h4 class="mb-2"><span id="cekamoniak">0</span> <b>PPM</b></h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2">20-25 PPM</span>Ammonia Gas Level Limit</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="mdi mdi-gas-station-off-outline font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div id="responsecontainer" style="width:100%; text-align: center">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Temperature and Humidity Chart</h4>
                                    <canvas id="lineChart" height="300"></canvas>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-xl-12">

                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="float-end d-none d-md-inline-block">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Export</a>
                                                <a class="dropdown-item" href="#">Import</a>
                                                <a class="dropdown-item" href="#">Download Report</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">Temperature and Humidity Chart</h4>

                                    <div class="text-center pt-3">
                                        <div class="row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2">25,117</h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">Marketplace</p>
                                            </div><!-- end col -->
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2">$34,856</h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">Last Week</p>
                                            </div><!-- end col -->
                                            <div class="col-sm-4">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2">$18,225</h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">Last Month</p>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div>
                                <div class="card-body py-0 px-2">
                                    <div id="area_chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Latest Transactions</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th style="width: 120px;">Salary</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Charles Casey</h6>
                                                    </td>
                                                    <td>Web Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td>
                                                        04 Apr, 2021
                                                    </td>
                                                    <td>$42,450</td>
                                                </tr>
                                            </tbody><!-- end tbody -->
                                        </table> <!-- end table -->
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <select class="form-select shadow-none form-select-sm">
                                            <option selected>Apr</option>
                                            <option value="1">Mar</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Jan</option>
                                        </select>
                                    </div>
                                    <h4 class="card-title mb-4">Monthly Earnings</h4>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5>3475</h5>
                                                <p class="mb-2 text-truncate">Market Place</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5>458</h5>
                                                <p class="mb-2 text-truncate">Last Week</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5>9062</h5>
                                                <p class="mb-2 text-truncate">Last Month</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="mt-4">
                                        <div id="donut-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                </div>

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> ©Smart Cage.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Version 1.1
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- Chart JS -->
    <script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="assets/js/pages/chartjs.init.js"></script>
</body>

</html>