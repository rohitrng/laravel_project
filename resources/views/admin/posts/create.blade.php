@extends('layouts.admin')

@section('content')
    <h1>Create</h1>

    <div class="row">

        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cotegory_id','Category') !!}
            {!! Form::select('category_id',[''=>'option'] + $category,0,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','title') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body','body') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>

    </div>
    <div class="row">
        @include('inclueds.form-error')
    </div>
@stop