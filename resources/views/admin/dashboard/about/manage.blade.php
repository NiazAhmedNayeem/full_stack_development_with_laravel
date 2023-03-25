@extends('admin.master')

@section('title')
    Manage About
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Information</h4>
                        <p class="card-title-desc text-primary">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Zip</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr class="{{$about->status == 1 ? '' : 'bg-warning'}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$about->name}}</td>
                                    <td>{{$about->dob}}</td>
                                    <td>{{$about->address}}</td>
                                    <td>{{$about->email}}</td>
                                    <td>{{$about->zip}}</td>
                                    <td>{{$about->phone}}</td>
                                    <td><img src="{{asset($about->image)}}" alt="{{$about->name}}" height="50" width="70"/></td>
                                    <td>{{$about->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('dashboard.about_detail', ['id' => $about->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{route('dashboard.about-update-status', ['id' => $about->id])}}" class="btn btn-outline-info">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="{{route('dashboard.about_edit', ['id' => $about->id])}}" class="btn btn-outline-primary">
                                            <i class="fa fa-book-dead"></i>
                                        </a>
                                        <a href="{{route('dashboard.about_delete', ['id' => $about->id])}}" class="btn btn-outline-danger" >
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
