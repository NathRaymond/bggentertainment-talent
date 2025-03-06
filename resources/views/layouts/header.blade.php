<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
    <div class="container">
        <!-- Sidebar Toggle (Topbar) -->
        <a class="navbar-brand" href="">
            <img src="{{ asset("assets/images/bgg_logo.avif") }}" alt="" style="width: 100px; height:60px">
        </a>

        <!-- Topbar Navbar -->
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
                        <a class="dropdown-item" href="">Product List</a>
                        <a class="dropdown-item" href="">Product List 2</a>
                        <a class="dropdown-item" href="">List Detail</a>
                        <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="">Company Profile</a>
                        <a class="dropdown-item" href="">Alerts</a>
                        <a class="dropdown-item" href="">Messages</a>
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
            <!-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fa fa-fw fa-trophy"></i>
                    <span>Become A Seller</span></a>
            </li> -->
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