<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root"; // ou un autre utilisateur de base de données
$password = "";     // le mot de passe correspondant
$dbname = "recyluxe"; // le nom de votre base de données

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>
