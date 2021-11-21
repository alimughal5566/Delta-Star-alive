@extends('frontend.layout.app')

@section('content')
<section id="page-title" class="bg-transparent">

    <div class="container clearfix">
      <h1>About Us</h1>
{{--      <span>A Short Page Title Tagline</span>--}}
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </div>

  </section><!-- #page-title end -->


  <section id="content">
    <div class="container">
      <div class="main_about">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <div class="about_img">
                  <img src="{{ asset ('assets/demos/construction/images/gallery/10.jpg') }}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6">
                  <div class="about_main_text">
                    <h3>Delta Star — to Deliver a Better World!</h3>
                    <p>Delta Star has a long and rich history in construction and building sphere. We started as a small company and have made a lot of efforts to become a leader in UAE. We prize our clients and quality of work. We strictly follow the laws and safety rules. We welcome people to get aquanitance with our company, history, team and projects we’ve made.</p>
                    <div class="owner_text">
                      <p>Delta Star — <span>Owner</span></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="main_mission">
              <div class="row">
                <div class="col-md-12">
                  <div class="main_start_mission">
                    <h4>Our History</h4>
                    <p> <strong>DELTA STAR BUILDING CONTRACTING</strong>  was established in 2002 in
                        Dubai – U.A.E by a team of highly qualified leaders of Engineers , Designers ,
                        Consultants , Accountants ,Foreman , Workers, who arrived with extensive
                        experience in civil works , contracting , Engineering , Projects Management. <br> <strong>DELTA STAR </strong>  boosted it’s way to take it’s
                        place among market leaders at United Arab Emirates to be one of the leading
                        companies providing Building contracting & Civil works.
                        Based on  <strong>TRUST</strong> we’ve set up our mission having you in the core of our
                        priorities.  </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="main_start_mission">
                    <h4>Our Mission</h4>
                    <p>Never standing on past accomplishments, but always
                        striving – through innovation and training – to improve
                        our quality and services, to ensure our efficiency, client
                        satisfaction and team work</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="main_start_mission">
                    <h4>Modern Technologies</h4>
                    <p>We know that to deliver better services to our clients we should use the latest technologies. We successfully implement them in our work and integrate to traditional ones.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="main_start_mission">
                    <h4>Professional Teamwork</h4>
                    <p>Delta star’s team is the heart of the company. A lot of of our teammembers work here for many years and achieved success in their professions.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="main_ads_big">
              <div class="ads_main_big">
                <h5>Working with us</h5>
                <div class="start_big_ads">
                  <h2>Extensive Company Network</h2>
                  <p>We are open to any cooperation with other companies! We can establish long-term and mutually beneficial relations and become reliable partners.</p>
                  <a href="{{route('request.quote')}}" class="btn btn-success"> <i class=" fa fa-envelope"></i> Request a quote  </a>
                </div>
              </div>
            </div>
            <div class="result_main mt-3">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="main_start_mission">
                    <h4>Our Results</h4>
                    <p>Check our achivements and results we have gained during this year!</p>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-4">
                    <div class="reult_imgd">
                      <i class="fa fa-building" aria-hidden="true"></i>
                      <h2>140</h2>
                      <p>PROJECTS</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="reult_imgd">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <h2>110</h2>
                      <p>HAPPY CLIENTS</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="reult_imgd">
                      <i class="fa fa-id-badge" aria-hidden="true"></i>
                      <h2>700</h2>
                      <p>QUALIFIED STAFF</p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="we_are_are">
              <div class="text_weAre">
                <h3>We Are Delta Star</h3>
                <p>We have been transforming the ideas and visions into award-winning projects.</p>
              </div>
              <div class="we_are_btn">
                <a href="{{route('request.quote')}}" class="btn btn-success"> <i class="fa fa-envelope"></i> Request a quote</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="broadcast_sidebar">
              <div class="dopwnload_btn">
                <h4>OUR BROCHURES​</h4>
                <a download href="{{asset('DELTA_STAR_PROF.pdf')}}" class="download_button">
                  <i class="fa fa-file"></i>
                  <div class="main_download_btn">
                    <h4>Company Profile</h4>
                    <p>16 MB , PDF</p>
                  </div>
                </a>
              </div>
              <div class="sidebar_time">
                <div class="working_main">
                  <h4>Working Time</h4>
                  <p>Our support available to help you 24 hours a day, seven days a week.</p>
                  <p> Sat–Wed:  <span> 08:30–17:00 </span> </p>
                  <p> Thursday:  <span> 08:30–14:00 </span> </p>
                  <p> Friday:  <span> Closed </span> </p>
                </div>
              </div>
              <div class="broadcast_ads">
                <div class="ad_main">
                  <img src="{{ asset ('assets/demos/construction/images/gallery/10.jpg') }}" class="img-fluid">
                  <div class="main_ads_text">
                    <h4>Do You Have any Questions?</h4>
                    <p>Submit a business inquiry online or visit the nearest Delta Star Contracting office.</p>
                    <a  href="{{route('contect.Us')}}" class="btn btn-success"> <i class="fa fa-envelope"></i> Contact Us </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
