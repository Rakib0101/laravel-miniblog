@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                        <div class="float-right">
                            <a href="{{ route('user.index') }}" class="btn btn-primary ms-auto">Go Back To user
                                List</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                                <form action="{{ route('user.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        @include('layouts.inc.errors')
                                        <div class="form-group">
                                            <label for="name">User name</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">User email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">User password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection
