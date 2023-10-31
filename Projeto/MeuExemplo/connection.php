<?php
    $dbServerName = 'localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    //Esse é o nome que tem que ser salvo no Banco de dados
    $dbName = 'exemplo';

    $conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
    if($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection failed: " . $conn->connect_error);
    }
?>