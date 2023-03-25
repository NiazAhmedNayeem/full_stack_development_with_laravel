@extends('admin.master')

@section('title')
    Footer Detail
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Footer Detail</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>About your company</th>
                                <td>{{$footer->about}}</td>
                            </tr>
                            <tr>
                                <th>Company Address</th>
                                <td>{{$footer->address}}</td>
                            </tr>
                            <tr>
                                <th>Company Email</th>
                                <td>{{$footer->email}}</td>
                            </tr>
                            <tr>
                                <th>Company Phone</th>
                                <td>{{$footer->phone}}</td>
                            </tr>
                            <tr>
                                <th>Company Website</th>
                                <td>{{$footer->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Company Website Link</th>
                                <td>{{$footer->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Facebook URL</th>
                                <td>{{$footer->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Twitter URL</th>
                                <td>{{$footer->twitter}}</td>
                            </tr>
                            <tr>
                                <th>Instagram URL</th>
                                <td>{{$footer->instagram}}</td>
                            </tr>
                            <tr>
                                <th>Github URL</th>
                                <td>{{$footer->github}}</td>
                            </tr>
                            <tr>
                                <th>CopyRight Issue</th>
                                <td>{{$footer->copyright}}</td>
                            </tr>
                            <tr>
                                <th>Published Status</th>
                                <td>{{$footer->status == 1 ? 'Published' : 'Not Available'}}</td>
                            </tr>
                        </table>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




