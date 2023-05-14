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
$volledigenaam = $_POST['volledigenaam'];
$telefoon = $_POST['telefoon'];
$postcode = $_POST['postcode'];
$gender = $_POST['gender'];
$probleem = $_POST['probleem'];
$oplossing = $_POST['oplossing'];

// Query om de klachtgegevens in de database in te voegen
$sql = "INSERT INTO websiteklachten (volledigenaam, telefoon, postcode, gender, probleem, oplossing)
VALUES ('$volledigenaam', '$telefoon', '$postcode', '$gender', '$probleem', '$oplossing')";

if (mysqli_query($conn, $sql)) {
    echo "Klacht over website succesvol ingediend.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Verbinding met de database sluiten
mysqli_close($conn);
?>
