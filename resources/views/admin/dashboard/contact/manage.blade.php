@extends('admin.master')

@section('title')
    Contact Manage
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Contact Information</h4>
                        <p class="card-title-desc text-primary">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Contact Caption</th>
                                <th>Title</th>
                                <th>Title Detail</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr class="{{$contact->status == 1 ? '' : 'bg-warning'}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->caption}}</td>
                                    <td>{{$contact->title}}</td>
                                    <td>{{$contact->title_detail}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->facebook}}</td>
                                    <td>{{$contact->twitter}}</td>
                                    <td>{{$contact->instagram}}</td>

                                    <td>{{$contact->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('dashboard.contact_detail', ['id' => $contact->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{route('dashboard.contact_status', ['id' => $contact->id])}}" class="btn btn-outline-info">
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
