<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<a href="logout.php">Déconnexion</a>
<h1>Welcome <?php echo $_SESSION['user']['name']; ?></h1>


