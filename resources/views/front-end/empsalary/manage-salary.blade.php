@extends('front-end.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <h3 class="text-center text-success" id="xyz">{{Session::get('message')}}</h3>
                    <a href="{{ route('pdf-salary') }}" class="btn btn-danger btn-xs" style="width: 50px; margin-left:90%;"><i class="fa fa-download"></i></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="showUser" class="table table-bordered mydatatable">
                                <thead>
                                <tr class="bg-success" style="color: #fff; text-align: center;">
                                    <th>SL No.</th>
                                    <th>Employee Name</th>
                                    <th>Months</th>
                                    <th>Salary</th>
                                    <th>Total Day</th>
                                    <th>Govt. Holy Day</th>
                                    <th>Week Holy Day</th>
                                    <th>Absent</th>
                                    <th>Over Time</th>
                                    <th>Allowed Work Day</th>
                                    <th>Working Day</th>
                                    <th>P.D Salary</th>
                                    <th>Transport Bill</th>
                                    <th>Allowance</th>
                                    <th>Total Salary</th>
                                    <th style="padding: 15px 40px 40px 30px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($employee_salaries as $empsalary)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $empsalary->employee_name }}</td>
                                        <td>{{ $empsalary->months }}</td>
                                        <td>{{ $empsalary->salary }}</td>
                                        <td>{{ $empsalary->tday }}</td>
                                        <td>{{ $empsalary->govholy }}</td>
                                        <td>{{ $empsalary->weekholy }}</td>
                                        <td>{{ $empsalary->absent }}</td>
                                        <td>{{ $empsalary->overtime }}</td>
                                        <td>{{ $empsalary->awday }}</td>
                                        <td>{{ $empsalary->wday }}</td>
                                        <td>{{ $empsalary->pdpot }}</td>
                                        <td>{{ $empsalary->transport_bill }}</td>
                                        <td>{{ $empsalary->allowance }}</td>
                                        <td>{{ $empsalary->total }}</td>
                                        <td>
                                            <a href="{{ route('edit-salary',['id'=>$empsalary->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete-salary',['id'=>$empsalary->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Salary Info?')"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('pdfgen-salary',['id'=>$empsalary->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                       {{-- <div style="margin-left: 45%;">
                            {{ $employee_salaries->links() }}
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection