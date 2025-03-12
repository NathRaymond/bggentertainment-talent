<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
    <div class="container">
        <!-- Sidebar Toggle (Topbar) -->
        <a class="navbar-brand" href="">
            <img src="{{ asset("assets/images/bgg_logo.avif") }}" alt="" style="width: 100px; height:60px">
        </a>
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
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="ml-auto nav-item">
                    <a href="{{ route("register") }}" class="btn btn-success" style="margin: 9px;">
                        <span> SIGN UP </span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("login") }}" class="btn btn-outline-success" style="margin: 9px;">
                        <span> LOGIN </span></a>
                </li>
            </ul>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Find Jobs
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                        <!-- Submenu Dropdown -->
                        <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#" id="navbarDropdownSubmenu">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownSubmenu">
                                <a class="dropdown-item" href="">HR, Payroll, and Tax Services</a>
                                <a class="dropdown-item" href="">Hospitality Services</a>
                                <a class="dropdown-item" href="">Travel Services</a>
                                <a class="dropdown-item" href="">Vendor Services</a>
                                <a class="dropdown-item" href="">Healthcare Services</a>
                                <a class="dropdown-item" href="">Banking Services</a>
                                <a class="dropdown-item" href="">Training Services</a>
                            </div>
                            <a class="dropdown-item" href="#">Web Development & Programming</a>
                            <a class="dropdown-item" href="#">Graphics Design</a>

                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        How it Works
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
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