<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDF INVOICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container{
            margin-left: 130px;
            margin-top: 10px;
        }
        h4{
            margin-left: 20%;
            font-family: Roboto;
            font-size: 22px;
            margin-bottom: 40px;
        }
        th{
            font-family: sans-serif;
            font-size: 18px;
            padding-left: 5px;
        }
        td{
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 12px;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-right: 20px;
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
    <h4><u>Employee Salary Information</u></h4>
    <table border="1">
        <tr>
            <th>Employee Name :</th>
            <td>{{ $empsalary->employee_name }}</td>
        </tr>
        <tr>
            <th>Designation :</th>
            <td>{{ $empsalary->designation }}</td>
        </tr>
        <tr>
            <th>Month :</th>
            <td>{{ $empsalary->months }}</td>
        </tr>
        <tr>
            <th>Salary :</th>
            <td>{{ $empsalary->salary }}</td>
        </tr>
        <tr>
            <th>Total Day :</th>
            <td>{{ $empsalary->tday }}</td>
        </tr>
        <tr>
            <th>Govt. Holy Day :</th>
            <td>{{ $empsalary->govholy }}</td>
        </tr>
        <tr>
            <th>Week Holy Day :</th>
            <td>{{ $empsalary->weekholy }}</td>
        </tr>
        <tr>
            <th>Absent :</th>
            <td>{{ $empsalary->absent }}</td>
        </tr>
        <tr>
            <th>Overtime :</th>
            <td>{{ $empsalary->overtime }}</td>
        </tr>
        <tr>
            <th>Allowed Working Day :</th>
            <td>{{ $empsalary->awday }}</td>
        </tr>
        <tr>
            <th>Per Day Taka :</th>
            <td>{{ $empsalary->pdpot }}</td>
        </tr>
        <tr>
            <th>Transport Bill :</th>
            <td>{{ $empsalary->transport_bill }}</td>
        </tr>
        <tr>
            <th>Allowance :</th>
            <td>{{ $empsalary->allowance }}</td>
        </tr>
        <tr>
            <th>Total Taka :</th>
            <td>{{ $empsalary->total }}</td>
        </tr>
    </table>
</div>
    <h3 class="ceo">CEO Signature : ------------------</h3>
    <h3 class="manager">Manager Signature : ------------------</h3>
    <h3 class="employee">Employee Signature : ------------------</h3>
</body>
</html>