<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inloggen</title>
    <link rel="stylesheet" href="inlog.css">
</head>
<body>

    <div class="bg-img">
        <div class="container">
            <div class="topnav">
            <a href="homepagina.php">Home</a>
            <a href="onderdelen.php">onderdelen</a> 
            <a href="contact.php">contact</a> 
            <a href="winkelwagen.php">winkelwagen</a> 
            <a href="inloggen.php">inloggen</a> 
            <a href="info.php">info</a> 
        </div>
      </div>
    </div>

   
    <div class="inlogform">
        <h1>INLOGGEN</h1>
        <form action="homepagina.php" method="post">
        <p>Gebruikersnaam</p>
        <input type="text" name="gebruiker" placeholder="Gebruikersnaam">
        <p>Wachtwoord</p>
        <input type="password" name="password" placeholder="Wachtwoord">
        <button onclick="location.href='categoriecrud.php'" type="button">login
        </button>
        <br>
        <a href="wwvergeten.php" class="wwvergeten">Wachtwoord vergeten?</a>
        <br>
        <a href="aanmelden.php" class="aanmelden">Nog geen account, klik hier!</a>
        <br><br>
        </form>
    </div>


</body>
</html>

