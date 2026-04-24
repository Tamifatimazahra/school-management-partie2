<?php
$host = "localhost";
$dbname = "edusync";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=edusync;charset=utf8", "root", "");
    echo "CONNECTED";
} catch (PDOException ) {
    echo "not Connexion";
}
?>
