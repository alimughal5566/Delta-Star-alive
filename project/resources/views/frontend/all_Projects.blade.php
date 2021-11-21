@extends('frontend.layout.app')

@section('content')

    <style>
        .portfolio_main{
            padding-top: 31px;
            padding-bottom: 25px;
        }
    </style>
    <section id="page-title" class="bg-transparent">

        <div class="container clearfix">
            <h1>Portfolio</h1>
            {{--      <span>A Short Page Title Tagline</span>--}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </div>

    </section>

    <!-- what we do-->
    @if($data->count() > 0)
        <div class="main_whatwe cunstom_weDo text-center container">
            <h1 class="center whatweDo ls1">Projects</h1>
            <h3>Check out our projects</h3>
            <p > Every day we work on different objects all over the UAE. During our history we have created hundreds of buildings and have provided many corresponding services. Below are some of our best projects.</p>
        </div>

        <div class="container clearfix">

            <div class="row set_height_main_ciustom justify-content-center col-mb-50">
                @foreach($data as $whatwe)
                    <div class="col-sm-6 col-lg-4" data-aos="fade-up">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <a href="{{route('portfolio.Details',[$whatwe->id])}}"><img class="rounded" src="{{asset('assets/demos/construction/images/Portfolio/'.$whatwe->thumbnail)}}" alt="Why choose Us?"></a>
                            </div>
                            <div class="fbox-content px-0">
                                <h3>{!!  $whatwe->title!!} <span class="subtitle">{!! $whatwe->description !!} </span></h3>
                                {{--                                 <p>{{$whatwe->long_description}}</p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="qoute_msg_block">
                <a href="{{route('request.quote')}}" class="button button-3d border-bottom-0 button-full center text-right font-weight-light font-primary topmargin footer-stick" style="font-size: 26px;">
                    <div class="container clearfix">
                        Would you like to Build your Dream Home with Us? <strong>Request A Quote</strong> <i class="icon-angle-right" style="top:3px;"></i>
                    </div>
                </a>
            </div>
        </div>
    @endif
    <!--what we do end-->

@endsection
