<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="user/assets/images/steering-wheel.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
            width: 42%;
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
            text-decoration: none;
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

        .button{
            text-align: center;
        }

        .button .pay {
            background-color: #4B2637;
            color: white;
            padding-top: 0.5%;
            padding-bottom: 0.5%;
            padding-right: 1.5%;
            padding-left: 1.5%;
            border-radius: 15%;
            margin-right: 1%;
            transition: 0.4s;
        }
        .button .pay:hover{
            background-color: rgba(75,38,55,0.5);
            color: black;
        }
    </style>



    <title>Fast And Furious</title>


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
                                    <button class="btn btn-link" style="text-decoration:none;">
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

<body style="background-color: #E9E3E3; ">
    <div class="container mt-3" >

        <h3 style="font-size: 25px; padding-top:15px;padding-bottom:15px;color:#4B2637">Products </h3>
        <table class="table" style="margin-top:3%">
            <thead style="background-color:#7D2941;color:#E9E3E3; text-align:center;" class="thead-dark">
                <td style="padding: 30px">Name</td>
                <td style="padding: 30px">Quantity</td>
                <td style="padding: 30px">Price</td>
                <td style="padding: 30px">Photo</td>
                <td style="padding: 30px">Remove</td>


            </thead>
            <tbody>
                @foreach ($cart as $product)
                    <tr style="background-color:rgba(22, 26, 36, 0.2); text-align:center;">
                        <td style="color:#4B2637"><h4 style="margin-top: 20%; color:#7D2941">{{ $product->product_Name }}</h4></td>
                        <td style="color:#4B2637"><h5 style="margin-top: 20%; color:#7D2941">{{ $product->quantity }}</h5></td>
                        <td style="color:#4B2637"><h5 style="margin-top: 25%; color:#7D2941">{{ $product->price }}</h5></td>
                        <td ><img style="border-radius:50%" src="{{ asset($product->photo) }}" width="10"
                                height="120"></td>
                        <td><a style="background-color: #B3A2A2; margin-top: 20%;" class="btn"
                                href="{{ url('cancel', $product->id) }}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="button">
            <a style="color:white" href="{{ url("payment") }}">
            <button type="submit" class="btn pay" >Pay</button></a>
            <button type="submit"  class="btn btn-dark"><a style="color:white" href="{{ url('/') }}">Back</button>
        </div>
    </div>

    <footer style="margin-top:450px">
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

