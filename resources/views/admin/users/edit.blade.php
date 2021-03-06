@extends('layouts.admin')
@section('content')

    <h1>Edite Users</h1>
        <div class="row">
        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/350x350'}}" class="img-circle img-responsive"/>
        </div>

        <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersContoller@update',$user->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', null ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','File') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',$roles, null ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_action','Status') !!}
            {!! Form::select('is_action',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Users',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close () !!}

            {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersContoller@destroy',$user->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-6']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @include('inclueds.form-error')
    </div>
@stop