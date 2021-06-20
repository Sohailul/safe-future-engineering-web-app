@extends('front-end.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="showUser">
                                <thead>
                                <tr class="bg-success" style="color: #fff; text-align: center;">
                                    <th>SL No.</th>
                                    <th>Joining Date</th>
                                    <th>Employee Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>DOB</th>
                                    <th>NID</th>
                                    <th style="padding: 15px 40px 40px 30px;">Action</th>
                                </tr>
                                </thead>

                                @php($i=1)
                                @foreach($employees as $employee)
                                    <tbody>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $employee->join_date }}</td>
                                        <td>{{ $employee->employee_name }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>{{ $employee->address }}</td>
                                        <td>{{ $employee->position }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>{{ $employee->dob }}</td>
                                        <td>{{ $employee->nid }}</td>
                                        <td>
                                            <a href="{{ route('edit-employee',['id'=>$employee->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete-employee',['id'=>$employee->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Employee Info?')"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('pdf-employee',['id'=>$employee->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>
                        </div>
                        {{--<div style="margin-left: 45%;">
                            {{ $employees->links() }}
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection