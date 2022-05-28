<!-- Navigation -->
<link rel="stylesheet" href="/public/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/css/bootstrap.min.css.map">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/welcome.css" media="screen">
<script class="u-script" type="text/javascript" src="/bootstrap/bootstrap.bundle.min.js" defer=""></script>

<div id="intro">
    <nav class="navbar navbar-default navbar-fixed-top navbar-expand-sm navbar-custom" style="background-color: rgb(122, 122, 122)">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-home">
                <li><a href="{{ url('/') }}"><h3 style="color: rgb(255, 255, 255)">Home</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right nav-item navbar-login">
                @if (true)
                    <li><a href="{{ url('/auth/login') }}"><h3 style="color: rgb(255, 255, 255)">Login</h3></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">test <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>


