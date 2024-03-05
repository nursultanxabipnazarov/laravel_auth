@extends('layout')

@section('title','REGISTER')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container text-center">
    <form action=" " method="POST" >
        @csrf
        <div class="form-group">
            <label for="inputEmail">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control"  name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputPassword"> Conf Password</label>
            <input type="password" class="form-control" name=" password_confirmation"  placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection