@extends('layouts.admin')
@section('style')
<link rel="stylesheet" href="{{asset('admin')}}/css/summernote-bs4.min.css">
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Site Settings</li>
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
                            <h3 class="card-title">Site Settings</h3>
                            <a href="{{ route('website.index') }}" class="btn btn-primary">Go Back to Website</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('settings.update', [$settings->id]) }}" method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="card-body">
                                        <div>
                                            @include('layouts.inc.errors')
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="site_name">Site Title</label>
                                                    <input type="text" name="site_name" class="form-control" id="name"
                                                        value="{{$settings->site_name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Logo</label>
                                                    <div class="row p-0 m-0 align-items-center">
                                                        <div class="custom-file col-10">
                                                            <input type="file" name="site_logo" id="image" value=""
                                                                class="custom-file-input">
                                                            <label for="site_logo" class="custom-file-label"
                                                                id="custom-file">Feature Image</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <img src="{{asset('uploads/settings/'.$settings->site_logo)}}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="site_bio">Site Bio (About Us)</label>
                                                    <input type="text" name="site_bio" class="form-control" id="name"
                                                        value="{{$settings->site_bio}}">
                                                </div>
                                                <h4>Contact Page Info</h4>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" class="form-control" id="name"
                                                        value="{{$settings->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" name="phone" class="form-control" id="name"
                                                        value="{{$settings->phone}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea type="text" name="address" class="form-control" id="address"
                                                        value="{{$settings->address}}">
                                                        {{$settings->address}}
                                                </textarea>
                                                </div>
                                                <h4>Copyright Info</h4>
                                                <div class="form-group">
                                                    <label for="copyright">Copyright Text</label>
                                                    <input type="text" name="copyright" class="form-control" id="name"
                                                        value="{{$settings->copyright}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <h4>Social Links</h4>
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" name="facebook" class="form-control" id="name"
                                                        value="{{$settings->facebook}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="text" name="twitter" class="form-control" id="name"
                                                        value="{{$settings->twitter}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="text" name="instagram" class="form-control" id="name"
                                                        value="{{$settings->instagram}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="reddit">Reddit</label>
                                                    <input type="text" name="reddit" class="form-control" id="name"
                                                        value="{{$settings->reddit}}">
                                                </div>
                                                
                                            </div>
                                        </div>

                                        {{-- <div>
                                            <label class="d-block">Tags</label>
                                            @foreach ($tags as $tag)
                                            <input type="checkbox" class="" name="tags[]" value="{{$tag->id}}"
                                        id="tag{{$tag->id}}" @foreach ($post->tags as $t)
                                        @if($tag->id == $t->id) checked
                                        @endif
                                        @endforeach >
                                        <label for="tag{{$tag->id}}">{{$tag->name}}</label>

                                        @endforeach

                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description"
                                            rows="4">{{$post->description}}</textarea>
                                    </div> --}}
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

@section('script')
<script src="{{asset('admin')}}/js/summernote-bs4.min.js"></script>
<script>
    $('#description').summernote({
        placeholder: 'Write post description here',
        tabsize: 2,
        height: 200
    });

</script>
@endsection
