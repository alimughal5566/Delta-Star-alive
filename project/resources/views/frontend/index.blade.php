<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('frontend.layout.header')
<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    @include('frontend.layout.topbar')
    <!-- #top-bar end -->

    <!-- Header
    ============================================= -->

@include('frontend.layout.topnav')

@include('frontend.layout.main-slider')

    <!-- Content
    ============================================= -->
    @yield('content')

    <!-- Footer
    ============================================= -->
    <!-- #footer end -->
    @include('frontend.layout.footer')
</div><!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- JavaScripts
============================================= -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>
