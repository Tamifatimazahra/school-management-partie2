<?php
$prenom=$_POST['prenom'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if (
    empty($name) ||
    empty($email) ||
    empty($password)
) {
    echo "Tous les champs sont obligatoires ";
} else {
    echo "Données complètes ";
}

?>