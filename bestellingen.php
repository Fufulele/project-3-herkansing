<?php

echo "<h1>Bestellingen per klant</h1>";

try {
    // host, databasenaam, gebruikersnaam
    $db = new PDO("mysql:host=localhost;dbname=beta","root","");
    
    // query selecteer alle bieren
    $query = $db->prepare("SELECT * FROM klant");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo '<table border="1" width="290">';
        
    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . $data ["naam"].  "</td>";
        echo "<td>" . $data ["bestellingen"].  "</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch(PDOException $e) {
    // Handle exception
};

?>
