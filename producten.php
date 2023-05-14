<!-- Author Amin -->

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beta";

// Connectie maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST["knop"])) {
  $Producten = $_POST['product'];
  $Leverancier = $_POST['leverancier_id'];
  $prijs = $_POST['prijs'];
  
  // Get the id of the leverancier from the "leveranciers" table
  $stmt = $conn->prepare("SELECT idleverancier FROM leveranciers WHERE leveranciernaam = :leverancier");
  $stmt->bindParam(':leverancier', $Leverancier);
  $stmt->execute();
  $leverancier_id = $stmt->fetchColumn();

  // Prepare the SQL statement
  $query = $conn->prepare("INSERT INTO `producten` (`productnaam`, `prijs`, `leveranciers_idleverancier`)
                           VALUES (:product, :prijs, :leverancier_id)");

  // Bind the parameters to the statement
  $query->bindParam(':product', $Producten);
  $query->bindParam(':prijs', $prijs);
  $query->bindParam(':leverancier_id', $Leverancier);
  

  // Execute the statement
  $query->execute();
  Data();
}

function Data(){
    echo "Data is Verzonden";
}

?>
<form method="post" action="" class="productklacht_form">
    Product toevoegen: <input type="text" name="product" id="product"></input><br><br>
    Prijs Toevoegen: <input type="text" name="prijs" id="prijs"></input><br><br>
    Leverancier Toevoegen: <input type="text" name="leverancier_id" id="leverancier_id"></input><br><br>
    <input type="submit" name="knop" id="productklacht_submit">
</form>

    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

