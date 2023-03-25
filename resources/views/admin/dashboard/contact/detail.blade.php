@extends('admin.master')

@section('title')
    Contact Detail
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Detail</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Contact Caption</th>
                                <td>{{$contact->caption}}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$contact->title}}</td>
                            </tr>
                            <tr>
                                <th>Title Detail</th>
                                <td>{{$contact->title_detail}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            <tr>
                                <th>Facebook URL</th>
                                <td>{{$contact->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Twitter URL</th>
                                <td>{{$contact->twitter}}</td>
                            </tr>
                            <tr>
                                <th>Instagram URL</th>
                                <td>{{$contact->instagram}}</td>
                            </tr>
                            <tr>
                                <th>Published Status</th>
                                <td>{{$contact->status == 1 ? 'Published' : 'Not Available'}}</td>
                            </tr>
                        </table>
                        <div>
                            <a href="{{route('dashboard.contact_status', ['id' => $contact->id])}}" class="btn btn-outline-info">
                                <i class="fa fa-arrow-up"></i>
                            </a>
                            <a href="{{route('dashboard.contact_edit', ['id' => $contact->id])}}" class="btn btn-outline-primary">
                                <i class="fa fa-book-dead"></i>
                            </a>
                            <a href="{{route('dashboard.contact_delete', ['id' => $contact->id])}}" class="btn btn-outline-danger" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




