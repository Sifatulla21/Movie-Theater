<!DOCTYPE html>
<html lang="en">
@include('admin.layout_partials._head')

<body class="">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h5><b class="text-warning">{{ Auth::user()->name }}</b></h5>
            </div>
            <ul class="lisst-unstyled components">
                <p>The providers</p>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}" data-toggle="collapse">Home</a>
                </li>
                <li >
                    <a href="{{ route('cinemahall.index') }}"><i class="fa fa-align-left"></i>Cinema List</a>
                </li>
                <li >
                    <a href="{{ route('admin.order') }}"><i class="fa fa-align-left"></i>Order</a>
                </li>
                <li >
                    <a href="{{ route('users.index') }}"><i class="fa fa-align-left"></i>Users</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bookings
                      </a>
                    <ul class="dropdown-menu dropdown-menu-dark lisst-unstyled" >
                        @if ($cinemas)
                            @foreach ($cinemas as $item)
                            <li>
                                <a href="{{ route('admin.booking',['id' => $item->id ])}}"><i class="fa fa-align-left"></i>{{ $item->name }}</a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-align-left"></i>
                        <span>||</span>
                    </button>
                    <div style="float: left">
                        <div class="dropdown" style="position: relative;">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" style="position: absolute;left: -90px">
                              <li ><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid container">
                @yield('main_content')
            </div><!-- container -->
        </div>
    </div>
    <!-- ========== Left Sidebar Start ========== -->
    {{-- @include('admin.layout_partials._sidebar') --}}
    <!-- Left Sidebar End -->
    

    {{-- @include('backend.admin.layout_partials._footer') --}}

@include('admin.layout_partials._scripts')
@yield('scripts')
</body>
</html>
