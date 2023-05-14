<?php



// Maak verbinding met de database
$connect = mysqli_connect("localhost", "root", "", "beta");

// Controleer of het zoekformulier is verstuurd
if(isset($_POST['search']))
{
    // Haal de ingevoerde zoekterm op
    $valueToSearch = mysqli_real_escape_string($connect, $_POST['valueToSearch']);
    
    // Maak de zoekopdracht
    $query = "SELECT * FROM `producten` WHERE `productnaam` LIKE '%".$valueToSearch."%'";
    
    // Voer de zoekopdracht uit
    $search_result = mysqli_query($connect, $query);
}
else {
    // Als het zoekformulier niet is verstuurd, haal dan alle resultaten op
    $query = "SELECT * FROM `producten`";
    $search_result = mysqli_query($connect, $query);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 2px solid black;
                width: 60%;
                height: 40px
            }
        </style>
    </head>
    <body>
        <main class="Categorie_Main">
        <form method="post" action="">
            <input type="text" name="valueToSearch" placeholder="Zoek"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
        </form>
        
        <table>
            <tr>
                <th>Id</th>
                <th>productnaam</th>
                <th>prijs</th>
                <th>Leverancierid</th>
            </tr>
            
            <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['idproduct'];?></td>
                    <td><?php echo $row['productnaam'];?></td>
                    <td><?php echo $row['prijs'];?></td>
                    <td><?php echo $row['leveranciers_id'];?></td>
                </tr>
            <?php endwhile;?>
        </table>
            </main>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>
