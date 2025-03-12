<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BGG ENTERTAINMENT">
    <meta name="author" content="BGG ENTERTAINMENT">
    <title>BGG ENTERTAINMENT</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset("assets/images/bgg_logo.avif") }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="{{ asset("assets/vendor/fontawesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{ asset("assets/vendor/icons/css/materialdesignicons.min.css") }}" media="all" rel="stylesheet" type="text/css">
    <!-- Slick -->
    <link href="{{ asset("assets/vendor/slick-master/slick/slick.css") }}" rel="stylesheet" type="text/css">
    <!-- Lightgallery -->
    <link href="{{ asset("assets/vendor/lightgallery-master/dist/css/lightgallery.min.css") }}" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="{{ asset("assets/vendor/select2/css/select2-bootstrap.css") }}" />
    <link href="{{ asset("assets/vendor/select2/css/select2.min.css") }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Hide the dropdown-toggle icon */
        .dropdown-submenu .dropdown-toggle::after {
            display: none;
        }

        /* Position the submenu */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            display: none;
            /* Hide submenu by default */
        }

        /* Show submenu on hover */
        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }

        .dropdown-submenu .dropdown-menu {
            transition: opacity 0.3s ease, visibility 0.3s ease;
            opacity: 0;
            visibility: hidden;
        }

        .dropdown-submenu:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }
    </style>
    @yield(section: "headlinks")
</head>

<body>
    @include("layouts.client-layout.client-header")
    @yield("contents")
    <footer class="bg-white">
        @include("layouts.footer")
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script data-cfasync="false" src="{{ asset("assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="{{ asset("assets/js/jqBootstrapValidation.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <script src="{{ asset("assets/js/contact_me.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/vendor/slick-master/slick/slick.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{ asset("assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <!-- select2 Js -->
    <script src="{{ asset("assets/vendor/select2/js/select2.min.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <!-- Custom -->
    <script src="{{ asset("assets/js/custom.js") }}" type="0754bf9cd6893205619ca9c5-text/javascript"></script>
    <script src="{{ asset("assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js") }}" data-cf-settings="0754bf9cd6893205619ca9c5-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"910cc5541f1d738b","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
    @yield("scripts")
</body>

</html>