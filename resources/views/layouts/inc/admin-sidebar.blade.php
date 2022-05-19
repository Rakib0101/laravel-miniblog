<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('admin') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin') }}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard.index')}}"
                        class="nav-link {{ (request()->is('admin/dashboard')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="{{ route('category.index')}}"
                        class="nav-link {{ (request()->is('admin/category*')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="{{ route('tag.index') }}"
                        class="nav-link {{ (request()->is('admin/tag*')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="{{ route('post.index') }}"
                        class="nav-link {{ (request()->is('admin/post*')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-pen-square"></i>
                        <p>
                            Post
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item mt-auto">
                    <a href="" class="nav-link {{ (request()->is('admin/contact*')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Messages
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item mt-auto">
                    <a href="{{ route('user.index')}}"
                        class="nav-link {{ (request()->is('admin/user*')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item mt-auto">
                    <a href="" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">Your Account</li>
                <li class="nav-item mt-auto">
                    <a href="{{ route('user.profile') }}"
                        class="nav-link {{ (request()->is('admin/profile')) ? 'active': '' }}">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Your Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="text-center mt-5">
                    <a href="{{ route('website.index') }}" class="btn btn-primary text-white" target="_blank">
                        <p class="mb-0">
                            View Website
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
