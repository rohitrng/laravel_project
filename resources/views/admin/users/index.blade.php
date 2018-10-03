@extends('layouts.admin')

@section('content')

    @if(Session::has('delete_user'))
        <p class="alert alert-danger">{{session('delete_user')}}</p>
    @endif

    @if(Session::has('update_user'))
        <p class="alert alert-success">{{session('update_user')}}</p>
    @endif
    @if(Session::has('create_user'))
        <p class="alert alert-success">{{session('create_user')}}</p>
    @endif
    <h1>Users</h1>

        <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">create at</th>
                    <th scope="col">update at</th>
                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/50x50'}}"/></td>
                    <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'Role not define'}}</td>
                    <td>{{$user->is_action == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
    @stop