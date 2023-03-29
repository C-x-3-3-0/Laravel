<head>
    <link rel="stylesheet" href="{{ asset('/resources/css/forms_application.css') }}">
</head>
@extends('layouts.app')
@section('title', 'Registration Event')
@section('content')


    <div class="container">
        <div class="box">
            <h1>{{$event->title }}</h1>
            <p>{{ $event->description }}</p>
            <p>{{ $event->date }}</p>
        </div>
    </div>

    <div class="title">
        <h1>Registration</h1>
    </div>
    <form method="POST" action="/applications/{{ $event->id }}">
        @csrf
        <div>
            <label for="answer">Are you going to attend this event?</label>
            <input name="answer" value="yes" id="answer" type="radio"> Yes
            <input name="answer" value="no" id="answer" type="radio"> No

        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

        </div>

        <div>
            <label for="lastname">Family name:</label>
            <input type="text" id="lastname" name="lastname" required>

        </div>

        <div>
            <label for="firstname">Name:</label>
            <input type="text" id="firstname" name="firstname" required>

        </div>
        <div>
            <input type="submit" value="Anmelden">
        </div>
    </form>
    <div class="link-container">
        <a href="/applications/{{ $event->id }}" class="applicate">Show Registration</a>
    </div>
@endsection
