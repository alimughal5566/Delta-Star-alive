@extends('layouts.app', ['activePage' => 'projects', 'titlePage' => __('Projects')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
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
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Projects</h4>
                            <p class="card-category"> You Can Change Projects From Here </p>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 text-right">

                                    {{--                                    <a href="#" class="btn btn-sm btn-primary">Add user</a>--}}

                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Add user</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Long Description</th>
                                        <th>Creation date</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key=>$row)
                                        <tr>

                                            <td>{{$key}}</td>
                                            <td><img src="{{asset('assets/demos/construction/images/Portfolio/'.$row->thumbnail)}}" alt="" height="100px" > </td>
                                            <td>{!! $row->title !!}</td>
                                            <td> {!!$row->description  !!}</td>
                                            <td>{!! $row->long_description !!} </td>
                                            <td>{!! $row->created_at !!}</td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{route('edit.portfolio',[$row->id])}}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a rel="tooltip" class="btn btn-success btn-link" onclick="return confirm('Are you sure you want to delete?')" href="{{route('delete.portfolio',[$row->id])}}" data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{$data->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('add.portfolio')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Upload photo</label>
                            <input required type="file" class="form-control" id="file" name="thumbnail" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>

                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Long Description</label>
                            <input type="text" class="form-control" id="description" name="long_description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
