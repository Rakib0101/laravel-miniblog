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
                        <h3 class="card-title">Category Lists</h3>
                        <div class="float-right">
                            <a href="{{ route('category.index') }}" class="btn btn-primary ms-auto">Back to Category List</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div style="padding: 0.75rem 1.25rem;">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width:30%;">Category Name :</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Category Description :</td>
                                    <td>{{$category->description}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection
