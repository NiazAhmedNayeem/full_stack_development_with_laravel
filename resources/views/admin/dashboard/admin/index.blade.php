@extends('admin.master')

@section('title')

@endsection

@section('body')
     <div class="container">
         <h1 class="mt-4">Create Admin Form</h1>
         <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
             <li class="breadcrumb-item active">Admin Module / Create</li>
         </ol>
          <div class="row justify-content-center">
              <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Admin</h3></div>
                      <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                      <div class="card-body">
                          <form action="{{route('dashboard.admin_create')}}" method="POST">
                              @csrf
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="inputName" name="name" type="text" required placeholder="Admin full name" />
                                  <label for="inputName">Admin Name</label>
                              </div>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="inputEmail" name="email" type="email" required placeholder="name@example.com" />
                                  <label for="inputEmail">Email address</label>
                              </div>
                              <div class="form-floating mb-3">
                                  <input class="form-control" id="inputPassword" name="password" type="password" required placeholder="Password" />
                                  <label for="inputPassword">Password</label>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                  <button class="btn btn-primary" type="submit">Create</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
           </div>
     </div>

@endsection
