<?php
#Data base connection

$hostname = "localhost";
$username = "Administrator";
$password = "Passwordw123$";
$datbname = "website";

$connection = mysqli_connect($hostname, $username, $password, $datbname,) 
    OR die('Could not connect: '.mysqli_connect_error());

// try{
//     $connection = new PDO("mysql:host=$hostname;dbname=$datbname", $username, $password)
//     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
//     echo "Connected! <br><br>";

// } catch (PDOException $e) {
//     echo "Could not connect"

// }

?>