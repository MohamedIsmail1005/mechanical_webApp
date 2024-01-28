<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <link rel="icon" href="user/assets/images/steering-wheel.png">
        @yield('styles')
    <title>Fast And Furious</title>
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

<body style="background-color:#E9E3E3">

    <div class="container mt-3">

        <h3 style="font-size: 25px; padding-top:15px;padding-bottom:15px;color:#4B2637">Products </h3>
        <table style="padding-top: 10px" class="table">
            <thead style="background-color:#7D2941;color:#E9E3E3" class="thead-dark">
                <td style="padding: 30px">Title</td>
                <td style="padding: 30px">Description</td>
                <td style="padding: 30px">price</td>
                <td style="padding: 30px">Photo</td>
                <td style="padding: 30px">Update</td>
                <td style="padding: 30px">Delete</td>

            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr style="background-color:rgba(22, 26, 36, 0.2); align-items:center;">
                        <td style="padding: 20px; color:#4B2637">{{ $product->name }}</td>
                        <td style="padding: 20px;color:#4B2637">{{ $product->description }}</td>
                        <td style="padding: 20px;color:#4B2637">{{ $product->price }}</td>

                        <td style="padding: 20px;"><img src="{{ asset($product->photo) }}" width="50px"
                                height="50px"  class="img-circle"></td>
                        <td><a style="margin-top: 20px;" class="btn btn-primary"
                                href="{{ url('supplier/editproduct', $product->id) }}">Update</a>
                        </td>
                        <td><a style="margin-top: 20px;" href="{{ url('supplier/destroyproduct', $product->id) }}"
                                class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center">
            <a class="btn btn-dark" style="color:white" href="{{ url('supplier/createproduct') }}">Add Product</a>
            <a class="btn btn-secondary" style="color:white" href="{{ url('/') }}">Back to Home</a>
        </div>
    </div>


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
