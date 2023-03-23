@extends('admin.master')

@section('title')
    Add Resume
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">About create Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('dashboard.resume-index')}}" method="POST">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Describe yourself</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" placeholder="Describe yourself" type="text" id="horizontal-email-input12" name="res"></textarea>
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
@endsection
