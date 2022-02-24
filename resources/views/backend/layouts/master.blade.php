@include('backend.inc_file.header')
<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an 
		<strong>outdated</strong> browser. Please 
		<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</p>
	<![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start --> 
        @include('backend.inc_file.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
             @include('backend.inc_file.headerbar')
            <!-- header area end -->
            <!-- page title area start -->
             @yield('admin-content')
            <!-- page  area end -->
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
         @include('backend.inc_file.footerbar')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   @include('backend.inc_file.ofsetarea')
    <!-- offset area end -->
@include('backend.inc_file.footer')