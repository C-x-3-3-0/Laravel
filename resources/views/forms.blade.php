<!DOCTYPE html>
<html>
  <head>
    <title>MELDEN SIE SICH AN</title>
  </head>
  <body>
    <form method="post">
        @csrf
        <h1>Melden sie sich an</h1>
        <input name="email" type="email" placeholder="Email" id="email"><br>
        <input name="lastname" type="text" placeholder="Name" id="lastname"><br>
        <input name="firstname" type="text" placeholder="Vorname" id="firstname"><br>
        <input name="title" type="text" placeholder="Titel des Events" id="title"><br>
        <input name="date" type="date" placeholder="Datum" id="date"><br>
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
