@extends('employees-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update employee</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', ['id' => $employee->id]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         <div class="form-group{{ $errors->has('employee_reg_id') ? ' has-error' : '' }}">
                            <label for="employee_reg_id" class="col-md-4 control-label">Employee Id</label>

                            <div class="col-md-6">
                                <input id="employee_reg_id" type="text" class="form-control" name="employee_reg_id" value="{{ $employee->employee_reg_id }}" autofocus>

                                @if ($errors->has('employee_reg_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employee_reg_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $employee->name }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Designation</label>
                            <div class="col-md-6">
                                <select class="form-control" name="designation_id">
                                    @foreach ($designations as $designation)
                                        <option {{$employee->designation_id == $designation->id ? 'selected' : ''}} value="{{$designation->id}}">{{$designation->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department_id">
                                    @foreach ($departments as $department)
                                        <option {{$employee->department_id == $department->id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Team</label>
                            <div class="col-md-6">
                                <select class="form-control" name="team_id">
                                    @foreach ($teams as $team)
                                        <option {{$employee->team_id == $team->id ? 'selected' : ''}} value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Birthdate</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $employee->birthdate }}" name="birthdate" class="form-control pull-right" id="birthDate">
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Date of Joining</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $employee->date_hired }}" name="date_hired" class="form-control pull-right" id="hiredDate">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <img src="../../{{ $employee->picture }}" width="50px" height="50px"/>
                                <input type="file" id="picture" name="picture" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
