<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
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
</head>

<body>
    <!--    header -->
    <nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
        <div class="container">
            <!-- Sidebar Toggle (Topbar) -->
            <a class="navbar-brand" href=""><img src="{{ asset("assets/images/bgg_logo.avif") }}" alt=""></a>
            <!-- Topbar Search -->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            Alerts Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2020</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                                    <line x1="12" y1="20" x2="12" y2="10"></line>
                                    <line x1="18" y1="20" x2="18" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="16"></line>
                                </svg>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 22, 2020</div>
                                <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-danger">
                                <svg class="svg-inline--fa fa-exclamation-triangle fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
                                </svg>
                                <!-- <i class="fas fa-exclamation-triangle"></i> -->
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 8, 2020</div>
                                <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 2, 2020</div>
                                <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="">View All Alerts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Message Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="{{ asset("assets/images/user/s7.png") }}">
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="{{ asset("assets/images/user/s8.png") }}">
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="">Read All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset("assets/images/user/s4.png") }}"></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="{{ asset("assets/images/user/s4.png") }}">
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Askbootstrap</div>
                                <div class="dropdown-user-details-email"><a href="https://askbootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcd5ddd1d3cfddd4ddd2fcdbd1ddd5d092dfd3d1">[email&#160;protected]</a></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                            </div>
                            Account
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                            </div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="">Dashboard</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Business
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="">Order</a>
                            <a class="dropdown-item" href="">Gigs</a>
                            <a class="dropdown-item" href="">Job</a>
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="">Messages</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Earnings</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </nav>
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
                            <div><a href="#" class="ambassadors-badge">{{Auth::user()->role}}</a></div>
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
                                        <a href="#" class="seller-link">Lisa Elizabeth</a>
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
                                    </ul>
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
                                    </ul>
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
                                    </ul>
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
                                    </ul>
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
                                    </ul>
                                    <div class="text-center">
                                        <a href="https://app.kayi.ng/sign-up" target="_blank">
                                            <button class="btn btn-outline-success">Activate Package</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Orders Section -->
                    <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h5 m-0">
                        <b>Active orders</b>
                        <div class="ml-auto d-flex align-items-center h5 m-0 text-muted">
                            15 ($5000)
                        </div>
                    </div>

                    <!-- How to Build Success Section -->
                    <div class="p-4 bg-white rounded shadow-sm my-3">
                        <h6 class="mb-2 font-weight-bold">How to build your success on BGG Entertainment in 3 steps</h6>
                        <p class="m-0">The key to your success on BGG Entertainment is the brand you build for yourself through your BGG Entertainment reputation. We gathered some tips and resources to help you become a leading seller on BGG Entertainment.</p>
                    </div>

                    <!-- Steps to Become a Top Seller -->
                    <div class="p-4 bg-white rounded shadow-sm mb-3">
                        <h5 class="mb-4 font-weight-bold text-center">Take these steps to become a top seller on BGG Entertainment</h5>
                        <div class="row">
                            <!-- Step 1: Get Noticed -->
                            <div class="col-lg-4 mb-4">
                                <div class="p-4 bg-light rounded shadow-sm h-100">
                                    <div class="display-4 my-2 text-center">
                                        <i class="fa fa-volume-up text-success" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="font-weight-bold text-center">Get noticed</h6>
                                    <p class="text-muted text-center">Hone your skills and expand your knowledge with online courses. You’ll be able to offer more services and <b>gain more exposure</b> with every course completed.</p>
                                    <div class="text-center">
                                        <button class="btn btn-outline-success">Share Your Gigs</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Get More Skills & Exposure -->
                            <div class="col-lg-4 mb-4">
                                <div class="p-4 bg-light rounded shadow-sm h-100">
                                    <div class="display-4 my-2 text-center">
                                        <i class="fa fa-book text-success" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="font-weight-bold text-center">Get more skills & exposure</h6>
                                    <p class="text-muted text-center">Watch this free online course to learn how to create an outstanding service experience for your buyer and grow your career as an online freelancer.</p>
                                    <div class="text-center">
                                        <button class="btn btn-outline-success">Explore Learn</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Become a Successful Seller -->
                            <div class="col-lg-4 mb-4">
                                <div class="p-4 bg-light rounded shadow-sm h-100">
                                    <div class="display-4 my-2 text-center">
                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="font-weight-bold text-center">Become a successful seller!</h6>
                                    <p class="text-muted text-center">Hone your skills and expand your knowledge with online courses. You’ll be able to offer more services and <b>gain more exposure</b> with every course completed.</p>
                                    <div class="text-center">
                                        <button class="btn btn-outline-success">Watch Free Course</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="footer-list">
                    <h2>Categories</h2>
                    <ul class="list">
                        <li><a href="#">Graphics &amp; Design</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Writing &amp; Translation</a></li>
                        <li><a href="#">Video &amp; Animation</a></li>
                        <li><a href="#">Music &amp; Audio</a></li>
                        <li><a href="#">Programming &amp; Tech</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="footer-list">
                    <h2>About</h2>
                    <ul class="list">
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press &amp; News</a></li>
                        <li><a href="#">Partnerships</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Intellectual Property Claims</a></li>
                        <li><a href="#" target="_blank">Investor Relations</a></li>
                    </ul>
                </div>
                <div class="footer-list">
                    <h2>Support</h2>
                    <ul class="list">
                        <li><a href="#">Help &amp; Support</a></li>
                        <li><a href="#">Trust &amp; Safety</a></li>
                        <li><a href="#">Selling on BGG Entertainment
                            </a>
                        </li>
                        <li><a href="#">Buying on BGG Entertainment
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list">
                    <h2>Community</h2>
                    <ul class="list">
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Community Standards</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Invite a Friend</a></li>
                        <li><a href="#">Become a Seller</a></li>
                        <li><a href="#">BGG Entertainment
                                Elevate<small>Exclusive Benefits</small></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list">
                    <h2>More From BGG Entertainment</h2>
                    <ul class="list">
                        <li><a href="#">BGG Entertainment
                                Pro</a>
                        </li>
                        <li><a href="#">BGG Entertainment
                                Studios</a>
                        </li>
                        <li><a href="#">BGG Entertainment
                                Logo Maker</a>
                        </li>
                        <li><a href="#">Get Inspired</a></li>
                        <li><a href="#">ClearVoice<small>Content Marketing</small></a></li>
                        <li><a href="#">AND CO<small>Invoice Software</small></a></li>
                        <li><a href="#">Learn<small>Online Courses</small></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <div class="logo">
                    <a href="">
                        <img src="{{ asset("assets/images/logo.svg") }}">
                    </a>
                </div>
                <p>© Copyright 2022 BGG Entertainment. All Rights Reserved
                </p>
                <ul class="social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
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
</body>

</html>