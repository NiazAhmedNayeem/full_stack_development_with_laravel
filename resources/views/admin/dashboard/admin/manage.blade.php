@extends('admin.master')

@section('title')

@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin / manage</li>
        </ol>
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Admin list
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-sm table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('dashboard.admin_manage_delete', ['id' => $user->id])}}" class="btn btn-outline-danger" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
@endsection
