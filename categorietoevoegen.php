
<!-- Main HTML code -->
<link rel="stylesheet" href="menu.css">
<div class="bg-img">
    <div class="container">
        <div class="topnav">
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
</div>

<main class="cat_toe_main">
    <div class="cat_toe_cont">
        <h1 id="cat_toe_h1">Nieuwe product toevoegen!</h1>
    </div>

    <div id="cat_toe_form_cont">
        <form method="POST" action="#" class="cat_toe_form">
            <label for="cat_name">product naam: </label>
            <br>
            <input type="text" name="cat_name">
            <br><br>
            <input type="submit" name="submit_btn" value="product Toevoegen">
            <br><br>
            <input type="submit" name="goback" value="Keer terug">
        </form>
    </div>


<!-- Main PHP code -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=beta", "root", "");
        return $db;
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

function pushdata($db) {
    $catname = readform();
    $query = $db->prepare("INSERT INTO producten (productnaam) VALUES ('$catname');");
    $query->execute();
    echo"<script type='text/javascript'>alert('Categorie $catname is toegevoegd!');</script>";
}

function readform() {
    $catname = $_POST["cat_name"];
    return $catname;
}

if (isset($_POST["submit_btn"])) {
    $db = connectdb();
    pushdata($db);
}
else if (isset($_POST["goback"])) {
    header("location: categoriecrud.php");
}

?>
</main>

