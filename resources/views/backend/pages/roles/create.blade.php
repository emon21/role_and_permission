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
        <!-- basic form start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {{--  <h4 class="header-title">Basic form</h4>  --}}


                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control"name="role_name" value="{{ old('role_name') }}" placeholder="Enter Role Name...!!">
                            {{--  <small id="emailHelp" class="form-text text-muted">
                                Well never share your Role with anyone else</small>  --}}
                        </div>
                      @include('backend.inc_file.message')

                        <b class="text-muted mb-3 d-block">Permissions:</b>
                        @foreach ($permissions as $permission )
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="permissions[]" id="permissioncheck{{ $permission->id }}" value="{{ $permission->name }}">
                            <label class="custom-control-label" for="permissioncheck{{ $permission->id }}">{{ $permission->name }}</label>
                        </div>
                        @endforeach

                        {{--  <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Unchecked Checkbox</label>
                        </div>  --}}

                        {{--  <b class="text-muted mb-3 mt-4 d-block">Inline Checkbox:</b>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">Unchecked Checkbox</label>
                        </div>
                        <div class="mb-3"></div>  --}}

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Role</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- basic form end -->

    </div>
    <!-- market value area end -->

</div>
@endsection
