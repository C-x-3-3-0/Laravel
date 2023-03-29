<head>
    <link rel="stylesheet" href="{{ asset('/resources/css/forms_create.css') }}">
</head>
@extends('layouts.app')
@section('title', 'Create event')
@section('content')
<div class="title">
    <h1>Erstellen</h1>
</div>
<form method="POST" action="/form_create">
@csrf
   <div>
        <label for="date">Date:</label>
        <input type="text" id="date" name="date" required>
    </div>

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea type="text" id="description" name="description" required></textarea>
    </div>

    <div>
        <input type="submit" value="Erstellen">
    </div>
</form>

@endsection
