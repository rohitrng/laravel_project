@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <div class="row">

        <div class="col-sm-6">

            <img src="{{$post->photo->file}}" alt="" class="img-responsive" />

        </div>

        <div class="col-sm-6">
            {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','title') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cotegory_id','Category') !!}
                {!! Form::select('category_id', $category,0,['class'=>'form-control']) !!}
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
                {!! Form::submit('Create Post',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'Delete','action'=>['AdminPostsController@destroy',$post->id]]) !!}
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