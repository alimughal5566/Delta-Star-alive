@extends('layouts.app', ['activePage' => 'secondslider', 'titlePage' => __('Second Slider')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('update.second.slider')}}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Edit Slider</h4>
                                <p class="card-category">Edit Slider</p>
                            </div>
                            <div class="card-body ">
                                <?php if(session('status')): ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span><?php echo e(session('status')); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="title" id="title" type="text" placeholder="Title" value="{{$data->title}}" required="true" aria-required="true"/>
                                            <input type="hidden" value="{{$data->id}}" name="id">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input class="form-control" name="description" id="description" type="text" placeholder="Description" value="{{$data->description}}" required="true" aria-required="true"/>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="thumbnail" id="thumbnail" type="file" placeholder="Photo" value="{{$data->thumbnail}}" />
                                        </div>
                                    </div>
                                </div>

                               <div class="row">
                                        <label class="col-sm-2 col-form-label">Old Photo</label>
                                        <div class="col-sm-7">
                                            <div class="form-group " >
                                                {{--                                        <input class="form-control" name="thumbnail" id="thumbnail" type="file" placeholder="Photo" value="{{$data->thumbnail}}" required />--}}
                                                <img src="{{asset('assets/demos/construction/images/slider/'.$data->thumbnail)}}" height="100px" alt="">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
