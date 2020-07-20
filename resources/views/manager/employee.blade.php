@extends('layouts.index')

@section('content')
<h1 class="h3 mb-2 text-gray-800">PunchHistories</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Punch History</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Employee_name</th>
                      <th>Email</th>
                      <th>Pay_rate</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Employee_name</th>
                        <th>Email</th>
                        <th>Pay_rate</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                  </tfoot>
                  <tbody>

                      @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->pay_rate}}</td>
                        <td> <a href="{{ route('edituser_view', ['userid'=> $user->id]) }}" class="btn btn-info btn-circle">
                            <i class="fas fa-pen"></i>
                          </a> </td>

                        <td> <a href="{{ route('edituser_delete', ['userid'=> $user->id]) }}" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                          </a></td>
                        <tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
    </div>

</div>


@endsection
