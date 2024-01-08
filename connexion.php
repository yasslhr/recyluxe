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
    <?php include 'header.php'; ?>
</header>

<main>
    <div class="auth-form">
    <h2>Connexion</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
    </div>
</main>

<footer>
    <!-- Votre pied de page ici -->
</footer>
</body>
</html>
