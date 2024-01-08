<?php
session_start();
include 'bdd/db.php';  // Assurez-vous d'inclure votre script de connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hashage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données en utilisant PDO
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $conn->exec("SET NAMES utf8");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $hashedPassword);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Inscription réussie. <a href='connexion.php'>Se connecter</a>";
    } else {
        echo "Erreur lors de l'inscription.";
    }

    $stmt = null;
    $conn = null;
}
?>
