@extends('admin.master')

@section('title')
    Feedback Detail
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Feedback Detail</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Time</th>
                                <td>{{$feedback->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$feedback->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$feedback->email}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$feedback->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$feedback->message}}</td>
                            </tr>
                        </table>
                        <div>
                            <a href="{{route('feedback-delete', ['id' => $feedback->id])}}" class="btn btn-outline-danger" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





