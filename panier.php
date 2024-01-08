<?php
session_start();
include 'header.php';
include 'bdd/db.php'; // Connexion à la base de données

// Vérification de la connexion de l'utilisateur
if (!isset($_SESSION['user_id'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: connexion.php");
    exit(); // Assurez-vous de terminer le script après la redirection
}

?>

<main>
    <h2>Votre Panier</h2>
    <div class="cart-items">
        <?php
        if (!empty($_SESSION['cart'])):
            foreach ($_SESSION['cart'] as $productId):
                // Récupération des détails du produit
                $stmt = $conn->prepare("SELECT * FROM produits WHERE id = ?");
                $conn->exec("SET NAMES utf8");
                $stmt->execute([$productId]);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($product): ?>
                    <div class="cart-item">
                        <img src="<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['nom']); ?>">
                        <h3><?= htmlspecialchars($product['nom']); ?></h3>
                        <span class="price">Prix: €<?= htmlspecialchars($product['prix']); ?></span>
                        <!-- Bouton de suppression -->
                        <form action="clear_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                <?php endif;
            endforeach;
        else: ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>

        <!-- Bouton de Paiement -->
        <?php if (!empty($_SESSION['cart'])): ?>
            <button id="payment-button">Payer</button>
        <?php endif; ?>
    </div>
</main>

<script>
    // Redirection vers la page de paiement lorsque le bouton est cliqué
    document.getElementById("payment-button").addEventListener("click", function() {
        window.location.href = "paiement.php";
    });
</script>

<?php
include 'footer.php';
?>
