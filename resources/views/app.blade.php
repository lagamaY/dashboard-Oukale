<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titre')</title>

        <!-- base:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="assets/images/logo.png" />
    </head>
    <body>
        <div class="container-scroller d-flex">
           
            <!-- partial:./partials/_sidebar.blade.php -->
            @include('partials.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.blade.php -->
            @include('partials.navbar')
            <!-- partial -->

            <!-- main-panel start -->
            <div class="main-panel">
                @yield('contenu')
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
        <script src="assets/js/chart.js"></script>

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
