@extends('layouts.admin')

@section('content')
    <h1>Edit Category</h1>

    <div class="row">

        <div class="col-sm-12">
            {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','name') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit Post',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'Delete','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    <div class="row">
        @include('inclueds.form-error')
    </div>
@stop