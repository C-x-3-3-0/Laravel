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
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="lastname">Name:</label>
            <input type="text" id="lastname" name="lastname" required>
            @error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="firstname">Vorname:</label>
            <input type="text" id="firstname" name="firstname" required>
            @error('firstname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="answer">Answer:</label> <br>
            <input type="text" name="answer" id="answer" placeholder="yes or no">
            @error('answer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Sign Up">
        </div>
    </form>


    <div class="link-container">
        <a href="/form_application/applications">Anmeldung liste anzeigen</a>
    </div>
</body>

</html>
