@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Settings')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('general.setting.update') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('General Settings') }}</h4>
                                <p class="card-category">{{ __('Basic Settings') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @php
                                    $data=\App\Models\GenaralSettings::all()->first();
                                @endphp
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Phone1</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="phone1" id="input-name" type="text" placeholder="Phone1" value="{{ old('Phone1', $data->phone1) }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"    >
                                    <label class="col-sm-2 col-form-label">Phone2</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="phone2" id="input-name" type="text" placeholder="Phone2" value="{{ old('Phone2', $data->phone2) }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Email1</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="email1" id="input-email" type="email" placeholder="Email1" value="{{ old('email1', $data->email1) }}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Email2</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="email2" id="input-email" type="email" placeholder="Email2" value="{{ old('email2', $data->email2) }}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Address1</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="address1" id="input-email" type="text" placeholder="Adddress1" value="{{ old('address1', $data->address1) }}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Address2</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="address2" id="input-email" type="text" placeholder="Address2" value="{{ old('address2', $data->address2) }}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-sm-2 col-form-label">WhyUS?</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea class="required form-control" id="whyus" name="why_us" rows="6" cols="30" required="true">{{$data->why_us}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                        <label class="col-sm-2 col-form-label">Work Ethics</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea class="required form-control" id="work_ethics" name="work_ethics" rows="6" cols="30" required="true">{{$data->work_ethics}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                        <label class="col-sm-2 col-form-label">Location</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea class="required form-control" id="location" name="location" rows="6" cols="30" required="true">{{$data->location}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">About US</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea class="required form-control" id="about_us" name="location" rows="6" cols="30" required="true">{{$data->about_us}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Start Now Title</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
{{--                                                <textarea class="required form-control" id="location" name="start_now_title" rows="6" cols="30" required="true">{{$data->location}}</textarea>--}}
                                                <input type="text" class="form-control" id="start_now_title" name="start_now_title" value="{{old('start_now_title',$data->start_now_title)}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Start now details</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea class="required form-control" id="start_now_details" name="start_now_details" rows="6" cols="30" required="true">{{$data->start_now_details}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">statistics</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input placeholder="clients" class="form-control" type="number" name="clients" id="clients" value="{{old('clients',$data->clients)}}">
                                                <input placeholder="branches" class="form-control" type="number" name="branches" id="branches" value="{{old('clients',$data->branches)}}">
                                                <input placeholder="employee" class="form-control" type="number" name="employee" id="employee" value="{{old('clients',$data->employee)}}">
                                                <input placeholder="cities" class="form-control" type="number" name="cities" id="cities" value="{{old('clients',$data->cities)}}">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection
