@extends('admin.master')

@section('title')
    Home Detail
@endsection

@section('body')
    <div class="container">
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

                        <div>

                            <a href="{{route('dashboard.home_status', ['id' => $home->id])}}" class="btn btn-outline-info">
                                <i class="fa fa-arrow-up"></i>
                            </a>
                            <a href="{{route('dashboard.home_edit', ['id' => $home->id])}}" class="btn btn-outline-primary">
                                <i class="fa fa-book-dead"></i>
                            </a>
                            <a href="{{route('dashboard.home_delete', ['id' => $home->id])}}" class="btn btn-outline-danger" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection




