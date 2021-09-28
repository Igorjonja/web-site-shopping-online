<?php

require_once 'config/setup.php';


if (isset($_POST["password"], $_POST["username"], $_POST["email"])) {
    $parole = $_POST["password"];
    $vards = $_POST["username"];
    $epasts = $_POST["email"];




    //Inserting data

    try {
        $sql = "INSERT INTO users (username, email, password)
        VALUES ('$vards','$epasts','$parole')";

        $connection->exec($sql);
        echo "<p> User successfully registered! </p>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
$connection = null;


?>