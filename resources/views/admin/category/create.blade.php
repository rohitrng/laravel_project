@extends('layouts.admin')

@section('content')
    <h1>Create Category</h1>

    <div class="row">

        <div class="col-sm-10">
            {!! Form::open(['method'=>'POST','action'=>['AdminCategoriesController@store'],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','name') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @include('inclueds.form-error')
    </div>
@stop