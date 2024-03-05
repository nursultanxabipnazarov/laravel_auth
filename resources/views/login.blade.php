@extends('layout')

@section('title','LOGIN')

@section('content')

<div class="container text-center">
    <form action=" " method="POST" >
        @csrf
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control"  name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>


@endsection
