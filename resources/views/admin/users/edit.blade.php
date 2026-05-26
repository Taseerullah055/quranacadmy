@extends('admin.layouts.app')
@section('title','Users')
@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Users</a></li>
            <li class="breadcrumb-item active">Edit User</a></li>
        </ol>
       
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit User
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" value="{{ $user->name }}" />
                                <label for="username">User Name</label>
                                @error('username')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ $user->email }}" />
                                <label for="email">Email</label>
                                @error('email')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>                
                    <div class="row mb-3">                       
                        <div class="col-md-6">
                            <label for="user_role"> User Role</label>
                            <div class="form-floating mb-3 mb-md-0">                                                                
                                <select class="form-select @error('user_role') is-invalid @enderror" name="user_role">
                                    <option >User Role</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : ''}}>User</option>                                    
                                </select>     
                                @error('user_role')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror                           
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 mb-0">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection()