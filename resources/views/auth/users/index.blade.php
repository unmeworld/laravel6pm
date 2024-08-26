

<body>
@extends('layouts.master')
@section('content')
 <main id="main" class="main">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-2">
                    <h4><i class="bi bi-people"></i>User List</h4>
                    <form action="{{route('users.index')}}">
                        <input type="search" name="search">
                        <button class="btn btn-primary">Search</button>
                    </form>
                    @include('layouts.message')
                </div>
               <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Create at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{route('update-user-status')}}" method="post">
                        @foreach ($usersData as $key=>$user)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->gender}}</td>
                            <td>
                                <input type="hidden" name="criteria" value="{{$user->id}}">
                                @if($user->role=='admin')
                                    <button name="admin" class="badge bg-primary">Admin</button>
                                @else
                                    <button name="user" class="badge bg-success">User</button>
                                @endif
                                </td>
                            <td>{{$user->image}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>
                               @if(auth()->user()->role=='admin')
                                <a href="{{route('delete-user', $user->id)}}"
                                onclick="return confirm('are you sure?')"    
                               class="btn btn-danger btn-sm" >Delete</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </form>
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
    
</div>

  </main>
@endsection
 
