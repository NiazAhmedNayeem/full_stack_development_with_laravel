@extends('admin.master')

@section('title')
    Add Home
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit create Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('dashboard.home_update', ['id' => $home->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Your Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control summernote" value="{{$home->name}}" placeholder="Name" type="text" id="horizontal-email-input12" name="name">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Sub Title 1</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{$home->title1}}" placeholder="Like- Freelancer" id="horizontal-password-input" name="title1"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Sub Title 2</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{$home->title2}}" placeholder="Like- Software Engineer" id="horizontal-password-input" name="title2"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Music</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="horizontal-password-input4" name="audio"/>
                                    <audio controls>
                                        <source src="{{asset($home->audio)}}" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                    <img src="{{asset($home->image)}}" alt="" height="100" width="130"/>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
