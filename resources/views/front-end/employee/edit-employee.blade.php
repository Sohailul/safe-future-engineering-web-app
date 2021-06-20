@extends('front-end.master')
@section('content')
    <div class="container ml-5">
        <div class="card" style="width: 35rem; margin-left: 200px;">
            <div class="card-header bg-success">
                <h4 style="color: #fff;">ADD EMPLOYEE</h4>
            </div>
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="card-body">
                <form action="{{ route('update-employee') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Joining Date :</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" name="employee_id" value="{{ $employee->id }}">
                            <input type="date" class="form-control" name="join_date" value="{{ date('Y-m-d') }}" required readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Name :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="employee_name" value="{{ $employee->employee_name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Phone :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Address :</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="address" required>{{ $employee->address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Position :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="position" value="{{ $employee->position }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Salary :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="salary" value="{{ $employee->salary }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">DOB :</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="dob" value="{{ $employee->dob }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">NID :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="nid" value="{{ $employee->nid }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Employee</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection