@extends('frontend.layout.app')

@section('content')
    <section id="page-title" class="bg-transparent">

        <div class="container clearfix">
            <h2>{!! $data->title !!}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{!!  $data->title !!}</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Page Title
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <h3>{!! $data->title !!}</h3>
                            <span> {!!  $data->description !!} </span>
                        </div>
                        <p>{!!  $data->long_description!!}</p>
{{--                        <a href="#" class="button button-3d ml-0 bottommargin-sm">Learn More</a>--}}
                    </div>

                    <div class="col-lg-6">
                        <div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide" data-thumb="demos/construction/images/gallery/thumbs/1.jpg">
                                        <img src="{{asset('assets/demos/construction/images/whatwedo/'.$data->thumbnail)}}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 font-weight-light bg-light text-dark px-3 py-2">{{$data->title}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('request.quote')}}" class="button button-3d border-bottom-0 button-full center text-right font-weight-light font-primary topmargin footer-stick" style="font-size: 26px;">
                <div class="container clearfix">
                    Would you like to Build your Dream Home with Us? <strong>Request A Quote</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>

        </div>
    </section><!-- #content end -->

@endsection
