@extends('layouts.index')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Users</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
            </div>
            <div class="card-body">
                <div>
                    <form class="user" method="POST" action = "{{ route('edituser_update' )}}">
                        @csrf
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" value = "{{ $user->name }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" value = "{{ $user->email }}">
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="pay_rate" class="form-control form-control-user" id="exampleInputPayrate" placeholder="Payrate" value = "{{ $user->pay_rate }}">

                          </div>
                        </div>
                        <input type = "hidden" id ="id" name = "id" value = "{{ $user->id }}">

                        <input id = "submit" type = "submit" class="btn btn-primary btn-user btn-block" value = "Submit">
                        <hr>

                      </form>








                </div>
            </div>
    </div>

</div>
@endsection
