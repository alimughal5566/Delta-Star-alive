@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Total Projects</p>
              <h3 class="card-title">{{\App\Portfolio::all()->count()}}
              </h3>
            </div>
              <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">local_offer</i>Number Of Projects Completed By Us...
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Features</p>
              <h3 class="card-title">{{\App\Models\Features::all()->count()}}</h3>
            </div>
              <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">local_offer</i> Number Of Listed Features....
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Services</p>
              <h3 class="card-title">{{\App\Models\WhatWeDo::all()->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Number Of Services We Have....
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
              <?php
              $latest_projects=\App\Portfolio::orderBy('id','DESC')->paginate(4);
              ?>
            <div class="card-header card-header-warning">
              <h4 class="card-title">Latest Projects</h4>
              <p class="card-category">last Update {{$latest_projects[0]->updated_at}}</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>SN</th>
                  <th>Title</th>
                  <th>About</th>
                  <th>Date</th>
                </thead>
                <tbody>

                @foreach($latest_projects as $key=>$project)
                  <tr>
                    <td>{{$key}}</td>
                    <td>{{$project->title}}</td>
                    <td>{!!  $project->description !!}</td>
                    <td>{{$project->created_at}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
              {{$latest_projects->links()}}
          </div>
        </div>
          <div class="col-lg-6 col-md-12">

              <?php
              $features=\App\Models\Features::orderBy('id','DESC')->paginate(4)
              ?>
              <div class="card">
                  <div class="card-header card-header-warning">
                      <h4 class="card-title">Latest Features</h4>
                      <p class="card-category">last Update {{$features[0]->updated_at}}</p>
                  </div>
                  <div class="card-body table-responsive">
                      <table class="table table-hover">
                          <thead class="text-warning">
                          <th>SN</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          </thead>
                          <tbody>
                          @foreach($features as $key=>$feature)
                          <tr>
                              <td>{{$key}}</td>
                              <td>{{$feature->title}}</td>
                              <td>{{$feature->description}}</td>
                              <td>{{$feature->created_at}}</td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                  {{$features->links()}}

              </div>
          </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
