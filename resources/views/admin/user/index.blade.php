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
                    <li class="breadcrumb-item active">User</li>
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
                        <h3 class="card-title">User List</h3>
                        <div class="float-right">
                            <a href="{{ route('user.create') }}" class="btn btn-primary ms-auto">Create User</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Post Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->count())
                                    @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->slug}}</td>
                                    <td>{{$user->description}}</td>
                                    <td>{{$user->id}}</td>
                                    <td class="d-flex">
                                      <a class="mr-2 btn btn-sm btn-primary" href="{{ route('user.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                                      <form action="{{ route('user.destroy', $user->id) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf 
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                      </form>
                                      <a class="mr-2 btn btn-sm btn-success" href="{{ route('user.show', $user->id) }}"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>    
                              @endforeach
                                @else
                                    <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No users found</h5>
                                    </td>
                                </tr>
                                @endif
                              
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection
