<?php
include("header.php");
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>

<h1 class="bold">Bienvenue dans EduSync</h1>

<a href="login.php">Se connecter</a><br><br>
<a href="register.php">S'inscrire</a>

</body>
</html>
