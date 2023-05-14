<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="contact.css">
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
    <h1>Contactpagina</h1>
  <h2>Productklachten</h2>
  <form action="productklachten.php" method="post">
    <label for="voornaam">Voornaam:</label>
    <input type="text" id="voornaam" name="voornaam" required>
    <br>
    <label for="achternaam">Achternaam:</label>
    <input type="text" id="achternaam" name="achternaam" required>
    <br>
    <label for="telefoon">Telefoon:</label>
    <input type="text" id="telefoon" name="telefoon" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="gender">Geslacht:</label>
    <select id="gender" name="gender" required>
      <option value="M">Man</option>
      <option value="V">Vrouw</option>
      <option value="O">Overig</option>
    </select>
    <br>
    <label for="product">Product:</label>
    <input type="text" id="product" name="product" required>
    <br>
    <label for="oplossing">Oplossing:</label>
    <textarea id="oplossing" name="oplossing" required></textarea>
    <br>
    <input type="submit" value="Indienen">
  </form>

  <h2>Websiteklachten</h2>
  <form action="websiteklachten.php" method="post">
    <label for="volledigenaam">Volledige naam:</label>
    <input type="text" id="volledigenaam" name="volledigenaam" required>
    <br>
    <label for="telefoon">Telefoon:</label>
    <input type="text" id="telefoon" name="telefoon" required>
    <br>
    <label for="postcode">Postcode:</label>
    <input type="text" id="postcode" name="postcode" required>
    <br>
    <label for="gender">Geslacht:</label>
    <select id="gender" name="gender" required>
      <option value="M">Man</option>
      <option value="V">Vrouw</option>
      <option value="O">Overig</option>
    </select>
    <br>
    <label for="probleem">Probleem:</label>
    <textarea id="probleem" name="probleem" required></textarea>
    <label for="oplossing">Oplossing:</label>
    <textarea id="oplossing" name="oplossing" required></textarea>
    <br>
    <input type="submit" value="Indienen">
    <br>
</body>
</html>