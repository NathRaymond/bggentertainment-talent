<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BGG Entertainment">
    <meta name="author" content="BGG Entertainment">
    <title>BGG Entertainment</title>
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
    @yield("headlinks")
</head>

<body>
    @include("layouts.header")
    @yield("contents")
    <footer class="bg-white">
        @include("layouts.footer")
    </footer>
    <script data-cfasync="false" src="{{ asset("assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <script src="{{ asset("asssts/js/jqBootstrapValidation.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <script src="{{ asset("asssts/js/contact_me.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/vendor/slick-master/slick/slick.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{ asset("assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <!-- select2 Js -->
    <script src="{{ asset("assets/vendor/select2/js/select2.min.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <!-- Custom -->
    <script src="{{ asset("assets/js/custom.js") }}" type="ccf84049af8c6be94fbc0c05-text/javascript"></script>
    <script src="{{ asset("assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js") }}" data-cf-settings="ccf84049af8c6be94fbc0c05-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"910cc5146e68fe58","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
    @yield("scripts")
</body>

</html>