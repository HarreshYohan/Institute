<!-- Navigation -->
<link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../css/welcome.css" media="screen">
<script class="u-script" type="text/javascript" src="/bootstrap/bootstrap.bundle.min.js" defer=""></script>

<div id="intro" style="background-image: url('images/pic3.jpg');object-fit: cover">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:rgb(99, 99, 99);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <li class="dropdown order-1">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login</button>
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                           <li class="px-3 py-2">
                               <form class="form" role="form">
                                    <div class="form-group">
                                        <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <div class="form-group text-center">
                                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div>
        @yield('main')
    </div>
</div>


