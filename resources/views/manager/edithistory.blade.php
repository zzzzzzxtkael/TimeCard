@extends('layouts.index')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Punch History</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Punch History</h6>
            </div>
            <div class="card-body">
                <div>
                    <form class="user" method="POST" action = "{{ route('editpunch_update' )}}">
                        @csrf
                        <div class="form-group row">
                          {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="id" class="form-control form-control-user" id="exampleid" placeholder="id" value = "{{ $record->id }} disable">
                          </div> --}}
                        </div>
                        <div class="form-group">
                          <label >Employee id</label>
                          <input type="text" name="employee_id" class="form-control form-control-user" id="exampleid" placeholder="Employee id" value = "{{ $record->employee_id }}" disabled>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label >Punch in time</label>
                            <input type="datetime" name="punch_in_time" class="form-control form-control-user" id="examplepunchintime" placeholder="Punch_in" value = "{{ $record->punch_in_time }}">
                          </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label >Punch out time</label>
                              <input type="datetime" name="punch_out_time" class="form-control form-control-user" id="examplepunchouttime" placeholder="Punch_out" value = "{{ $record->punch_out_time }}">
                            </div>
                          </div>

                        <input type = "hidden" id ="id" name = "id" value = "{{ $record->id }}">

                        <input id = "submit" type = "submit" class="btn btn-primary btn-user btn-block" value = "Submit">
                        <hr>

                      </form>








                </div>
            </div>
    </div>

</div>
@endsection
