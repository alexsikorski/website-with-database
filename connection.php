<?php
$servername = "127.0.0.1:3306";
$username = "as16815";
$password = "obscure";

try {
    $conn = new PDO("mysql:host=$servername;dbname=as16815", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>