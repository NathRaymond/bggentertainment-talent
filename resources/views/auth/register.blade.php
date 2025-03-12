<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BGG ENTERTAINMENT">
    <meta name="author" content="BGG ENTERTAINMENT">
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
                            <!-- <p style="color: black;">Success starts here</p> -->
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <!-- First Name -->
                            <div class="form-group">
                                <label class="mb-1">First Name</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-account position-absolute"></i>
                                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                                </div>
                                @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Last Name -->
                            <div class="form-group">
                                <label class="mb-1">Last Name</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-account position-absolute"></i>
                                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                                </div>
                                @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label class="mb-1">Email</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-email-outline position-absolute"></i>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                </div>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- User Name -->
                            <div class="form-group">
                                <label class="mb-1">User Name</label>
                                <div class="position-relative">
                                    <input type="text" name="user_name" class="form-control" value="{{ old('user_name') }}" required>
                                </div>
                                @error('user_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Account Type -->
                            <div class="form-group">
                                <label class="mb-1">Account Type</label>
                                <div class="position-relative">
                                    <select class="form-control" name="account_type" required>
                                        <option value="" selected disabled>Select Account Type</option>
                                        <option value="client">Client (Customers)</option>
                                        <option value="partnership">Partnership (Businesses)</option>
                                        <option value="vendor">Vendors & Creatives</option>
                                    </select>
                                </div>
                                @error('account_type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="mb-1">Password (8 or more characters)</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                                    <i class="mdi mdi-eye position-absolute" style="right: 10px; top: 10px; cursor: pointer;" onclick="togglePassword('password')"></i>
                                </div>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label class="mb-1">Confirm Password</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-enter your password" required autocomplete="new-password">
                                    <i class="mdi mdi-eye position-absolute" style="right: 10px; top: 10px; cursor: pointer;" onclick="togglePassword('password-confirm')"></i>
                                </div>
                            </div>

                            <!-- Referral Code (Optional) -->
                            <div class="form-group">
                                <label class="mb-1">Referral Code (Optional)</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-tag position-absolute"></i>
                                    <input type="text" name="referral_code" class="form-control" placeholder="Enter referral code if you have one" value="{{ old('referral_code') }}">
                                </div>
                            </div>

                            <!-- Agreement -->
                            <div class="form-group">
                                <label class="mb-1">You agree to the BGG Entertainment <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success btn-block text-uppercase" style="color: black;"><b>Sign up</b></button>

                            <!-- Forgot Password and Sign In Link -->
                            <div class="py-3 d-flex align-item-center">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                                <span class="ml-auto">Already on BGG Entertainment? <a href="{{ route('login') }}">Sign in</a></span>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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

</html>