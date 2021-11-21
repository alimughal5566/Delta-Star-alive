@extends('layouts.app', ['activePage' => 'whatwedo', 'titlePage' => __('What We Do')])

@section('content')
    <style>
        .editor-space {
            height:500px;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('update.portfolio')}}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Edit Feature</h4>
                                <p class="card-category">Edit Feature</p>
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
                                        <div class="form-group" id="editor" >
                                            <textarea  class="form-control" cols="15" rows="10" name="description" id="description"  required >{{$data->description}}</textarea >
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <textarea  class="form-control" cols="15" rows="10" name="long_description" id="description"  required >{{$data->long_description}}</textarea >
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
                                            <img src="{{asset('assets/demos/construction/images/Portfolio/'.$data->thumbnail)}}" height="100px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>


@endsection
