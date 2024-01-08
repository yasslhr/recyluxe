<?php
session_start();
include 'bdd/db.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Paiement</title>
    <link rel="stylesheet" href="style.css"> <!-- Assurez-vous d'ajouter votre propre feuille de style -->
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>
<main>
    <div class="confirmation-page">
        <h2>Confirmation de Paiement</h2>
        <p>Merci pour votre achat sur RecyLuxe!</p>
        <p>Votre paiement a été effectué avec succès.</p>
        <!-- Vous pouvez ajouter d'autres détails de confirmation ici si nécessaire -->
    </div>
</main>
<?php include 'footer.php'; ?>
</body>
</html>