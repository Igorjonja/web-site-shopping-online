<?php

require_once 'config/setup.php';

if(isset($_POST["username"],
$_POST["password"],
$_POST["email"])){


$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
}



//Inserting data

try{
    $sql = "INSERT INTO users (username, password, email)
        VALUES ('$username','$password', '$email')";

    $connection->exec($sql);
    echo "<p> User successfully registered! </p>";
} catch(PDOException $e){
    // echo $e->getMessage();
}

$connection = null;
?>