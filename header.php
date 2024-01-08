<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecyLuxe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>RecyLuxe</h1>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="produit.php">Produits</a></li>
            <li><a href="panier.php">Panier</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- L'utilisateur est connecté, affiche le lien "Déconnexion" -->
                <li><a href="logout.php">Déconnexion</a></li>
            <?php else: ?>
                <!-- L'utilisateur n'est pas connecté, affiche les liens "Créer Compte" et "Connexion" -->
                <li><a href="creercompte.php">Créer Compte</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
</body>
</html>
