<?php

include "config.php";

//CONECTAMOS A LA BD
try {
    $dsn = "mysql:host=" . SERVIDOR . ";dbname=" . BD;
    $pdo = new PDO($dsn, USUARIO, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<script>alert('Conexión establecida!');</script>";
} catch (PDOException $e){
    echo $e;
}

?>