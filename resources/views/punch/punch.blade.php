@extends('layouts.index')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <center>

              @if (sizeof($records) > 0 && !$records[0]->punch_out_time)
                <a href="{{ route('punch_insert', ['punch_id'=> $records[0]->id]) }}" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                  </span>
                  <span class="text">Punch Out</span>
                </a>
              @else
              <a href="{{ route('punch_insert', ['punch_id'=> -1]) }}" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-check"></i>
              </span>
              <span class="text">Punch in</span>
            </a>
              @endif

          </center>

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
                      <th>Employee_id</th>
                      <th>Punch_in</th>
                      <th>Punch_out</th>
                      <th>Updated_at</th>
                      <th>Created_at</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Employee_id</th>
                      <th>Punch_in</th>
                      <th>Punch_out</th>
                      <th>Updated_at</th>
                      <th>Created_at</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>

                      @foreach ($records as $record)
                      <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->employee_id }}</td>
                        <td>{{ $record->punch_in_time }}</td>
                        <td>{{ $record->punch_out_time }}</td>
                        <td>{{ $record->updated_at }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->salary }}</td>
                        <tr>
                      @endforeach



                  </tbody>
                </table>
              </div>
            </div>
    </div>

</div>
@endsection
