<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen</title>
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

    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Totaal</th>
            <th>Acties</th>
        </tr>
        <!-- Dynamische rijen worden hier toegevoegd -->
        <?php require_once 'cart.php'; ?>
    </table>

    <form action="cart.php" method="post">
        <h2>Product toevoegen</h2>
        <input type="text" name="product" placeholder="Productnaam">
        <input type="number" name="prijs" placeholder="Prijs">
        <input type="number" name="aantal" placeholder="Aantal">
        <input type="submit" name="toevoegen" value="Toevoegen">
    </form>

<a href="leveringsvoorwaarden.php" class="voorwaarden">Leveringsvoorwaarden!</a>
<br><br><br>

<footer>
    <p>Copyright: Beta INC</p>
    <p><a href="">Beta@.com</a></p>
    <p>Telefoon:</p>
    <p><a href="">(0)88 544 45 55</a></p>
    <p>Maandag t/m vrijdag: 08:30-17:30 uur</p>
    <p>E-mail:</p>
    <p><a href="">BetaINC@gmail.com</a></p>
    <p>Klantenservice:</p>
    <p><a href="contact.php">Contact met de klanten service</a></p>
</footer>

</body>
</html>

<style>

    *{
        font-family: 'Comfortaa', cursive;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .product{
        display: flex;
        width: 100%;
        height: 200px;
        overflow: hidden;
        border: 1px solid silver;
        margin-bottom: 20px;
    }

    
    .product > img{
        width: 300px;
        height: 200px;
        object-fit: cover;
    }

    .product-info{
        padding: 20px;
        width: 100%;
        position: relative;
    }

    .product-name, .product-price{
        margin-bottom: 20px;
    }

    .product-remove{
        position: absolute;
        bottom: 20px;
        right: 20px;
        padding: 10px 25px;
        background-color: green;
        color: white;
        cursor: pointer;
        border-radius: 5px;
    }

    .product-remove:hover{
        background-color: white;
        color: green;
        font-weight: 600;
        border: 1px solid green;
    }

    .cart-total{
        flex: 0.25;
        margin-left: 20px;
        padding: 20px;
        height: 240px;
        border: 1px solid silver;
        border-radius: 5px;
    }

    .cart-total p{
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        font-size: 20px;
    }

    .cart-total a{
        display: block;
        text-align: center;
        height: 40px;
        line-height: 40px;
        background-color: tomato;
        color: white;
        text-decoration: none;
    }

    .voorwaarden{
        margin-left: 1.5rem;
        font-size: 30px;
        text-decoration: none;
    }
</style>