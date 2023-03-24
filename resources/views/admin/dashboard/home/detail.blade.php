@extends('admin.master')

@section('title')
    Home Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Home Detail</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Name</th>
                            <td>{{$home->name}}</td>
                        </tr>
                        <tr>
                            <th>Sub Title 1</th>
                            <td>{{$home->title1}}</td>
                        </tr>
                        <tr>
                            <th>Sub Title 2</th>
                            <td>{{$home->title2}}</td>
                        </tr>
                        <tr>
                            <th>Music</th>
                            <td>
                                <audio controls>
                                    <source src="{{asset($home->audio)}}" type="audio/mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <th>Published Status</th>
                            <td>{{$home->status == 1 ? 'Published' : 'Not Available'}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{asset($home->image)}}" alt="" height="200" width="220"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection




