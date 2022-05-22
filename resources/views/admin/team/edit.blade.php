@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Member list</a></li>
                    <li class="breadcrumb-item active">Edit Member</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit Member - {{ $team->member_name }}</h3>
                            <a href="{{ route('team.index') }}" class="btn btn-primary">Go Back to Member List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('team.update', [$team->id]) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div>
                                            @include('layouts.inc.errors')
                                        </div>
                                        <div class="form-group">
                                            <label for="member_name">Name</label>
                                            <input type="text" name="member_name" class="form-control" id="name"
                                                value="{{$team->member_name}}">
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
                                                value="{{$team->member_bio}}">{{$team->member_bio}}</textarea>
                                        </div>
                                        <h4>Social Links</h4>
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="name"
                                                value="{{$team->facebook}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="name"
                                                value="{{$team->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="name"
                                                value="{{$team->instagram}}">
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
@endsection
