<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/resources/css/applications.css') }}">

    <title>Applications</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Registration')
    @section('content')
    <br>
    <p>Attending persons:</p>
    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach
    </ul>
    <div>
        <small>Number of persons not coming: {{$declinedApplications}}</small>
        @endsection
    </div>

</body>
</html>
