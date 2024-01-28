<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Fast And Furious</title>
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="https://kit.fontawesome.com/98a98d4a9d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="icon" href="user/assets/images/steering-wheel.png">
    <style>
        .background {
            background-color: #4B2637 !important;
            border-radius: 0px 0px 25px 25px;
            height: 80px !important;
            position: fixed !important;
            top: 0 !important;
            left: 0;
            right: 0;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15) !important;
            -webkit-transition: all .5s ease 0s;
            -moz-transition: all .5s ease 0s;
            -o-transition: all .5s ease 0s;
            transition: all .5s ease 0s;
        }

        img {
            width: 100%;
            padding: 15px;
            overflow: hidden;
        }

        .header-area .main-nav .nav li a {
            display: block;
            padding-left: 20px;
            padding-right: 20px;
            padding: 10px;
            margin: 15px;
            border-radius: 20px;
            font-weight: 300;
            font-size: 14px;
            height: 40px;
            line-height: 40px;
            text-transform: capitalize;
            color: #fff;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
            border: transparent;
            letter-spacing: .25px;
        }

        .google-map {
            padding-bottom: 60%;
            margin: 130px;
            position: relative;
        }

        .google-map iframe {
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            position: absolute;
        }
    </style>


</head>

<body style="background-color: #E9E3E3">
    <!-- ***** Header Area Start ***** -->
    <header class="header-area background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="user/assets/images/MLOGO.png" style="width: 150px;margin-top:-20px" href="#top">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section" style="">
                                @auth()
                                    <button class="btn btn-link">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </button>
                                @else
                                <li class="scroll-to-section"><a class="active" href="{{ route('login') }}">Login</a></li>
                                <li class="scroll-to-section"><a class="active" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                            </li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="col-lg-12 align-self-center">
                            <div class="section-heading">
                                <h6>Search For Near Places</h6>
                                <h2>Now it can be easier</h2>
                                <p>You Can Find Nearst Maintenance Shop To Fix Your Car</p>
                                <br>
                                <div class="main-button">
                                    <a href="/">Back To Home</a>

                                </div>
                            </div>
                        </div>
                        <h6 style="color:dimgray">يمكنك البحث عن اقرب محطه وقود لك  وكذلك اقرب اماكن الصيانه وقطع الغيار</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="google-map col-lg-9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13843.642924621467!2d31.29088980851437!3d29.837998400447862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458342722109f49%3A0x8164db4d10cac6c!2sHelwan%2C%20Helwan%20Sharkeya%2C%20Helwan%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1682651410073!5m2!1sen!2seg"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2023 Fast And Furious. All rights reserved. &nbsp;&nbsp; Design: <a href="#team"
                        rel="nofollow">2023 Graduate</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="user/vendor/jquery/jquery.min.js"></script>
    <script src="user/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl-carousel.js"></script>
    <script src="user/assets/js/counter.js"></script>
    <script src="user/assets/js/custom.js"></script>

</body>

</html>
