<div class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>{{$settings->site_bio}}</p>
            </div>
            <div class="col-md-4 ml-auto d-flex justify-content-between">
                <div>
                    <h3 class="footer-heading mb-4">Important Links</h3>
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="{{route('website.about')}}">About Us</a></li>
                        <li><a href="{{route('website.index')}}">Advertise</a></li>
                        <li><a href="{{route('website.index')}}">Careers</a></li>
                        <li><a href="{{route('website.contact')}}">contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-heading mb-4">Categories</h3>
                    <ul class="list-unstyled float-left">
                        @foreach ($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">


                <div>
                    <h3 class="footer-heading mb-4">Connect With Us</h3>
                    <p>
                        <a href="{{$settings->facebook}}" target="_blank"><span
                                class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                        <a href="{{$settings->twitter}}" target="_blank"><span class="icon-twitter p-2"></span></a>
                        <a href="{{$settings->instagram}}" target="_blank"><span class="icon-instagram p-2"></span></a>
                        <a href="{{$settings->reddit}}" target="_blank"><span class="icon-rss p-2"></span></a>
                        <a href="{{$settings->email}}" target="_blank"><span class="icon-envelope p-2"></span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    {{$settings->copyright}} | This template is made with <i class="icon-heart text-danger"
                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib---</a>Downloaded from <a href="https://themeslab.org/"
                        target="_blank">Themeslab</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
