@extends('backend.layouts.master')

@section('title')
Dashboard ~ Admin Panel
@endsection
@section('admin-content')

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Role</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.inc_file.logout')
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <!-- market value area start -->
    <div class="row mt-5 mb-5">
                <!-- data table start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Roles List</h4>
                       <div class="header-title" style="margin-top: -38px;margin-bottom: 10px;float: right;">
                        <a href="{{ route('roles.create') }}" class="float-right btn btn-outline-info btn-2x">Create Role +</a>
                       </div>
                        <div class="data-tables">
                            <table id="example1" class="text-center table-bordered datatable-success table-striped">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>SL No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sl =1;
                                    ?>
                                @foreach($rolelist as $role)

                                    <tr>
                                        <td>{{ $sl++ }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a href="" class="btn btn-outline-primary">View</a>
                                            <a href="" class="btn btn-outline-warning">Edit</a>
                                            <a href="" class="btn btn-outline-danger" onclick="return confirm('Are You Sure Delete this Items')">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table end -->
       
    </div>
    <!-- market value area end -->
   
</div>
@endsection