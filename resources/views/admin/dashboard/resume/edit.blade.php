@extends('admin.master')

@section('title')
    Resume Edit
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">About create Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('dashboard.resume_update', ['id' => $resume->id])}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Passing year or Present</label>
                                <div class="col-sm-9">
                                    <input class="form-control summernote" value="{{$resume->passyr}}" placeholder="2010-2014 or Present" type="text" id="horizontal-email-input12" name="passyr">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{$resume->department}}" placeholder="Like BBA, CSE, LLB" id="horizontal-password-input" name="department"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Major</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{$resume->major}}" placeholder="Software" id="horizontal-password-input" name="major"/>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Institute</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" placeholder="like University name" type="text" id="horizontal-email-input12" name="institute">{{$resume->department}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create</button>
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



