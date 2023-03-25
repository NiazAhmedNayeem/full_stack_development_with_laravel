@extends('admin.master')

@section('title')
    Add Footer
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Footer create Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('dashboard.footer-create')}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">About your company</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" placeholder="Describe your company" type="text" id="horizontal-email-input12" name="about"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label"> Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Company Address" id="horizontal-password-input" name="address"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Company Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="email@gmail.com"  id="horizontal-password-input" name="email"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Company Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="019XXXXXXXX" id="horizontal-password-input" name="phone"/>
                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Company Website <s>(https://)</s></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="www.website.com" id="horizontal-password-input" name="website"/>
                            </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Company Website URL Link (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.website.com/'" id="horizontal-password-input" name="website_link"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Facebook URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.facebook.com/'" id="horizontal-password-input" name="facebook"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Twitter URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.twitter.com/'" id="horizontal-password-input" name="twitter"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Instagram URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.instagram.com/'" id="horizontal-password-input" name="instagram"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Github URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="URL must be this formate 'https://www.github.com/'" id="horizontal-password-input" name="instagram"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Copyright issue</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="2023 All Rights Reserved | Niaz" id="horizontal-password-input" name="copyright"/>
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
