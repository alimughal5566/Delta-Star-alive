
<?php
    $main_slider=\App\Models\HomePage::all();
?>

<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-75" data-loop="true">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">


            @foreach($main_slider as $main)
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption" data-aos="fade-down">
                        <!-- <div>
                            <h2>{{$main->title}}</h2>
                            <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
                        </div> -->

                         <div class="slider-container">
                        <h4 class="slider-sub-title">High Quality Guaranteed</h4>
                        <div class="animated-area">
                                <h1 class="slider-title">{{$main->title}}</h1>
                                <a href="{{ url ('/contect/us') }}" class="slider-buttton">Contact Us</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url({{asset('assets/demos/construction/images/slider/'.$main->thumbnail)}}); background-position: center top;"></div>
            </div>
            @endforeach
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

</section>

        <script>
            $(document).ready(function() {
                    AOS.init({
                            duration: 1200,
                            })

            });
        </script>
