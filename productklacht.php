<?php
// Verbinding maken met de database (vervang de databasegegevens met die van jou)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beta"; // Vul hier de naam van jouw database in

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controleren op fouten bij het maken van de verbinding
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Gegevens uit het formulier halen
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$telefoon = $_POST['telefoon'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$product = $_POST['product'];
$oplossing = $_POST['oplossing'];

// Query om de klachtgegevens in de database in te voegen
$sql = "INSERT INTO productklachten (voornaam, achternaam, telefoon, email, gender, product, oplossing)
VALUES ('$voornaam', '$achternaam', '$telefoon', '$email', '$gender', '$product', '$oplossing')";

if (mysqli_query($conn, $sql)) {
    echo "Klacht over product succesvol ingediend.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Verbinding met de database sluiten
mysqli_close($conn);
?>
