<?php 

$dsn = "mysql:dbname=nsawa; host=localhost; charset=utf8mb4;";
$username = "root";
$password = "";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO($dsn, $username, $password, $options);
    $stmt= $conn->prepare("SELECT * FROM donation_acceptor");
    $stmt->execute();
    $people=$stmt->fetchAll(PDO::FETCH_OBJ);
    // print_r($people);
    $i=0;
    include "dashboard.php";
    