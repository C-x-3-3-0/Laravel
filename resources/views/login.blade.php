<head>
    <link rel="stylesheet" href="{{ asset('/resources/css/forms_create.css') }}">
</head>
@extends('layouts.app')
@section('title', 'Login')
@section('content')


<div class="title">
    <h1>Login</h1>
</div>


<form method="POST" action="/login">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Anmelden">
    </div>
    <br>
    <br>
    @if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
    @endif

</form>



@endsection
