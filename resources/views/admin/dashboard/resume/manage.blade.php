@extends('admin.master')

@section('title')
    Manage Resume
@endsection

@section('body')
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
                            <th>Resume Description</th>
                            <th>Passing Year or Present</th>
                            <th>Department</th>
                            <th>Major</th>
                            <th>Institute</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($resumes as $resume)
                            <tr class="{{$resume->status == 1 ? '' : 'bg-warning'}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$resume->res}}</td>
                                <td>{{$resume->passyr}}</td>
                                <td>{{$resume->department}}</td>
                                <td>{{$resume->major}}</td>
                                <td>{{$resume->institute}}</td>
                                <td>{{$resume->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('dashboard.resume_detail', ['id' => $resume->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('dashboard.resume_status', ['id' => $resume->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                    <a href="{{route('dashboard.resume_edit', ['id' => $resume->id])}}" class="btn btn-outline-primary">
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
@endsection
