@extends('layouts.navbar')
@section('main')

    <head>
        <title>Institute</title>
        <link rel="stylesheet" href="../css/welcome.css" media="screen">
        <script class="u-script" type="text/javascript" src="/js/jquery-1.9.1.min.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="/js/welcome.js" defer=""></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Arimo:400,400i,500,500i,600,600i,700,700i">
    </head>

    <body class="u-body u-xl-mode">
        <section class="u-align-center u-clearfix u-valign-top-sm u-valign-top-xs u-section-1" id="sec-64e1">
        <div class="u-expanded-width u-grey-10 u-shape u-shape-rectangle u-shape-1" ></div>
        <br>
        <br>
        <h5 class="u-custom-font u-font-montserrat u-text u-text-1">Tution class made easy</h5>
        <h1 class="u-text u-text-2"> Willing to learn ? Register now</h1>
        <section class="u-align-center u-clearfix u-valign-top-sm u-valign-top-xs u-section-1" id="sec-64e1">
        <br id="services">
        <br>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                    <img alt="" class="u-bottom-left-radius-20 u-expanded-width u-image u-image-round u-top-right-radius-20 u-image-1" data-image-width="800" data-image-height="800" src="images/bn.jpg">
                    <h3 class="u-text u-text-default u-text-3">learn Now</h3>
                    <p class="u-text u-text-default u-text-3">Looking to improve your grades on weak subjects ? <br> Register to build your knowledge.</p>
                    <a href="student/register" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">Register as Student</a>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                    <img alt="" class="u-bottom-left-radius-20 u-expanded-width u-image u-image-round u-top-right-radius-20 u-image-2" data-image-width="1200" data-image-height="1002" src="images/kj.jpg">
                    <h3 class="u-text u-text-default u-text-5">Join us</h3>
                    <p class="u-text u-text-6">Want to help the community on providing education ? <br>  Step forward to join with us.</p>
                    <a href="/staff/register" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Apply as a Staff</a>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                    <img alt="" class="u-bottom-left-radius-20 u-expanded-width u-image u-image-round u-top-right-radius-20 u-image-3" data-image-width="1080" data-image-height="1080" src="images/nn.jpg">
                    <h3 class="u-text u-text-default u-text-7">Teach with us</h3>
                    <p class="u-text u-text-8">Interested in developing next generation with great knowledge ? <br>  Teach with us.</p>
                    <a href="/tutor/register" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">Apply as a Tutor</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </body>


@stop


