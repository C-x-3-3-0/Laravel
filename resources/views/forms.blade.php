<!DOCTYPE html>
<html>

<head>
    <title>MELDEN SIE SICH AN</title>
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
    <form method="POST" action="">
        @csrf
        <div>
            <label for="answer">Möchten sie sich anmelden?</label>
            <input name="answer" value="yes" id="answer" type="radio"> Ja
            <input name="answer" value="No" id="answer" type="radio">Nein
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="lastname">Name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>

        <div>
            <label for="firstname">Vorname:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div>
            <input type="submit" value="Anmelden">
        </div>
    </form>


    <div class="link-container">
        <a href="/form_application/applications">Anmeldung liste anzeigen</a>
    </div>
</body>

</html>
