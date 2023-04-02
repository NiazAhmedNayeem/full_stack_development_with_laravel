@extends('admin.master')

@section('title')
    Add Project
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Project create Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('dashboard.project_create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Project Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Input your project name" id="horizontal-password-input" name="name"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Language 1</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="HTML or anything else" id="horizontal-password-input" name="language1"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Language 2</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="CSS or anything else" id="horizontal-password-input" name="language2"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Language 3</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="JavaScript or anything else" id="horizontal-password-input" name="language3"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Language 4</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="PHP or anything else" id="horizontal-password-input" name="language4"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Language 5</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Laravel or anything else" id="horizontal-password-input" name="language5"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Project link / URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.google.com/'" id="horizontal-password-input" name="url"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Project Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create Project</button>
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
