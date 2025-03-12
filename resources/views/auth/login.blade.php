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
</head>

<body>
    <!-- Login -->
    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-lg-4 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href=""><img src="{{ asset("assets/images/bgg_logo.avif") }}" alt=""></a>
                            <h5 class="font-weight-bold mt-3">Welcome Back</h5>
                            <p class="text-muted">Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1">Email</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-account position-absolute"></i>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Password</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">
                                    <i class="mdi mdi-eye position-absolute" style="right: 10px; top: 10px; cursor: pointer;" onclick="togglePassword('password')"></i>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-success btn-block text-uppercase" type="submit"> Sign in </button>
                            <div class="py-3 d-flex align-item-center">
                                <a href="">Forgot password?</a>
                                <span class="ml-auto"> New to BGG Entertainment? <a href="{{ route("register") }}">Join now</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="{{ asset("assets/js/jqBootstrapValidation.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <script src="{{ asset("assets/js/contact_me.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/vendor/slick-master/slick/slick.js") }}" type="bf0bacd50043658e54919b0a-text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{ asset("assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <!-- select2 Js -->
    <script src="{{ asset("assets/vendor/select2/js/select2.min.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <!-- Custom -->
    <script src="{{ asset("assets/js/custom.js") }}" type="bf0bacd50043658e54919b0a-text/javascript"></script>
    <script src="{{ asset("assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js") }}" data-cf-settings="bf0bacd50043658e54919b0a-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"910cc52d5bd3738b","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>
</body>

</html>