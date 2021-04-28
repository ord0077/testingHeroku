@extends('layouts.master')

@section('title')
Edit User
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit User</h5>
              </div>
              <div class="card-body">
               <form action="/Users/{{$user->id}}" method="POST">
@csrf
@method("PATCH")

                  <div class="row">
                   
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"class="form-control @error('name') is-invalid @enderror" placeholder="Name"  value="{{$user->name}}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror()
                    </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{$user->email}}">
                        @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror() 
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" 
                        
                        
                        value="{{$user->password}}">
                        @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror() 
                    </div>
                    </div>
                    <!-- <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Confrim Password</label>
                        <input type="Password" class="form-control" placeholder="Confirm Password" value="">
                      </div>
                    </div> -->
                  </div>
                  
                  
                      <div class="form-group">
                        
                        <input type="submit" class="btn btn-primary" placeholder="Name" value="Update User">
                        <input type="submit" class="btn btn-danger" placeholder="Name" value="Cancel">
                      </div>

                      
                </form>
              </div>
            </div>
          </div>
</div>
@endsection


@section('scripts')

@endsection

