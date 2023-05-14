<?php
session_start();

// Controleer of de winkelwagen-array bestaat, zo niet, maak deze dan aan
if (!isset($_SESSION['winkelwagen'])) {
    $_SESSION['winkelwagen'] = array();
}

// Toevoegen van een product aan de winkelwagen
if (isset($_POST['toevoegen'])) {
    $product = $_POST['product'];
    $prijs = $_POST['prijs'];
    $aantal = $_POST['aantal'];

    $item = array(
        'product' => $product,
        'prijs' => $prijs,
        'aantal' => $aantal
    );

    array_push($_SESSION['winkelwagen'], $item);
}

// Verwijderen van een product uit de winkelwagen
if (isset($_GET['verwijderen'])) {
    $index = $_GET['verwijderen'];
    unset($_SESSION['winkelwagen'][$index]);
}

?>

<!-- Dynamische rijen in de winkelwagen weergeven -->
<?php foreach ($_SESSION['winkelwagen'] as $index => $item) { ?>
    <tr>
        <td><?php echo $item['product']; ?></td>
        <td><?php echo $item['prijs']; ?></td>
        <td><?php echo $item['aantal']; ?></td>
        <td><?php echo $item['prijs'] * $item['aantal']; ?></td>
        <td><a href="cart.php?verwijderen=<?php echo $index; ?>">Verwijderen</a></td>
    </tr>
<?php } ?>
