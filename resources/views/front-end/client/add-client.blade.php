@extends('front-end.master')

@section('content')
    <div class="container">
        <div class="col-md-3">

        </div>
        <div class="card col-md-6">
            <div class="card-header bg-success">
                <h4 style="color: #fff;">ADD EMPLOYEE SALARY</h4>
            </div>
            <h3 class="text-center text-success" id="xyz">{{Session::get('message')}}</h3>
            <div class="card-body">
                <form action="{{ route('new-client') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Client Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="client_name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="phone"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Company Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="company_name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Project Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="project_name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Deadline</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="deadline"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Project Budget</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="project_budget"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-4">Client Photo</label>
                        <div class="col-sm-8">
                            <input type="file" name="client_image" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Add Client</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection