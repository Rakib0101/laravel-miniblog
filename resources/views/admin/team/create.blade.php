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
                    <li class="breadcrumb-item"><a href="{{route('team.index')}}">Member</a></li>
                    <li class="breadcrumb-item active">Add New Member</li>
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
                        <h3 class="card-title">Create Member</h3>
                        <div class="float-right">
                            <a href="{{ route('team.index') }}" class="btn btn-primary ms-auto">Go Back To Member
                                List</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div>
                                            @include('layouts.inc.errors')
                                        </div>
                                        <div class="form-group">
                                            <label for="member_name">Name</label>
                                            <input type="text" name="member_name" class="form-control" id="name"
                                                placeholder="Enter Member Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="member_image" id="member_image" class="custom-file-input">
                                                <label for="member_image" class="custom-file-label" id="custom-file">Feature
                                                    Image</label>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Description</label>
                                            <textarea class="form-control" name="member_bio" id="description" rows="4"
                                                placeholder="Enter some info about you..."></textarea>
                                        </div>
                                        <h4>Social Links</h4>
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="name"
                                                placeholder="Enter Links">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="name"
                                                placeholder="Enter Links">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="name"
                                                placeholder="Enter Links">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
