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
                    <li class="breadcrumb-item active">Message</li>
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
                            <h3 class="card-title">Message</h3>
                            <a href="{{ route('message.index') }}" class="btn btn-primary">Go Back to Message List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Name : </td>
                                    <td>{{$message->fname . ' ' . $message->lname}}</td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td>{{$message->email}}</td>
                                </tr>
                                <tr>
                                    <td>Subject : </td>
                                    <td>{{$message->subject}}</td>
                                </tr>
                                <tr>
                                    <td>Message : </td>
                                    <td>{{$message->message}}</td>
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
