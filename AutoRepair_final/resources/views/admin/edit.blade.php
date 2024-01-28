<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    @include('admin.layouts.navigation');
    @include('admin.layouts.sidebar');
<div class="container">
    <div class="card card" >
        <div class="card-header" style="background-color: #7D2941;color:#fff">
            <h3 class="card-title">Update Category</h3>
        </div>

        <form action="{{url('update',$categories->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body" style="background-color: #B3A2A2;color:#fff">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name"  required=""
                        class="form-control" value="{{$categories->name}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control"  value="{{$categories->description}}"
                        required="">
                </div>

            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn" style="background-color: #7D2941;color:#fff">Submit</button>
                <button type="submit" class="btn btn-dark"><a style="color: #fff"
                        href="{{ url('admin/dashboard') }}">Back</button>
            </div>
        </form>
    </div>
</div>
</body>



</html>
