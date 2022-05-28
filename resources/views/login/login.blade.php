@extends('./layouts/app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signin">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <h3>Login</h3>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <h4><input type="submit" name="signin" id="signin" class="form-submit" value="Login"/></h4>
                            </div>
                        </form>
                        <a href><h6><input type="text" value="Forgot Password" style="border-bottom: 0px solid rgb(239, 239, 239);padding: 0;font-size: 15px;"/></h6></a>
                    </div>
                    <div class="signin-image">
                        <figure><img src="../images/signin-image.jpg" alt="sing in image"></figure>
                    </div>
                </div>
            </div>
        </section>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@stop
