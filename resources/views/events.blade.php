<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
</head>

<body>
    <p>Events:</p>
    <ul>
        @foreach ($events as $event)
            <li><a href="/event/{{ $event->id }}">{{ $event->title }}</a> </li>
        @endforeach

    </ul>




</body>

</html>
