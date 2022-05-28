@extends('../layouts/app')
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
            <div class="container" >
                <div class="signin-content">
                    <div class="signin-form">
                        <h3>Apply as Staff</h3>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="number" id="number" placeholder="Contact Number"/>
                            </div>
                            <div class="form-group">
                                <label for="position"><i class="zmdi zmdi-account-o"></i></label>
                                <input type="text" name="position" id="position" placeholder="Position"/>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label"></label>
                                <input class="form-control" type="file">
                              </div>
                            <div class="form-group">
                                <textarea class="form-control" name="name" id="name" rows="3" placeholder="Brief Little Bit"></textarea>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Send Application"/>
                            </div>
                        </form>
                    </div>
                    <div>
                        <figure ><img src="../images/signup-image.jpg" alt="sing in image"></figure>
                    </div>
                </div>
            </div>
        </section>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@stop
