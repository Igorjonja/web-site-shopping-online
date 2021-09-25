<?php

require_once 'config/setup.php';

//Inserting data
var_dump($_POST);
try{
    $sql = "INSERT INTO users (username, password, email)
        VALUES ('user2', 'password2', 'username@email.com')";

    $connection->exec($sql);
    echo "<p> User successfully registered! </p>";
} catch (PDOException $e){
    echo $e->getMessage();
}

$connection = null;
?>