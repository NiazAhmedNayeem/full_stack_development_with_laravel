@extends('admin.master')

@section('title')
    Create About
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">About create Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('dashboard.about_create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Describe yourself</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" placeholder="Describe yourself" type="text" id="horizontal-email-input12" name="about"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" placeholder="Input your name here" id="horizontal-password-input" name="name"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" placeholder="January 01, 1990" id="horizontal-password-input" name="dob"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" placeholder="Input your address here" type="text" id="horizontal-email-input12" name="address"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="email@gmail.com"  id="horizontal-password-input" name="email"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Zip code</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="1000" id="horizontal-password-input" name="zip"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="019XX XXXXXX" id="horizontal-password-input" name="phone"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Total complete Project</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="100" id="horizontal-password-input" name="project"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">CV link / URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="www.line.com" id="horizontal-password-input" name="url"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
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
