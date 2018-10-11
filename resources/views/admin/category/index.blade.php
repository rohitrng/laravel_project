@extends('layouts.admin')
@section('content')

    @if(session('create_category'))
        <p class="alert alert-success">{{session('create_category')}}</p>
    @endif

    @if(session('update_category'))
        <p class="alert alert-success">{{session('update_category')}}</p>
    @endif

    @if(session('delete_category'))
        <p class="alert alert-danger">{{session('delete_category')}}</p>
    @endif
    <h1>Posts</h1>
    <table class="table table-hover">
        <tr class="label-info">
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>

        @foreach($category as $categorys)
            <tr>
                <td>{{$categorys->id}}</td>
                <td><a href="{{route('admin.category.edit',$categorys->id)}}">{{$categorys->name}}</a></td>
                <td>{{$categorys->created_at ? $categorys->created_at->diffForHumans() : 'No date faund'}}</td>
                <td>{{$categorys->updated_at ? $categorys->updated_at->diffForHumans() : 'No date found'}}</td>
            </tr>
        @endforeach

    </table>
@stop