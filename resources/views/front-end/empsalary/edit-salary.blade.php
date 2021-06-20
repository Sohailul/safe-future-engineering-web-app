@extends('front-end.master')

@section('content')
    <div class="container">
        <div class="card" style="width: 35rem; margin-left: 200px;">
            <div class="card-header bg-success">
                <h4 style="color: #fff;">Update EMPLOYEE SALARY</h4>
            </div>
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="card-body">
                <form action="{{ route('update-salary') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Employee Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="empsalary_id" name="empsalary_id" value="{{ $empsalary->id }}"/>
                            <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{ $empsalary->employee_name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Designation</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="designation" name="designation" value="{{ $empsalary->designation }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Months</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="months" value="{{ $empsalary->months }}">
                                <option>--Select Months--</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Salary</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="salary" name="salary" value="{{ $empsalary->salary }}" onkeyup="totalSalary(this)" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Total Day</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tday" name="tday" value="{{ $empsalary->tday }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Govt. Holy Day</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="govholy" name="govholy" value="{{ $empsalary->govholy }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Week Holy Day</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="weekholy" name="weekholy" value="{{ $empsalary->weekholy }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Absent</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="absent" name="absent" value="{{ $empsalary->absent }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Over Time</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="overtime" name="overtime" value="{{ $empsalary->overtime }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Allowed Work Day</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="awday" name="awday" value="{{ $empsalary->awday }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Working Day</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="wday" name="wday" value="{{ $empsalary->wday }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Per Day Pay Of Tk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pdpot" name="pdpot" value="{{ $empsalary->pdpot }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Transport Bill</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="transport_bill" name="transport_bill" value="{{ $empsalary->transport_bill }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Allowance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="allowance" name="allowance" value="{{ $empsalary->allowance }}" onkeyup="totalSalary(this)"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Total Pay Of Tk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="total" name="total" value="{{ $empsalary->total }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Employee Salary</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection