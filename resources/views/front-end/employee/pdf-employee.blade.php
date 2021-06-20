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
            font-size: 20px;
            padding-left: 5px;
        }
        td{
            font-family: sans-serif;
            font-size: 18px;
            padding: 20px;
        }

        h5{
            margin-top: 100px;
            margin-left: 20%;
            font-size: 25px;
        }
    </style>
</head>
<img src="{{ asset('/') }}/front-end/images/sfe.png" width="400px" height="90px">
<hr>
<div class="container">
    <h4><u>Employee Information</u></h4>
    <table border="1">
        <tr>
            <th>Joining Date :</th>
            <td>{{ $employee->join_date }}</td>
        </tr>
        <tr>
            <th>Employee Name :</th>
            <td>{{ $employee->employee_name }}</td>
        </tr>
        <tr>
            <th>Phone :</th>
            <td>{{ $employee->phone }}</td>
        </tr>
        <tr>
            <th>Address :</th>
            <td>{{ $employee->address }}</td>
        </tr>
        <tr>
            <th>Position :</th>
            <td>{{ $employee->position }}</td>
        </tr>
        <tr>
            <th>Salary :</th>
            <td>{{ $employee->salary }}</td>
        </tr>
        <tr>
            <th>DOB :</th>
            <td>{{ $employee->dob }}</td>
        </tr>
    </table>
</div>
<h5>Signature : ------------------</h5>
</body>
</html>