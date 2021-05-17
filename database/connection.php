<?php
    $servername = "localhost";
    $database = "pessoas"; 
    $username = "root";
    $password = "COxinha2020@";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
        $pdo=new PDO("mysql:host=$servername;dbname=$database",$username, $password, $dsn_Options);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>