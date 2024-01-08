<?php
session_start();
include 'header.php';
include 'bdd/db.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecyLuxe - Accueil</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assurez-vous d'ajouter le chemin correct vers votre fichier CSS -->
</head>
<body>
<main>
    <section class="intro">
        <h2>Bienvenue chez RecyLuxe</h2>
        <p>Découvrez notre sélection exclusive de produits de luxe de seconde main.</p>
        <a href="produit.php" class="cta-button">Explorer nos produits</a>

    </section>
    <img src="images/imageAccueil.png" alt="Description de l'image" class="intro-image">
    <section class="about">
        <h2>Notre Mission</h2>
        <p>
            Chez RecyLuxe, notre mission est de rendre le luxe accessible tout en favorisant le recyclage et la durabilité. Nous croyons que tout le monde mérite d'accéder à des produits de luxe sans se ruiner. De plus, en ces temps où la prise de conscience environnementale est plus importante que jamais, RecyLuxe offre une plateforme où le luxe rencontre l'écologie. En choisissant RecyLuxe, vous optez pour des produits de haute qualité tout en contribuant à un avenir plus vert et plus durable.
        </p>
        <p>
            Nous sommes fiers de vous offrir une sélection exclusive de produits de luxe de seconde main. Nous tenons à vous assurer que tous nos produits sont authentiques, soigneusement vérifiés et certifiés par notre équipe d'experts en produits de luxe. Chaque article est minutieusement inspecté pour garantir son authenticité et son état. Nous utilisons un système de notation allant de <span class="rating-system">6/10</span> à <span class="rating-system">10/10</span> pour évaluer l'état de nos produits, vous permettant ainsi de faire un choix éclairé en fonction de vos préférences. Que vous recherchiez des articles en excellent état ou des pièces avec un charme vintage, notre échelle de notation vous donne la confiance nécessaire pour trouver le produit parfait. Chez RecyLuxe, la qualité et l'authenticité sont notre priorité, et nous nous engageons à vous offrir une expérience de shopping de luxe exceptionnelle.
        </p>
    </section>



</main>
</body>
<?php include 'footer.php'; ?>
</html>



