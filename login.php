<?php
session_start();
include 'bdd/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        if (password_verify($password, $result['password'])) {
            // Connexion réussie
            $_SESSION['user_id'] = $result['id'];
            header("Location: index.php");
        } else {
            echo "Échec de la connexion. Veuillez réessayer.";
        }
    } else {
        echo "Échec de la connexion. Veuillez réessayer.";
    }

    $conn = null; // Fermez la connexion PDO
}
?>
