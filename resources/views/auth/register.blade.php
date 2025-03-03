<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BGG ENTERTAINMENT">
    <meta name="author" content="BGG ENTERTAINMENT">
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
    <!-- Register -->
    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-lg-5 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href="#"><img src="{{ asset("assets/images/bgg_logo.avif") }}" alt=""></a>
                            <h5 class="font-weight-bold mt-3">Join BGG Entertainment</h5>
                            <p style="color: black;">Success starts here</p>
                        </div>
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1">First name</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-account position-absolute"></i>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Last name</label>
                                <div class="position-relative">
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Email</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-email-outline position-absolute"></i>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Password (6 or more characters)</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    <i class="mdi mdi-eye position-absolute" style="right: 10px; top: 10px; cursor: pointer;" onclick="togglePassword('password')"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="mb-1">Confirm Password</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-enter your password">
                                    <i class="mdi mdi-eye position-absolute" style="right: 10px; top: 10px; cursor: pointer;" onclick="togglePassword('password_confirmation')"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Referral Code (Optional)</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-tag position-absolute"></i>
                                    <input type="text" name="referral_code" class="form-control" placeholder="Enter referral code if you have one">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">You agree to the BGG Entertainment <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
                            </div>
                            <button class="btn btn-success btn-block text-uppercase" type="submit" style="color: black;"> JOIN AS A FREELANCER</button>
                            <button class="btn btn-success btn-block text-uppercase" type="submit" style="color: black;"> JOIN AS A CLIENT </button>
                            <div class="py-3 d-flex align-item-center">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                                <span class="ml-auto"> Already on BGG Entertainment? <a href="{{ route("login")}}">Sign in</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="{{ asset("assets/js/jqBootstrapValidation.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <script src="{{ asset("asset/js/contact_me.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/vendor/slick-master/slick/slick.js") }}" type="55259769133830245f38c98d-text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{ asset("assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <!-- select2 Js -->
    <script src="{{ asset("assets/vendor/select2/js/select2.min.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <!-- Custom -->
    <script src="{{ asset("js/custom.js") }}" type="55259769133830245f38c98d-text/javascript"></script>
    <script src="{{ asset("assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js") }}" data-cf-settings="55259769133830245f38c98d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"910cc52fc91afe58","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = input.nextElementSibling;

            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("mdi-eye", "mdi-eye-off");
            } else {
                input.type = "password";
                icon.classList.replace("mdi-eye-off", "mdi-eye");
            }
        }
    </script>
</body>

</html>