@extends('admin.master')

@section('title')
    Edit Contact
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Contact Update Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('dashboard.contact_update', ['id' => $contact->id])}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Contact Caption</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" placeholder="Describe contact" type="text" id="horizontal-email-input12" name="caption">{{$contact->caption}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"  value="{{$contact->title}}" placeholder="Feel Free to ask me" id="horizontal-password-input" name="title"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Title Detail</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"  value="{{$contact->title_detail}}" placeholder="Describe Title" id="horizontal-password-input" name="title_detail"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" value="{{$contact->email}}" placeholder="email@gmail.com"  id="horizontal-password-input" name="email"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="{{$contact->phone}}" placeholder="019XXXXXXXX" id="horizontal-password-input" name="phone"/>
                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Facebook URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$contact->facebook}}" placeholder="URL must be this formate 'https://www.facebook.com/'" id="horizontal-password-input" name="facebook"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Twitter URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$contact->twitter}}" placeholder="URL must be this formate 'https://www.twitter.com/'" id="horizontal-password-input" name="twitter"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Instagram URL (https://)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$contact->instagram}}" placeholder="URL must be this formate 'https://www.instagram.com/'" id="horizontal-password-input" name="instagram"/>
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

