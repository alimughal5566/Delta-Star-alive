@extends('frontend.layout.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <section id="page-title" class="bg-transparent">

        <div class="container clearfix">
            <h1> Our Services</h1>
            {{--      <span>A Short Page Title Tagline</span>--}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </div>

    </section>

    <!-- what we do-->
    @if($data->count() > 0)
        <div class="main_whatwe cunstom_weDo text-center">
            <h1 class="center whatweDo ls1">What We Do:</h1>
            <h3>Exclusive Service</h3>
            <p>We provide all kinds of construction and building services and we are always glad to resolve nonstandard and unique tasks. We always take challenges and bring them to a conclusion.</p>
        </div>

        <div class="container clearfix">

            <div class="row set_height_main_ciustom justify-content-center col-mb-50">
                @foreach($data as $whatwe)
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
            <div class="qoute_msg_block">
                <a href="{{route('request.quote')}}" class="button button-3d border-bottom-0 button-full center text-right font-weight-light font-primary topmargin footer-stick" style="font-size: 26px;">
                <div class="container clearfix">
                    Would you like to Build your Dream Home with Us? <strong>Request A Quote</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>
            </div>
        </div>
    @endif


    <section class="progress_section">
        <div class="container">
            <div class="main_progress">
                <div class="main_text_skill text-center mt-5">
                    <h2>Our Skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="main_start_p">
                            <p>Safety</p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="99" aria-valuemax="99">99</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main_start_p">
                            <p>Quality</p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="95" aria-valuemax="100">95</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main_start_p">
                            <p>Management & Staff</p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100">80</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main_start_p">
                            <p>Client Satisfaction </p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="78" aria-valuemax="78">78</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--what we do end-->



    <script>
        var delay = 500;
$(".progress-bar").each(function(i){
    $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: delay,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now)+'%');
        }
    });
});
    </script>

@endsection
