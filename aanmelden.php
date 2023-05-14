<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden</title>
    <link rel="stylesheet" href="menu.css">
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

    <div class="aanmelden">
        <h1>AANMELDEN</h1>
        <br><br>
        <input type="text" name="naam" placeholder="Naam">
        <br><br>
        <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam">
        <br><br>
        <input type="text" name="email" placeholder="E-mail">
        <br><br>
        <input type="text" name="tel" placeholder="Telefoon Nummer">
        <br><br>
        <input type="text" name="ww" placeholder="Wachtwoord">
        <br><br>
        <input type="text" name="ww" placeholder="Herhaal Wachtwoord">
        <br><br>
        <button>AANMELDEN</button>
        <br><br>
    </div>
    

</body>
</html>

<style>

*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body{
    background-color: #333; 
    background-size: cover;
}

.aanmelden h1{
    margin-left: 40rem;
    color: white;
    margin-top: 1rem;
    font-size: 40px;
}

.aanmelden input{
    margin-left: 40rem;
    width: 250px;
    height: 40px;
    border-radius: 5px;
}

.aanmelden button{
    margin-left: 43rem;
    border-radius: 5px;
    width: 100px;
    height: 40px;
}
