<!DOCTYPE html>
<html lang="en">
@include('user.layout_partials._head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<body class="">
    <!-- ========== Left Sidebar Start ========== -->
    @include('user.layout_partials._header')
    <!-- Left Sidebar End -->
    @yield('main_content')


@include('user.layout_partials._scripts')
@yield('scripts')
</body>
</html>
