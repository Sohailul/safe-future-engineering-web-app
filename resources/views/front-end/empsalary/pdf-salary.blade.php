<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDF INVOICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container{
            margin-top: 10px;
            width: 100%;
        }
        h4{
            margin-left: 20%;
            font-family: Roboto;
            font-size: 22px;
            margin-bottom: 40px;
        }
        th{
            font-family: sans-serif;
            font-size: 12px;
        }
        td{
            font-family: sans-serif;
            font-size: 10px;
        }

        .ceo{
            float: left;
            margin-top: 100px;
            /*margin-left: 20%;*/
            font-size: 15px;
        }
        .manager{
            float: left;
            margin-top: -1px;
            margin-left: 20px;
            font-size: 15px;
        }
        .employee{
            float: right;
            margin-top: -1px;
            margin-right: -10px;
            font-size: 15px;
        }
    </style>
</head>
<img src="{{ asset('/') }}/front-end/images/sfe.png" width="400px" height="90px">
<hr>
<div class="container">
    <h4><u>Salary Information</u></h4>
    <table border="1">
        <tr>
            <th>SL No.</th>
            <th>Employee Name</th>
            <th>Designation</th>
            <th>Month</th>
            <th>Salary</th>
            <th>Total Day</th>
            <th>Govt. Holy Day</th>
            <th>Week Holy Day</th>
            <th>Absent</th>
            <th>Over Time</th>
            <th>Allowed Work Day</th>
            <th>Working Day</th>
            <th>Per Day Salary</th>
            <th>Transport Bill</th>
            <th>Allowance</th>
            <th>Total Salary</th>
        </tr>
        @php($i=1)
        @foreach($employee_salaries as $empsalary)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $empsalary->employee_name }}</td>
                <td>{{ $empsalary->designation }}</td>
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
            </tr>
        @endforeach
    </table>
</div>
<h3 class="ceo">CEO Signature : ------------------</h3>
<h3 class="manager">Manager Signature : ------------------</h3>
<h3 class="employee">Employee Signature : ------------------</h3>
</body>
</html>