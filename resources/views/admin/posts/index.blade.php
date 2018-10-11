@extends('layouts.admin')

@section('content')

    @if(Session::has('create_post'))
        <p class="alert alert-success">{{session('create_post')}}</p>
    @endif

    @if(Session::has('update_post'))
        <p class="alert alert-success">{{session('update_post')}}</p>
    @endif

    @if(Session::has('delete_post'))
        <p class="alert alert-danger">{{session('delete_post')}}</p>
    @endif
    <h1>Posts</h1>
    <table class="table table-hover">
        <tr class="label-info">
            <th>Id</th>
            <th>Photo</th>
            <th>Use</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>

    @if($posts)
        @foreach($posts as $post)
        <tr class="bg-info">
            <td>{{$post->id}}</td>
            <td><img src="{{$post->photo ? $post->photo->file : "https://via.placeholder.com/50x50"}}" alt="" height="50"></td>
            <td><a href="{{Route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
            <td>{{$post->category ? $post->category->name : 'no'}}</td>
            <td>{{$post->title}}</td>
            <td>{{str_limit($post->body,20)}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
        @endforeach
        </tr>
    @endif
    </table>
@stop