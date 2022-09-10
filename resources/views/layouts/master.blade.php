<!DOCTYPE html>
<html lang="en">
@include('backend.admin.layout_partials._head')


<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    @include('backend.admin.layout_partials._sidebar')
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            @include('backend.admin.layout_partials._topbar')
            <!-- Top Bar End -->

            <div class="page-content-wrapper">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    {{--<div class="dropdown">
                                        <button class="btn btn-secondary btn-round dropdown-toggle px-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-settings mr-1"></i>Settings
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>--}}
                                </div>
                                <br>
                                {{--<h4 style="font-size: 18px;" class="page-title">Dashboard</h4>--}}
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    @yield('main_content')

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        @include('backend.admin.layout_partials._footer')

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->
<!--
--

--
-->

@include('backend.admin.layout_partials._scripts')
@yield('scripts')
</body>
</html>
