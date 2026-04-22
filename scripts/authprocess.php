<?php
$prenom = $_POST['prenom'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
if (
    empty($name) ||
    empty($email) ||
    empty($password)
) {
    header("location:../public/register.php?error=empty");
} else {
    header("location:../public/dashboard.php");
    exit();
}


if (!filter_var($email)) {
    header("location:../public/register.php?error=empty");
    exit();
}
$name = htmlspecialchars($_POST['name']);
$prenom = htmlspecialchars($_POST['$prenom']);
$email= htmlspecialchars($_POST['$email']);
$password = htmlspecialchars($_POST['password']);
