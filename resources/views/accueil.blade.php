<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oukalê - Tableau de bord</title>

        <!-- base:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller d-flex">
            <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                    <a href="https://www.bootstrapdash.com/product/spica-admin/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/spica-admin/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                    <i class="mdi mdi-close text-white mr-0"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- partial:./partials/_sidebar.blade.php -->
            @include('partials.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.blade.php -->
            @include('partials.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                    <div class="row w-100 flex-grow">
                        <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <p class="card-title">Website Audience Metrics</p>
                            <p class="text-muted">25% more traffic than previous week</p>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <div class="d-flex justify-content-between traffic-status">
                                    <div class="item">
                                    <p class="mb-">Users</p>
                                    <h5 class="font-weight-bold mb-0">93,956</h5>
                                    <div class="color-border"></div>
                                    </div>
                                    <div class="item">
                                    <p class="mb-">Bounce Rate</p>
                                    <h5 class="font-weight-bold mb-0">58,605</h5>
                                    <div class="color-border"></div>
                                    </div>
                                    <div class="item">
                                    <p class="mb-">Page Views</p>
                                    <h5 class="font-weight-bold mb-0">78,254</h5>
                                    <div class="color-border"></div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-5">
                                <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                                    role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                        href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Day
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Week
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">
                                        Month
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <canvas id="audience-chart"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Weekly Balance</p>
                                <p class="text-success font-weight-medium">20.15 %</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">$22.736</h5>
                                <p class="text-muted mb-0">Avg Sessions</p>
                            </div>
                            <canvas id="balance-chart" height="130"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Today Task</p>
                                <p class="text-success font-weight-medium">45.39 %</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">17.247</h5>
                                <p class="text-muted mb-0">Avg Sessions</p>
                            </div>
                            <canvas id="task-chart" height="130"></canvas>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                    <div class="row w-100 flex-grow">
                        <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <p class="card-title">Regional Load</p>
                            <p class="text-muted">Last update: 2 Hours ago</p>
                            <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                                id="regional-chart-legend"></div>
                            <canvas height="280" id="regional-chart"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                            <div class="d-flex align-items-center mb-4">
                                <p class="card-title mb-0 me-1">Today activity</p>
                                <div class="badge badge-info badge-pill">2</div>
                            </div>
                            <div class="d-flex flex-wrap pt-2">
                                <div class="me-4 mb-lg-2 mb-xl-0">
                                <p>Time On Site</p>
                                <h4 class="font-weight-bold mb-0">77.15 %</h4>
                                </div>
                                <div>
                                <p>Page Views</p>
                                <h4 class="font-weight-bold mb-0">14.15 %</h4>
                                </div>
                            </div>
                            </div>
                            <canvas height="150" id="activity-chart"></canvas>
                        </div>
                        </div>
                        <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                            <p class="card-title">Server Status 247</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <p class="text-muted">Last update: 2 Hours ago</p>
                                <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">128GB</h5>
                                    </div>
                                    <p class="mb-">Total Usage</p>
                                </div>
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">92%</h5>
                                    </div>
                                    <p class="mb-">Memory Usage</p>
                                </div>
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">16%</h5>
                                    </div>
                                    <p class="mb-">Disk Usage</p>
                                </div>
                                </div>
                            </div>
                            </div>
                            <canvas height="170" id="status-chart"></canvas>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
               
                <!-- row end -->
                
                <!-- row end -->
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:./partials/footer.blade.php -->
                @include('partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- base:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
            <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="assets/js/dashboard.js"></script>
        <!-- End custom js for this page-->
    </body>
</html>
