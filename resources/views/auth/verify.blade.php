<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
</head>

<body>
    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-lg-4 mx-auto">
                    <div class="osahan-login py-4">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                        @endif
                        <div class="text-center mb-4">
                            <a href=""><img src="{{ asset("assets/images/bgg_logo.avif") }}" alt=""></a>
                            <h5 class="font-weight-bold mt-3">Verify Your Email Address</h5>
                            <p class="text-muted"> We’ve sent a verification link to your email. Please check your inbox and click the link to verify your account.</p>
                        </div>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1">Didn’t get the email?</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block text-uppercase">{{ __('Resend Verification Email') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="{{ asset("assets/js/jqBootstrapValidation.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <script src="{{ asset("assets/js/contact_me.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/vendor/slick-master/slick/slick.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{ asset("assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <!-- select2 Js -->
    <script src="{{ asset("assets/vendor/select2/js/select2.min.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <!-- Custom -->
    <script src="{{ asset("assets/js/custom.js") }}" type="3c876ba2560e029f7a006ac5-text/javascript"></script>
    <script src="{{ asset("assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js") }}" data-cf-settings="3c876ba2560e029f7a006ac5-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"910cc5342e03738b","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
</body>

</html>