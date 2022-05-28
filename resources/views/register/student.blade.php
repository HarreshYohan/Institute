@extends('./layouts/app')
@section('content')
<html lang="en">
<head>
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h3>Create Student Account</h3>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('student.store') }}">

                            @if(Session::has('success'))

                            <div class="alert alert-success" id="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Success:</strong> {{Session::get('success')}}
                            </div>
                            @elseif(session('error'))
                            <div class="alert alert-danger" id="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Error:</strong>{{Session::get('error')}}
                            </div>

                            @endif
                            
                            <div class="form-group">
                                <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account-box-o"></i></label>
                                <input type="text" name="username" id="username" placeholder="User Name" required/>
                            </div>
                            <div class="form-group"><span>
                                <label for="dob"><i class="zmdi zmdi-calendar-alt"></i></label></span>
                                <input type="date" name="dob" id="dob" placeholder="Date of Birth" required/>
                            </div>
                            <div class="form-group">
                                <label for="grade"><i class="zmdi zmdi-n-1-square"></i></label>
                                <input type="number" name="grade" id="grade" placeholder="Grade" min="3" max="12" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Create Account"/>
                            </div>
                        </form>
                    </div>
                    <div>
                        <figure><img src="./../images/student2.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@stop
