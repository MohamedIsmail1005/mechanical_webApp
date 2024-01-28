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

    @if (session('message'))
        <script>
            alert('message sent succesfully')
        </script>
    @endif
    @if (session('cart'))
        <script>
            alert('Added To Cart succesfully')
        </script>
    @endif
    @if (session('pay'))
        <script>
            alert('Payment Done succesfully')
        </script>
    @endif
    @if (session('payy'))
        <script>
            alert('Payment Faild... Try Again')
        </script>
    @endif
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="user/assets/images/MLOGO.png" style="width: 130px;margin-top:-26px" href="#top">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#product">Products</a></li>
                            <li class="scroll-to-section"><a href="#team">Our Team</a></li>
                            <li class="scroll-to-section">
                                @auth()
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i>
                                        Cart</a>
                                </li>
                            @else
                                <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                                <li class="scroll-to-section"><a href="{{ route('register') }}">Register</a></li>
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
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Auto Repair</span>
                                <h2>With Auto Repair</h2>
                                <p>The Auto repair making us accessible from
                                    anywhere in anytime. This centrality also enables us to provide mobile services
                                    for scheduled maintenance for those who qualify (mobile services offered upon
                                    management approval).</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#services">Take A Look</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> Auto Repair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Our Effort</span>
                                <h2>We Focus On Details</h2>
                                <p>Convenient preventative maintenance or auto repairs performed at your home or office.
                                    Unusual sounds, check engine lights, electrical problems or no start conditions: we
                                    have it covered.
                                </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#services">Take A Look</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> Auto Repair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Best Result</span>
                                <h2>Get the best result</h2>
                                <p>You’re welcome to browse to see what we are about. When you’re
                                    ready to interview for an opportunity to acquire our services, please see our
                                    contact page.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#services">Take A Look</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> Auto Repair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="user/assets/images/repair.png" alt="Products">
                        </div>
                        <div class="main-content">
                            <h4>Our Product</h4>
                            <p>Whenever you need any product, you just remember we are here for you</p>
                            <div class="main-button">
                                <a href="#product">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="user/assets/images/feedback.png" alt="recomendation">
                        </div>
                        <div class="main-content">
                            <h4>Find Nearst Maintenance shop</h4>
                            <p>You Can Find Nearst Shops To Fix Your Car</p>
                            <div class="main-button">
                                <a href="{{ url('getmap') }}">Let's Go!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="user/assets/images/electric-car.png" alt="Cars">
                        </div>
                        <div class="main-content">
                            <h4>Detect Problem InYour Car</h4>
                            <p>With our system we can find the problem </p>
                            <div class="main-button">
                                <a href="{{ url('/maintance') }}">Try It</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Supplier</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Daily New Customer</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="6"></h2>
                                    <p class="count-text ">Our Team</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Our Categoary</h6>
                        <h2>Latest Product</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">

                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                @foreach ($catagories as $categoary)
                    <li>
                        <a href="#!" data-filter=".{{ $categoary->name }}">{{ $categoary->name }}</a>
                    </li>
                @endforeach

            </ul>
            <div class="row event_box">
                @foreach ($products as $product)
                    <div
                        class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 {{ $product->category->name }}">
                        <div class="events_item">
                            <div class="thumb">
                                <div class="down-content">
                                    <div class="main-content">
                                        <img src="{{ asset($product->photo) }}" width="90px" height="300px">
                                    </div>
                                    <h5 style="color: #E9E3E3; text-transform: capitalize; padding-top:3%">
                                        {{ $product->name }}</h5>
                                    <h6 style="color: #E9E3E3; font-weight: 5000">{{ $product->description }}</h6>
                                    <span class="price">
                                        <h6><em>$</em>{{ $product->price }}</h6>
                                    </span>
                                    <form action="{{ url('addcart', $product->id) }}" method="POST">
                                        @csrf
                                        <input type="number" value="1" min="1" class="form-control num"
                                            name="quantity" style="width: 75px; margin-bottom:5px">
                                        <button  class="btn btn-outline-dark" type="submit" style="margin-top:5px">
                                            <i class="fas fa-cart-plus"></i> Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
    </section>
    <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6" style="padding-bottom:10% ">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/2.jpeg" alt="" style="height:80%">
                            <span class="category">Team Leader</span>
                            <h4>AbdElrahman Soliman</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/boody.zizo.7"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/1.jpg" alt="">
                            <span class="category">Full-Stack Developer</span>
                            <h4>Mostafa Mohamed</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100003976369813"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/3.jpg" alt="" style="height:80%">
                            <span class="category">Back-End Developer</span>
                            <h4>Mohamed Ismail</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/mohamed.eltop.35/"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/4.jpg" alt="" style="height:80%">
                            <span class="category">Front-End Developer</span>
                            <h4>Mostafa Mahmoud</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100011159953115"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/5.jpg" alt="" style="height:80%">
                            <span class="category">Front-End Developer</span>
                            <h4>Nrden Nader</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/nrden.nader"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="user/assets/images/6.jpg" alt="" style="height:80%">
                            <span class="category">Front-End Developer</span>
                            <h4>Manar Ashraf</h4>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/manar.ashraf.9693"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Please tell your friends about Our website. Anyone can access the
                                website to find what's new in cars world. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="user/assets/images/1.jpg" alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>Mostafa Mohamed</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Please tell your friends about Our website. Anyone can access the
                                website to find what's new in cars world. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="user/assets/images/2.jpeg" alt="" style="height: 80%">
                                <span class="category">Team Leader</span>
                                <h4>Abd Elrahman Soliman</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Please tell your friends about Our website. Anyone can access the
                                website to find what's new in cars world. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="user/assets/images/3.jpg" alt="" style="height: 80%">
                                <span class="category">Back-End Developer</span>
                                <h4>Mohamed Ismail</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>You can search for auto spare parts, New cars, Easy to solve your problem etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to contact us anytime</h2>
                        <p>Thank you for choosing our websites. We provide you best services at absolutely 100%
                            helpful. You may support us by sharing our website to your friends.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ url('savemessage') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name"
                                            placeholder="Your Name..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail...">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
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
