<x-admin-layout>
    @extends('admin.layouts.app')
    @section('content')
    <link rel="icon" href="user/assets/images/steering-wheel.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin DashBoard</h1><h2 style="font-size: 25px; padding-top:15px;padding-bottom:15px;color:#7D2941">Approve Products</h2>
            <div class="container-fluid page-body-wrapper">
                <div class="container" style="display: flex">


                    <table >
                        <tr style="background-color:#7D2941 ;" >
                            <th style="color:#fff;padding: 50px;">Name<a href="{{ route('sort', ['column' => 'name', 'direction' => 'desc']) }}"><i class="bi bi-sort-alpha-down-alt"style="color: #fff"></i>
                                <a href="{{ route('sort', ['column' => 'name', 'direction' => 'asc']) }}"><i class="bi bi-sort-alpha-down" style="color: #fff"></i></a></td>
                            <td style="color:#fff;padding: 50px;">Category</td>
                            <td style="color:#fff;padding: 50px;">Status</td>
                            <td style="color:#fff;padding: 50px;">Accept</td>
                            <td style="color:#fff;padding: 50px;">Reject</td>
                        </tr>
                        @foreach ($products as $product)
                        <tr style="background-color:#B3A2A2; align-items:center;">
                            <td style="padding: 40px;color:#fff">{{ $product->name }}</td>
                            <td style="padding: 40px;color:#fff">{{ $product->category->name }}</td>
                            <td style="padding: 40px;color:#fff">{{ $product->status }}</td>
                            <td style="padding: 40px;color:#fff"><a class="btn btn-primary"
                                 href="{{ url('accept',$product->id) }}">Accept</a></td>
                            <td style="padding: 50px;color:#fff"><a href="{{ url('reject', $product->id) }}"
                                    class="btn btn-danger">Reject</a>

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
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
@endsection
</x-admin-layout>
