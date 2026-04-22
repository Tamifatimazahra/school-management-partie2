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
} 


if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("location:../public/register.php?error=empty");
    exit();
}
$name = htmlspecialchars($_POST['name']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);




$email = $_POST['email'];
$password = $_POST['password'];

$test_email = "test@gmail.com";
$test_password = "123456";

if ($email == $test_email && $password == $test_password) {
    header("Location: ../public/dashboard.php");
    exit();
} else {
    header("Location: ../public/login.php?error=1");
    exit();
}

?>
