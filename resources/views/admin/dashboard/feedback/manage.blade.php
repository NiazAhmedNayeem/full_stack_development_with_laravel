@extends('admin.master')

@section('title')
    Feedback Manage
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feedbacks as $feedback)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$feedback->name}}</td>
                                <td>{{$feedback->email}}</td>
                                <td>{{$feedback->subject}}</td>
                                <td>{{$feedback->message}}</td>
                                <td>{{$feedback->created_at}}</td>
                                <td>
                                    <a href="{{route('feedback-detail', ['id' => $feedback->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('feedback-delete', ['id' => $feedback->id])}}" class="btn btn-outline-danger" >
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

