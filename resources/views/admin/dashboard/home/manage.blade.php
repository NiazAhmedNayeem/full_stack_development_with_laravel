@extends('admin.master')

@section('title')
    Home Manage
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Information</h4>
                        <div class="text-right">
                            <a href="{{route('dashboard.home')}}" class="btn btn-primary w-md float-right"> + Add Home</a>
                        </div>
                        <p class="card-title-desc text-primary">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Sub Title 1</th>
                                <th>Sub Title 2</th>
                                <th>Image</th>
                                <th>Music</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homes as $home)
                                <tr class="{{$home->status == 1 ? '' : 'bg-warning'}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$home->name}}</td>
                                    <td>{{$home->title1}}</td>
                                    <td>{{$home->title2}}</td>
                                    <td><img src="{{asset($home->image)}}" alt="{{$home->name}}" height="50" width="70"/></td>
                                    <td>
                                        <audio controls>
                                            <source src="{{asset($home->audio)}}" type="audio/mp3">
                                        </audio>
                                    </td>
                                    <td>{{$home->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('dashboard.home_detail', ['id' => $home->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{route('dashboard.home_status', ['id' => $home->id])}}" class="btn btn-outline-info">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="{{route('dashboard.home_edit', ['id' => $home->id])}}" class="btn btn-outline-primary">
                                            <i class="fa fa-book-dead"></i>
                                        </a>
                                        <a href="{{route('dashboard.home_delete', ['id' => $home->id])}}" class="btn btn-outline-danger" >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection
