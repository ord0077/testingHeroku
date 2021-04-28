@extends('layouts.master')

@section('title')
Welcome to Dashboard
@endsection

@section('content')


<div class="row">
          
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  @if(Session::has('userAdd'))
                  <div class="alert alert-success">
                      {{Session::get('userAdd')}}
                  </div>
                  @endif
               
                <h4 class="card-title"> Employees List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @if(count($user)> 0)
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                      <th> ID</th>
                      <th> NAME</th>
                      <th>EMAIL </th>
                      <th>EDIT </th>
                      <th>DELETE </th>
                     </tr>
                     </thead>
                    <tbody>
                    @foreach($user as $a)
                      <tr>
                        <td> {{$a->id}} </td>
                        <td> {{$a ->name}} </td>
                        <td> {{$a ->email}} </td>
                        <td><a href="/Users/{{$a->id}}/edit" class="btn btn-warning">Edit</a></td>
                        <td><form action="\Users/{{$a->id}}"  method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure? ')" class="btn btn-danger">
                        </form></td>

                      </tr>  
                      @endforeach
                    </tbody>
                  </table>
        
                
                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
  {{$user->links()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
             
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection

