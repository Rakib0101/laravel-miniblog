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
                    <li class="breadcrumb-item active">Tag</li>
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
                        <h3 class="card-title">Tag List</h3>
                        <div class="float-right">
                            <a href="{{ route('tag.create') }}" class="btn btn-primary ms-auto">Create Tag</a>
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
                                @if ($tags->count())
                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->slug}}</td>
                                    <td>{{$tag->description}}</td>
                                    <td>{{$tag->id}}</td>
                                    <td class="d-flex">
                                        <a class="mr-2 btn btn-sm btn-success"
                                            href="{{ route('tag.show', $tag->id) }}"><i class="fas fa-eye"></i></a>
                                        <a class="mr-2 btn btn-sm btn-primary"
                                            href="{{ route('tag.edit', $tag->id) }}"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('tag.destroy', $tag->id) }}" class="mr-1" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger"> <i
                                                    class="fas fa-trash"></i> </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No tags found</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <div>
                            {{$tags->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection
