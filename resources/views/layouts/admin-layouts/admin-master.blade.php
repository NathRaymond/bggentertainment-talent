<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Admin | BGG ENTERTAINMENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="BGG ENTERTAINMENT" name="description" />
    <meta content="BGG ENTERTAINMENT" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/bgg_logo.avif") }}">

    <!-- jsve50ormap css -->
    <link href="{{ asset("admin_assets/libs/jsvectormap/css/jsvectormap.min.css") }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset("admin_assets/libs/swiper/swiper-bundle.min.css") }}" rel="stylesheet" type="text/css" />

   
    <!-- Layout config Js -->
    <script src="{{ asset('admin_assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin_assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- Bootstrap Css -->
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/app.min.css" rel="stylesheet"
        type="text/css" />
    <!-- custom Css-->
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/custom.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    @yield("headlinks")
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">

                @include("layouts.admin-layouts.admin-header")
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            @include("layouts.admin-layouts.admin-sidebar")
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield("contents")
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                @include("layouts.admin-layouts.admin-footer")
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin_assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('admin_assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('admin_assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('admin_assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- JAVASCRIPT -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/datatables.init.js"></script>
    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/passowrd-create.init.js"></script>
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
    <script src="{{ asset('admin_assets\js\requestController.js') }}"></script>
    <script src="{{ asset('admin_assets\js\formController.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset("admin_assets/js/app.js") }}"></script>
    <script>
        const greetingElement = document.getElementById('greeting');
        const currentHour = new Date().getHours();

        let greeting;
        if (currentHour < 12) {
            greeting = 'Good Morning';
        } else if (currentHour < 18) {
            greeting = 'Good Afternoon';
        } else {
            greeting = 'Good Evening';
        }

        greetingElement.textContent = greeting;
    </script>
    @yield("scripts")
</body>

</html>