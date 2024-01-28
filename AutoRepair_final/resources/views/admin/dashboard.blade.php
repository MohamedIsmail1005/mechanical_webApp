<x-admin-layout>
    @extends('admin.layouts.app')
    @section('content')
    <link rel="icon" href="user/assets/images/steering-wheel.png">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin DashBoard</h1><br><br>

                            <div class="container-fluid page-body-wrapper" >
                                <div class="container">
                                    <div class="card" style="background-color:#E9E3E3;">
                                        <div class="card-header">
                                            <h3 style="font-size: 25px; padding-top:15px;padding-bottom:15px;">Categories <a style="background-color: #7D2941;color:#fff"
                                                    class="btn btn" href="{{ url('create') }}">Add</a></h3>
                                                <form  class="form-inline my-2 my-lg-0" type="get" action="{{url('searchcat')}}">
                                                    <input class="form-control mr-sm-2" name="query" type="search"  aria-label="Search" style="background-color:#B3A2A2;"/>
                                                    <button class="btn btn-outline my-2 my-sm-0" type="submit" style="background-color: #7D2941;color:#fff"><i class="fas fa-search fa-fw"></i></button>

                                                </form>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                                                <tr style="background-color:#7D2941;text-align: center">
                                                    <td style=" color:#fff;padding: 30px;"><i class="bi bi-sort-alpha-down"></i>Name</a></td>
                                                    <td style="color:#fff;padding: 30px;">Description</td>
                                                    <td style="padding: 30px; color:#fff">Update</td>
                                                    <td style="padding: 30px;color:#fff">Delete</td>
                                                </tr>
                                                @foreach ($categories as $category)
                                                    <tr style="background-color:#B3A2A2; text-align: center">
                                                        <td style="color:#fff;padding: 20px;">{{ $category->name }}</td>
                                                        <td style="color:#fff;padding: 20px;">{{ $category->description }}</td>
                                                        <td><a class="btn btn-primary"href="{{ url('edit', $category->id) }}">Update</a></td>
                                                        <td><a href="{{ url('destroy', $category->id) }}"class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item  inactive"><a href="/admin/dashboard">Category</a></li>
                                <li class="breadcrumb-item active"><a href="/admin/requests">Approve Products</a></li>
                                <li class="breadcrumb-item active"><a href="/admin/order">Orders</a></li>
                                <li class="breadcrumb-item active"><a href="/admin/message">Messages</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
    @section('scripts')
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    @endsection
</x-admin-layout>
