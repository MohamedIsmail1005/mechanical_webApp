<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="icon" href="user/assets/images/steering-wheel.png">
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
    </style>

    @yield('styles')
</head>
<header style="background-color:#4B2637;border-radius:15px; margin-top:-20px; padding:10px">
    <div class="container mt-3">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <h2 class="navbar-brand" style="color: white">Supplier Dashboard</h2>
                <a class="nav-link " href="{{route('profile.edit')}}" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div style="color: white">{{ Auth::user()->name }}</div>
                </a>
            </div>
        </nav>
    </div>
</header>

<body >
    <div class="container mt-3">
        <div  style=" color:#7D2941;background-color:#E9E3E3" class="card ">
            <div style="background-color:#B3A2A2;color:#4B2637;"  class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('supplier/addproduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input name="name" type="name" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input name="description" type="text" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="custom-select rounded-0" name="category_id" style="width: 100%">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="number" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label>Upload</label>
                        <input name="photo" type="file" class="form-control" placeholder="Upload Photo"
                            required="">
                    </div>
                </div>
        </div>
        <!-- /.card-body -->

        <div  class="card-footer">
            <button type="submit" style=" color:#E9E3E3;background-color: #4B2637" class="btn ">Submit</button>
            <button type="submit"  class="btn btn-dark"><a style="color:white" href="{{ url('supplier/productlist') }}">Back</button>
        </div>
        </form>
    </div>

    <footer style="margin-top:250px">
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

