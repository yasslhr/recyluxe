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
    <h2>Créer un Compte</h2>
    <form action="signup.php" method="post">
        <input type="text" name="username" placeholder="Nom d'Utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">S'inscrire</button>
    </form>
    </div>
</main>

<footer>
   <?php include 'footer.php'; ?>
</footer>
</body>
</html>
