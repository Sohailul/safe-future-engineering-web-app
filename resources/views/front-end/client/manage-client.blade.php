@extends('front-end.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="text-center text-success" id="xyz">{{Session::get('message')}}</h3>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">

                                <tr class="bg-success" style="color:#fff;">
                                    <th>SL No.</th>
                                    <th>Client Name</th>
                                    <th>Phone</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Project Name</th>
                                    <th>Deadline</th>
                                    <th>Project Budget</th>
                                    <th>Photo</th>
                                    <th style="padding: 15px 40px 40px 30px;">Action</th>
                                </tr>

                                @php($i=1)
                                @foreach($clients as $client)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $client->client_name }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>{{ $client->company_name }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->project_name }}</td>
                                        <td>{{ $client->deadline }}</td>
                                        <td>{{ $client->project_budget }}</td>
                                        <td>
                                            <img src="{{ asset($client->client_image) }}" alt="" width="150px" height="80px">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit-client',['id'=>$client->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete-client',['id'=>$client->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Client Info?')"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('pdf-client',['id'=>$client->id]) }}" class="btn btn-secondary btn-xs"><i class="fa fa-file-pdf-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                        <div style="margin-left: 45%;">
                            {{ $clients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection