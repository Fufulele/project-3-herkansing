<?php

echo "<h1>Gemiddelde prijs per categorie</h1>";

$conn=mysqli_connect('localhost','root','','beta');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(prijs) as `avgprijs` from `laptop`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemiddelde prijs voor laptops zijn: €".$data['avgprijs'];

echo "<br><br>";

$conn=mysqli_connect('localhost','root','','beta');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(prijs) as `avgprijs` from `monitor`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemiddelde prijs voor monitors zijn: €".$data['avgprijs'];

echo "<br><br>";

$conn=mysqli_connect('localhost','root','','beta');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(prijs) as `avgprijs` from `muis`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemiddelde prijs voor muizen zijn: €".$data['avgprijs'];

echo "<br><br>";

$conn=mysqli_connect('localhost','root','','beta');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(prijs) as `avgprijs` from `pc`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemiddelde prijs voor pc's zijn: €".$data['avgprijs'];

echo "<br><br>";

$conn=mysqli_connect('localhost','root','','beta');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(prijs) as `avgprijs` from `toetsenbord`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemiddelde prijs voor toetsenborden zijn: €".$data['avgprijs'];

?>