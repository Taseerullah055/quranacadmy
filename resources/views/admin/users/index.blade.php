@extends('admin.layouts.app')
@section('title','Users')
@section('content')
<style>
    #add-button{
        position: absolute;
        top: 70px;
        right: 30px;
    }
</style>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>

        <a class="btn btn-success" id="add-button" href="{{ route('admin.users.create')}}" >Add User</a>

        @include('admin.includes.messages')
       
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Users
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>                            
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($users as $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>                                
                                <td>
                                    <a href="#" class="btn btn-success">View</a>
                                    <a href="{{ route("admin.users.edit",['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.users.delete',['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection()