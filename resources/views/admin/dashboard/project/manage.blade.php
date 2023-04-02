@extends('admin.master')

@section('title')
    Manage Project
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
                            <tr class="text-center">
                                <th>SL NO</th>
                                <th>Project Name</th>
                                <th>Language 1</th>
                                <th>Language 2</th>
                                <th>Language 3</th>
                                <th>Language 4</th>
                                <th>Language 5</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr class="{{$project->status == 1 ? '' : 'bg-warning'}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->language1}}</td>
                                    <td>{{$project->language2}}</td>
                                    <td>{{$project->language3}}</td>
                                    <td>{{$project->language4}}</td>
                                    <td>{{$project->language5}}</td>
                                    <td><img src="{{asset($project->image)}}" alt="{{$project->name}}" height="50" width="70"/></td>
                                    <td>{{$project->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-success">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-info">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-primary">
                                            <i class="fa fa-book-dead"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger" >
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

