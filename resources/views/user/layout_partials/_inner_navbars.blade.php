<header id="topnav" class="defaultscroll scroll-active">
    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="{{ route('frontend.home') }}" class="logo">
                <!--<img src="images/logo-light.png" alt="" class="logo-light" height="18" />-->
                <!--<img src="images/logo-dark.png" alt="" class="logo-light" height="18" />
                <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />-->
                <p  style="color:#FFF ; font-size: 25px;padding-top: 13px;font-weight: 800;"><b>Give</b><span style="color:#FFF; font-weight: 400;"> a Work </span></p>
            </a>
        </div>
        <div class="buy-button">
            <a href="{{ route('frontend.login') }}" class="btn btn-one"><span class="position-relative"> Login</span></a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>
                    <a href="{{ route('frontend.page.about-us') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('frontend.page.how-it-works') }}">How it Works</a>
                </li>
                <li>
                    <a href="{{ route('frontend.page.contact-us') }}">contact</a>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <!--end end-->
</header><!--end header-->