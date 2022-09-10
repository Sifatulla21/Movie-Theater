<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    @include('frontend.layout_partials._head')
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navigation Bar-->
@include('frontend.layout_partials._inner_navbars')

<!-- Navbar End -->

@yield('main_content')



@include('frontend.layout_partials._footer')


<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="{{ asset('assets/frontend/js') }}/jquery.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/jquery.easing.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/plugins.js"></script>
<script src="{{ asset('assets/frontend/plugins') }}/slick/slick.js"></script>

<!-- selectize js -->
<script src="{{ asset('assets/frontend/js') }}/selectize.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/jquery.nice-select.min.js"></script>

<script src="{{ asset('assets/frontend/js') }}/owl.carousel.min.js"></script>
<!--<script src="{{ asset('assets/frontend/js') }}/counter.int.js"></script>-->

@yield('js_plugin')

<script src="{{ asset('assets/frontend/js') }}/app.js"></script>
<script src="{{ asset('assets/frontend/js') }}/home.js"></script>

@yield('custom_js')

<script>
    $(function () {
        $('.single-item').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
        });
        $('.payment_partners').slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.payment_partners_next_prev_btn .ppnb'),
            nextArrow: $('.payment_partners_next_prev_btn .pppb'),
        });
    });

</script>
</body>
</html>

