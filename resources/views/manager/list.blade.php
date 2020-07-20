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
                      <th>Punch_in</th>
                      <th>Punch_out</th>
                      <th>Updated_at</th>
                      <th>Created_at</th>
                      <th>Salary</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Employee_name</th>
                      <th>Punch_in</th>
                      <th>Punch_out</th>
                      <th>Updated_at</th>
                      <th>Created_at</th>
                      <th>Salary</th>
                      <th>Edit</th>
                      <th>Delete</th>

                    </tr>
                  </tfoot>
                  <tbody>

                      @foreach ($records as $record)
                      <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->user->name }}</td>
                        <td>{{ $record->punch_in_time }}</td>
                        <td>{{ $record->punch_out_time }}</td>
                        <td>{{ $record->updated_at }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->salary }}</td>
                        <td> <a href="{{ route('editpunch_view', ['punchid'=> $record->id]) }}" class="btn btn-info btn-circle">
                            <i class="fas fa-pen"></i>
                          </a> </td>

                        <td> <a href="{{ route('editpunch_delete', ['punchid'=> $record->id]) }}" class="btn btn-danger btn-circle">
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
