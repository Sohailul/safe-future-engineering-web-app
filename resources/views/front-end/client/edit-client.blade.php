@extends('front-end.master')

@section('content')
    <div class="container">
        <div class="card" style="width: 35rem; margin-left: 200px;">
            <div class="card-header bg-success">
                <h4 style="color: #fff;" id="xyz">ADD EMPLOYEE SALARY</h4>
            </div>
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="card-body">
                <form action="{{ route('update-client') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Client Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" name="client_id" value="{{ $client->id }}"/>
                            <input type="text" class="form-control" name="client_name" value="{{ $client->client_name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="phone" value="{{ $client->phone }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Company Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="company_name" value="{{ $client->company_name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="address">{{ $client->address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Project Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="project_name" value="{{ $client->project_name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Deadline</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="deadline" value="{{ $client->deadline }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Project Budget</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="project_budget" value="{{ $client->project_budget }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-4">Client Photo</label>
                        <div class="col-sm-8">
                            <input type="file" name="client_image" accept="image/*" value="{{ $client->client_image }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Client</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection