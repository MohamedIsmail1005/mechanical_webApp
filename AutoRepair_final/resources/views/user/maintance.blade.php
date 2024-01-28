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
                        <h6>Fault detection</h6>
                        <h2>Answer This Questions To Detect Your Problem</h2>
                        <h6>الاجابه علي هذه الاسئله تساعدنا في معرفه الاجزاء التي تحتاج الي صيانه دوريه في سيارتك</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ url('/test') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label style="color: #E9E3E3">Car Brand</label>
                                        <input type="text"style="color: #4B2637" class="form-control" placeholder="Enter Car Model">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label style="color: #E9E3E3">Car Model</label>
                                        <input type="text" style="color: #4B2637" class="form-control" placeholder="Enter Car Model" >
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label style="color: #E9E3E3">Your Oil Type</label>
                                        <select class="custom-select rounded-0" name="oiltype"
                                            style="width: 100%; background-color: #E9E3E3; padding:2%; opacity:80%">
                                            <option value="shell">shell</option>
                                            <option value="mobil">mobil</option>
                                            <option value="rehnara">rehnara</option>
                                            <option value="rehnara">Castrol</option>
                                            <option value="rehnara">Total</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <br>
                                    <fieldset>
                                        <label style="color: #E9E3E3">Distace KM With Using Oil</label>
                                        <input name="DistaceWithUseOil" type="number" style="color: #4B2637" class="form-control"
                                            placeholder="Enter Your Distace When Use Oil">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label style="color: #E9E3E3">Tire Pressure</label>
                                        <input name="TirePressure" type="number" style="color: #4B2637" class="form-control"
                                            placeholder="Enter Your Tire Pressure">
                                    </fieldset>
                                </div>


                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" style="color: #4B2637"class="orange-button"
                                            style="margin-top: 4%">Submit Now!</button>
                                    </fieldset>
                                </div>

                            </div>

                        </form>
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
