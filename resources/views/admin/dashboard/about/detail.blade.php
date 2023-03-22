@extends('admin.master')

@section('title')
    About Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">About Detail</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Name</th>
                            <td>{{$about->name}}</td>
                        </tr>
                        <tr>
                            <th>Date of birth</th>
                            <td>{{$about->dob}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$about->address}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$about->email}}</td>
                        </tr>
                        <tr>
                            <th>Zip code</th>
                            <td>{{$about->zip}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$about->phone}}</td>
                        </tr>
                        <tr>
                            <th>Total complete project</th>
                            <td>{{$about->project}}</td>
                        </tr>
                        <tr>
                            <th>CV link or URL</th>
                            <td>{{$about->url}}</td>
                        </tr>
                        <tr>
                            <th>Published Status</th>
                            <td>{{$about->status == 1 ? 'Published' : 'Not Available'}}</td>
                        </tr>
                        <tr>
                            <th>About</th>
                            <td>{{$about->about}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{asset($about->image)}}" alt="" height="200" width="220"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection




