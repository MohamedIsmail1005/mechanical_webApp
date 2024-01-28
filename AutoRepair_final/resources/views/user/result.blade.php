<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="user/assets/images/steering-wheel.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    </style>

</head>
<header class="header-area background">
    <div class="container">
        <div class="row"></div>
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

<body style="background-color: #E9E3E3">

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Our Response</h6>
                        <h2>This Is Our Detection From Your Answers To Our Questions</h2>
                        <h6>برجاء معاينه هذه الاجزاء حفاظا علي سلامه سيارتك هذه بمثابه متابعه دوريه</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Problem we Detect</h2>
                                <br><br>
                                @foreach ($repairs as $repair)


                                            <ul>
                                                <p style="color:#E9E3E3; margin-bottom:2%">{{ $repair }}</p>
                                            </ul>





                                @endforeach
                            </div>

                            <div class="col-lg-12">
                                <br><br>
                                <fieldset>
                                    <a href="{{ url('/getmap') }}" class="btn btn-secondary">Search For Maintance
                                        Shop</a>
                                    <a href="{{ url('/') }}" class="btn btn-dark">Back Home</a>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
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


</body>



</html>
