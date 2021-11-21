@extends('frontend.layout.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @include('frontend.layout.main-slider')
    <section id="content">
        <div class="content-wrap">

            <div class="promo promo-light promo-full promo-uppercase p-5 bottommargin-lg header-stick">
                <div class="container clearfix">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 style="letter-spacing: 2px;">{{$general_settings->start_now_title}}</h3>
                            <span>{{$general_settings->start_now_details}}</span>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
{{--                            <a href="{{route('contect.Us')}}" class="button button-large button-circle button-black m-0">Start Now</a>--}}
                            <div class="main_crntrt_logo">
                                <img src="{{ url('assets/demos/construction/images/UntitlezxZxd-1.png')  }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- what we do-->
            @if($whatwedo->count() > 0)
            <div class="main_whatwe ">
                <h1 class="center whatweDo ls1">What We Do:</h1>
            </div>

            <div class="container clearfix">

                <div class="row justify-content-center col-mb-50">
                    @foreach($whatwedo as $whatwe)
                    <div class="col-sm-6 col-lg-4" data-aos="fade-up">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <a href="{{route('whatwedo.Details',[$whatwe->id])}}"><img class="rounded" src="{{asset('assets/demos/construction/images/whatwedo/'.$whatwe->thumbnail)}}" alt="Why choose Us?"></a>
                            </div>
                            <div class="fbox-content px-0">
                                <h3>{!!  $whatwe->title!!} <span class="subtitle">{!! $whatwe->description !!} </span></h3>
{{--                                 <p>{{$whatwe->long_description}}</p>--}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            @endif
            <!--what we do end-->
            <a href="{{route('request.quote')}}" class="button button-3d border-bottom-0 button-full center text-right font-weight-light font-primary topmargin footer-stick" data-aos="fade-right" style="font-size: 26px;">
                <div class="container clearfix">
                    Would you like to Build your Dream Home with Us? <strong>Request A Quote</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>
            <div class="section parallax dark" data-aos="fade-up-left" style="background-image: url({{asset('assets/demos/construction/images/slider/1.jpg')}}); padding: 120px 0;"  data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px; margin-bottom: 0">

                <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                        @foreach($second_slider as $slider)
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('assets/demos/construction/images/slider/'.$slider->thumbnail)}}" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{$slider->description}}</p>
                                    <div class="testi-meta">
                                        {{$slider->title}}
                                        <span>deltastar.ae</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="video-wrap" style="z-index: 1;">
                    <div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
                </div>

            </div>
            @if($features->count() > 0)
            <div class="section custom_sections">
                <h2 class="center  ls1">Some Of Our Features:</h2>
            </div>

            <div class="container">
                <div class="row align-items-stretch col-mb-50">
                    @foreach($features as $feature)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain" data-aos="zoom-in">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('assets/demos/construction/images/features/'.$feature->thumbnail)}}" alt="Concrete Developments"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$feature->title}}</h3>
                                <p>{{$feature->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          @endif
{{--           <div class="section mb-0">--}}
{{--                <h2 class="center mb-0 ls1">Some of Our Esteemed Projects:</h2>--}}
{{--            </div>--}}
{{--            <div id="portfolio" class="portfolio row container grid-container no-gutters">--}}
{{--                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">--}}
{{--                    <div class="grid-inner">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <img src="{{asset('assets/demos/construction/images/projects/1.jpg')}}" alt="The Atmosphere">--}}
{{--                            <div class="bg-overlay">--}}
{{--                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">--}}
{{--                                    <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-desc">--}}
{{--                            <h3><a href="#">The Atmosphere</a></h3>--}}
{{--                            <span>Chicago, USA</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--            </div>--}}

            <div class="container topmargin-lg cleafix">

                <div class="row col-mb-50">
                    <div class="col-md-8">

                        <div class="tabs tabs-justify mb-0 clearfix" id="construction-tabs">

                            <ul class="tab-nav clearfix">
                                <li><a href="#construction-tab-1">Why Us?</a></li>
                                <li><a href="#construction-tab-2">Work Ethic</a></li>
                                <!-- <li><a href="#construction-tab-3">Team</a></li> -->
                                <li><a href="#construction-tab-4">Locations</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="construction-tab-1">
                                    <p>We are one of UAE's construction Companies, known for our well-recognized ability to deliver projects with exceptional quality on time and budget and for our extensive fleet of tool and plant.</p>
                                    <!-- <div class="row col-mb-30">
                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="0" data-refresh-interval="50" data-speed="2000"></span></div>
                                            <h5>Floors Built</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="0" data-refresh-interval="50" data-speed="2500"></span></div>
                                            <h5>Employees</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="0" data-refresh-interval="50" data-speed="3500"></span></div>
                                            <h5>Happy Clients</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="14" data-to="0" data-refresh-interval="15" data-speed="2700"></span></div>
                                            <h5>Cities Served</h5>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="tab-content clearfix" id="construction-tab-2">
                                    <img src="{{asset('assets/demos/construction/images/projects/3.jpg')}}" width="260" alt="Image" class="img-thumbnail alignleft">
                                    <p>Our Construction Managers conduct themselves honorably, responsibly, ethically, and lawfully so as to enhance the honor, reputation and value of the profession . We as a construction company avoid conduct or practices that deceive the public or represent a real or perceived conflict of interest</p>
                                </div>
                                <!-- <div class="tab-content clearfix" id="construction-tab-3">
                                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                    <div class="row col-mb-30">
                                        <div class="col-sm-6 col-md-4">
                                            <ul class="iconlist mb-0">
                                                <li><i class="icon-ok"></i> 100% Assurance</li>
                                                <li><i class="icon-ok"></i> Hard Working</li>
                                                <li><i class="icon-ok"></i> Trustworthy</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <ul class="iconlist mb-0">
                                                <li><i class="icon-ok"></i> Intelligent</li>
                                                <li><i class="icon-ok"></i> Always Curious</li>
                                                <li><i class="icon-ok"></i> Perfectionists</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <ul class="iconlist mb-0">
                                                <li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
                                                <li><i class="icon-ok"></i> Accomodating Nature</li>
                                                <li><i class="icon-ok"></i> Available 24x7</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                 -->
                                <div class="tab-content clearfix" id="construction-tab-4">

                                    <div class="row col-mb-30">
                                        <div class="col-md-7">
                                            <!--     <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p> -->

                                            <div class="row col-mb-30">
                                                <div class="col-md-6">
                                                    <address>
                                                        <strong>Branches:</strong><br>
                                                        Ras Al Khor<br>
                                                        Dubai U.A.E<br>
                                                    </address>
                                                </div>
                                                <div class="col-md-6">
                                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr><a href="tel:+04 238 33 93">04 238 33 93</a><br>
                                                    <abbr title="Phone Number"><strong>phoene:</strong></abbr> 00 971 505 071 702<br>
                                                    <abbr title="Email Address"><strong>Email:</strong></abbr><a href="mailto:info@deltastar.ae">info@deltastar.ae</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- <img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180&key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA" alt="Google Map" class="img-thumbnail"> -->
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="widget quick-contact-widget form-widget clearfix">
                            <h4>Quick Quotation Form</h4>
                            <div class="form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="{{route('quick.mail')}}" method="post" class="quick-contact-form mb-0">
                                @csrf
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>
                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick_contact_form_name" value="" placeholder="Full Name" />
                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-phone" name="quick_contact_form_phone" value="" placeholder="Phone" />
                                <input type="email" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick_contact_form_email" value="" placeholder="Email Address" />
                                <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick_contact_form_message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <input type="hidden" name="prefix" value="quick-contact-form-">
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Submit</button>
                            </form>

                        </div>

                    </div>
                </div>

            </div>

            <div class="line topmargin-sm"></div>

            <div class="section bg-transparent mt-0 p-0 footer-stick">
                <div class="container clearfix">

                    <div class="row">
                        <div class="col-lg-7" data-aos="zoom-in-down">
                            <img src="{{asset('assets/demos/construction/images/services/bottom-trust.jpg')}}" alt="Bottom Trust">
                        </div>
                        <div class="col-lg-5 topmargin-sm">
                            <div class="heading-block border-bottom-0">
                                <h2>You're in Good Hands.</h2>
                                <span class="ls1">Five Points that define Our Reliability.</span>
                            </div>

                            <ul class="iconlist iconlist-large iconlist-color">
                                <li><i class="icon-ok"></i> Market Leader since 1915</li>
                                <li><i class="icon-ok"></i> Positive Results within Deadlines</li>
                                <li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
                                <li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
                                <li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->

    	<script>
    		$(document).ready(function() {
    				AOS.init({
	  						duration: 1200,
							})
	
    		});
    	</script>

@endsection
