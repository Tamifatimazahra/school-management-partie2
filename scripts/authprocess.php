<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3307;dbname=edusync;charset=utf8", "root", "");

    echo "connect sucess";
    } catch (PDOException $e) {
    echo $e->getMessage();
}
session_start();
$name = htmlspecialchars($_POST['name']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if (empty($name) || empty($email) || empty($password)) {
    header("Location: ../public/register.php?error=empty");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../public/register.php?error=email");
    exit();
}

// INSERT
$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
$stm = $pdo->prepare($sql);
$stm->execute([$name, $prenom, $email, $password]);
$_SESSION['user'] = [
    'name' => $name,
    'role' => 'user'
];

header("Location: ../public/dashboard.php");
exit();
?>

