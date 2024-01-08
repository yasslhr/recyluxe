<?php

session_start();
include 'bdd/db.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="paiement.css">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>
<div class="payment-page">
<main>

    <h2>Page de Paiement</h2>
    <?php
    // Vérifiez si l'utilisateur est connecté et s'il y a des articles dans le panier
    if (isset($_SESSION['user_id']) && !empty($_SESSION['cart'])) {
        // Calculez le montant total en fonction du contenu du panier
        $totalAmount = 0;
        foreach ($_SESSION['cart'] as $productId) {
            // Récupérez le prix de chaque produit depuis la base de données et ajoutez-le au total
            $stmt = $conn->prepare("SELECT prix FROM produits WHERE id = ?");
            $conn->exec("SET NAMES utf8");
            $stmt->execute([$productId]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalAmount += $product['prix'];
        }


        ?>
        <form action="paiement_effectue.php" method="post">
            <!-- Ajoutez les champs pour les coordonnées du client -->
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="tel">Numéro de téléphone :</label>
            <input type="tel" id="tel" name="tel" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" required>


            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>


            <!-- Ajoutez les champs pour les informations de carte bancaire -->
            <label for="card_number">Numéro de carte bancaire :</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry_date">Date d'expiration :</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/AA" required>

            <label for="cvv">CVV :</label>
            <input type="text" id="cvv" name="cvv" required>

            <!-- Ajoutez un bouton "Payer" -->
            <button type="submit">Payer</button>
        </form>


        <?php
    } else {
        // Affichez un message d'erreur si le panier est vide ou si l'utilisateur n'est pas connecté
        echo "<p>Le panier est vide ou vous n'êtes pas connecté.</p>";
    }
    ?>

</main>
</div>

<footer>
    <?php include 'footer.php'; ?>
</footer>
</body>
</html>
