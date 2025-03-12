@extends("layouts.client-layout.client-master")
@section("contents")
<div class="main-page second py-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 left">
                <div class="profile_info">
                    <div class="seller-card">
                        <div>
                            <div class="user-online-indicator is-online " data-user-id="1152855">
                                <i class="fa fa-circle"></i>online
                            </div>
                        </div>
                        <div><a href="#" class="ambassadors-badge">{{Auth::user()->user_type}}</a></div>
                        <div class="user-profile-info">
                            <div>
                                <div class="user-profile-image">
                                    <label class="user-pict">
                                        <img
                                            src="{{ asset("assets/images/user/s10.png") }}"
                                            class="img-fluid user-pict-img" alt="Askbootstrap">
                                        <a href="#"
                                            class="user-badge-round user-badge-round-med locale-en-us top-rated-seller"></a></label>
                                </div>
                            </div>
                            <div class="user-profile-label">
                                <div class="username-line">
                                    <a href="#" class="seller-link">{{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}</a>
                                </div>
                                <div class="oneliner-wrapper">
                                    <small class="oneliner">Professional Voice Actress</small>
                                    <div class="ratings-wrapper">
                                        <p class="rating-text"><strong>5.0</strong> (1k+ reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-bottom py-3">
                            <div class="d-flex align-items-center py-1">
                                Response Rate
                                <div class="font-weight-bold ml-auto d-flex align-items-center">
                                    <span class="btn btn-success border-0 py-1 px-4 mr-2"></span>
                                    100%
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-1">
                                Delivered on Time
                                <div class="font-weight-bold ml-auto d-flex align-items-center">
                                    <span class="btn btn-success border-0 py-1 px-4 mr-2"></span>
                                    100%
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-1">
                                Order Completion
                                <div class="font-weight-bold ml-auto d-flex align-items-center">
                                    <span class="btn btn-success border-0 py-1 px-4 mr-2"></span>
                                    100%
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="d-flex align-items-center py-1 h6">
                                Earned in March
                                <div class="font-weight-bold ml-auto d-flex align-items-center">
                                    $2334
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-1 h6">
                                Response Time
                                <div class="font-weight-bold ml-auto d-flex align-items-center">
                                    N/A
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h5 m-0">
                    <b>Active orders</b>
                    <div class="ml-auto d-flex align-items-center h5 m-0 text-muted">
                        15 ($5000)
                    </div>
                </div>
            </div>
            <div class="col-lg-8 right">
                <div class="p-4 bg-white rounded shadow-sm mb-3">
                    <h5 class="mb-4 font-weight-bold text-center display-4" style="background: linear-gradient(90deg, #4CAF50, #2196F3); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-family: 'Poppins', sans-serif; font-size: 20px !important;">
                        Unlock Exclusive Benefits by Choosing the Perfect Package for Your Account!
                    </h5>
                    <p class="mb-4 text-center" style="font-size: 16px; color: #6c757d; font-family: 'Poppins', sans-serif;">
                        At BGG Entertainment, we’ve got our packages to give you the best value and experience. Here’s why choosing a package is the right move for you:
                    </p>
                    <div class="row">
                        <!-- Business Banking Package -->
                        <div class="col-lg-4 mb-4">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <div class="display-4 my-2 text-center">
                                    <i class="fas fa-university text-success" aria-hidden="true"></i>
                                </div>
                                <h6 class="font-weight-bold text-center">BUSINESS BANKING PACKAGE</h6>
                                <p class="text-muted text-center">It entails:</p>
                                <ul class="list-unstyled text-center">
                                    <li>POS machine (Point of Sale)</li>
                                    <li>Financial literacy class</li>
                                    <li>Tax services</li>
                                    <li>Payroll services</li>
                                </ul><br>
                                <div class="text-center">
                                    <a href="https://app.kayi.ng/sign-up" target="_blank">
                                        <button class="btn btn-outline-success">Activate Package</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Women with Children Banking Package -->
                        <div class="col-lg-4 mb-4">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <div class="display-4 my-2 text-center">
                                    <i class="fas fa-female text-success" aria-hidden="true"></i>
                                </div>
                                <h6 class="font-weight-bold text-center">WOMEN WITH CHILDREN BANKING PACKAGE</h6>
                                <p class="text-muted text-center">It entails:</p>
                                <ul class="list-unstyled text-center">
                                    <li>POS machine (Point of Sale)</li>
                                    <li>Financial literacy class</li>
                                    <li>Tax services</li>
                                    <li>Payroll services</li>
                                    <li>Child care and transportation package service</li>
                                </ul><br>
                                <div class="text-center">
                                    <a href="https://app.kayi.ng/sign-up" target="_blank">
                                        <button class="btn btn-outline-success">Activate Package</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Agribusiness Banking Package -->
                        <div class="col-lg-4 mb-4">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <div class="display-4 my-2 text-center">
                                    <i class="fas fa-tractor text-success" aria-hidden="true"></i>
                                </div>
                                <h6 class="font-weight-bold text-center">AGRIBUSINESS BANKING PACKAGE</h6>
                                <ul class="list-unstyled text-center">
                                    <li>Business bank account</li>
                                    <li>POS machine (Point of Sale)</li>
                                    <li>Farmer’s card (4% discount on purchases)</li>
                                    <li><b>OPTIONAL:</b> Agribusiness loan at 12% interest rate</li>
                                </ul><br>
                                <div class="text-center">
                                    <a href="https://app.kayi.ng/sign-up" target="_blank">
                                        <button class="btn btn-outline-success">Activate Package</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Lifestyle Economy Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <div class="display-4 my-2 text-center">
                                    <i class="fas fa-credit-card text-success" aria-hidden="true"></i>
                                </div>
                                <h6 class="font-weight-bold text-center">LIFESTYLE ECONOMY CARD</h6>
                                <ul class="list-unstyled text-center">
                                    <li>Business bank account</li>
                                    <li>POS machine (Point of Sale)</li>
                                    <li>Lifestyle economy card (4% discount on purchases)</li>
                                </ul><br>
                                <div class="text-center">
                                    <a href="https://app.kayi.ng/sign-up" target="_blank">
                                        <button class="btn btn-outline-success">Activate Package</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Farmer's Economy Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <div class="display-4 my-2 text-center">
                                    <!-- <i class="fas fa-chart-line text-success" aria-hidden="true"></i> -->
                                    <i class="fas fa-credit-card text-success" aria-hidden="true"></i>
                                </div>
                                <h6 class="font-weight-bold text-center">FARMER'S ECONOMY CARD</h6>
                                <ul class="list-unstyled text-center">
                                    <li>POS machine (Point of Sale)</li>
                                    <li>Business bank account</li>
                                    <li>Farmer's economy card (4% discount on purchases)</li>
                                </ul><br>
                                <div class="text-center">
                                    <a href="https://app.kayi.ng/sign-up" target="_blank">
                                        <button class="btn btn-outline-success">Activate Package</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection