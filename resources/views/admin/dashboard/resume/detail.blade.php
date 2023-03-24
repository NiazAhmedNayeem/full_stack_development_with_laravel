@extends('admin.master')

@section('title')
    Resume Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Resume Detail</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Passing Year or Present</th>
                            <td>{{$resume->passyr}}</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td>{{$resume->department}}</td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td>{{$resume->major}}</td>
                        </tr>
                        <tr>
                            <th>Institute</th>
                            <td>{{$resume->institute}}</td>
                        </tr>
                        <tr>
                            <th>Published Status</th>
                            <td>{{$resume->status == 1 ? 'Published' : 'Not Available'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection




