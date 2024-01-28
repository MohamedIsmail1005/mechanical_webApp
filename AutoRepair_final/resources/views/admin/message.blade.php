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
                            <h1 class="m-0">Admin DashBoard</h1> <h2 style="font-size: 25px; padding-top:15px;padding-bottom:15px; color:#7D2941">View Message Contact
                            </h2>
                            <div class="container-fluid page-body-wrapper">
                                <div class="container">

                                    <table style="text-align: center">
                                        <tr style="background-color:#7D2941">
                                            <td style="color:#fff;padding: 50px;">Name</td>
                                            <td style="color:#fff;padding: 50px;">Email</td>
                                            <td style="color:#fff;padding: 50px;">Message</td>
                                            <td style="color:#fff;padding: 50px;"> Status</td>
                                        </tr>
                                        @foreach ($messages as $message)
                                            <tr style="background-color:#B3A2A2; text-align: center">
                                                <td style="color:#fff;padding: 40px;">{{ $message->name }}</td>
                                                <td style="color:#fff;padding: 40px;">{{ $message->email }}</td>
                                                <td style="color:#fff;padding: 40px;">{{ $message->message }}</td>
                                                <td><a class="btn btn-success"
                                                        href="{{ url('readmessage', $message->id) }}">Readed</a></td>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
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
