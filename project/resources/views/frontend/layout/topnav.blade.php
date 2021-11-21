<header id="header" class="header-size-sm" data-sticky-shrink="false">
    <div class="container">
        <div class="header-row">

            <!-- Logo
            ============================================= -->
            <div id="logo" class="ml-auto ml-lg-0 mr-lg-auto">
                <a href="{{route('welcome')}}" class="standard-logo"><img src="{{asset('assets/demos/construction/images/UntitlezxZxd-1.png')}}" alt="Canvas Logo"></a>
                <a href="{{route('welcome')}}" class="retina-logo"><img src="{{asset('assets/demos/construction/images/UntitlezxZxd-1.png')}}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <div class="header-misc d-none d-lg-flex">

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call m-0"></i>
                        <div class="he-text">
                            Call Us
                            <span>04 238 33 93</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope m-0"></i>
                        <div class="he-text">
                            Email Us
                            <span>info@deltastar.ae</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line-clock m-0"></i>
                        <div class="he-text">
                            We'are Open
                            <span>Mon - Sat, 8AM to 5PM</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('request.quote')}}" class="qoute_bbtn btn-sm btn btn-outline-info">
                        <i class="i-plain icon-line2-envelope m-0"></i>
                            <span class="text-center">&nbsp &nbsp Request A Quote</span>


                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </div>

    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">

                <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
{{--                    <div id="top-search" class="header-misc-icon">--}}
{{--                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>--}}
{{--                    </div><!-- #top-search end -->--}}

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu with-arrows">

                    <ul class="menu-container">
                        <li class="menu-item current"><a class="menu-link" href="{{route('welcome')}}"><div>Home</div></a></li>
{{--                        @if($whatwedos->count()>0)--}}
{{--                        <li class="menu-item"><a class="menu-link" href="#"><div>What we do</div></a>--}}
{{--                            <ul class="sub-menu-container">--}}
{{--                                @foreach($whatwedos as$whatwedo)--}}
{{--                                    @dd($whatwedo);--}}
{{--                                <li class="menu-item"><a class="menu-link" href="{{route('whatwedo.Details',[$whatwedo->id])}}"><div>{{$whatwedo->title}}</div></a></li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        @endif--}}
                        <li class="menu-item"><a class="menu-link" href="{{route('all.services')}}"><div>Services</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('all.projects')}}"><div>Portfolio</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('about.Us')}}"><div>About Us</div></a></li>
                        <li class="menu-item"><a class="menu-link" download href="{{asset('DELTA_STAR_PROF.pdf')}}"><div>Profile Download</div></a>
                        </li>
{{--                        <li class="menu-item"><a class="menu-link" href="demo-construction-investors.html"><div>Investors</div></a></li>--}}
{{--                        <li class="menu-item"><a class="menu-link" href="demo-construction-blog.html"><div>News</div></a></li>--}}
{{--                        <li class="menu-item"><a class="menu-link" href="demo-construction-careers.html"><div>Careers</div></a></li>--}}
                        <li class="menu-item"><a class="menu-link" href="{{route('contect.Us')}}"><div>Contact</div></a></li>
                    </ul>

                </nav>
                <!-- #primary-menu end -->

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
