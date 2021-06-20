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
    <h4><u>Client Information</u></h4>
    <table border="1">
        <tr>
            <th>Client Name :</th>
            <td>{{ $client->client_name }}</td>
        </tr>
        <tr>
            <th>Phone :</th>
            <td>{{ $client->phone }}</td>
        </tr>
        <tr>
            <th>Company Name :</th>
            <td>{{ $client->company_name }}</td>
        </tr>
        <tr>
            <th>Address :</th>
            <td>{{ $client->address }}</td>
        </tr>
        <tr>
            <th>Project Name :</th>
            <td>{{ $client->project_name }}</td>
        </tr>
        <tr>
            <th>Deadline :</th>
            <td>{{ $client->deadline }}</td>
        </tr>
        <tr>
            <th>Project Budget :</th>
            <td>{{ $client->project_budget }}</td>
        </tr>
    </table>
</div>
<h5>Signature : ------------------</h5>
</body>
</html>