@extends('admin.master')

@section('title')
    Footer Manage
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Footer Information</h4>
                        <p class="card-title-desc text-primary">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>About your company</th>
                                <th>Company Address</th>
                                <th>Company Email</th>
                                <th>Company Phone</th>
                                <th>Company Website</th>
                                <th>Company Website Link</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Github</th>
                                <th>CopyRight Issue</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($footers as $footer)
                                <tr class="{{$footer->status == 1 ? '' : 'bg-warning'}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$footer->about}}</td>
                                    <td>{{$footer->address}}</td>
                                    <td>{{$footer->email}}</td>
                                    <td>{{$footer->phone}}</td>
                                    <td>{{$footer->website}}</td>
                                    <td>{{$footer->website_link}}</td>
                                    <td>{{$footer->facebook}}</td>
                                    <td>{{$footer->twitter}}</td>
                                    <td>{{$footer->instagram}}</td>
                                    <td>{{$footer->github}}</td>
                                    <td>{{$footer->copyright}}</td>

                                    <td>{{$footer->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('dashboard.footer_detail', ['id' => $footer->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-info">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="{{route('dashboard.footer_edit', ['id' => $footer->id])}}" class="btn btn-outline-primary">
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

