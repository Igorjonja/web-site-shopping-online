<?php
#Data base connection

$hostname = "localhost";
$username = "Administrator";
$password = "Password123$";
$datbname = "website";

// $connection = mysqli_connect($hostname, $username, $password, $datbname,) 
//     OR die('Could not connect: '.mysqli_connect_error());

try{
    $connection = new PDO("mysql:host=$hostname;dbname=$datbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected! <br><br>";

   

} catch (PDOException $e){
    echo "Could not connect: " . $e->getMessage() . "<br>";
}


?>