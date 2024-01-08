<?php
session_start();
include 'header.php';
include 'bdd/db.php';

// Traitement de l'ajout au panier
if (isset($_POST['product_id'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $productId = $_POST['product_id'];
    if (!in_array($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $productId;
        $_SESSION['message'] = "Produit ajouté au panier avec succès.";
    } else {
        // Message si le produit est déjà dans le panier
        $_SESSION['message'] = "Ce produit est déjà dans votre panier.";
    }
    header("Location: produit.php");
    exit();
}

$sql = "SELECT * FROM produits";
$stmt = $conn->prepare($sql);

$conn->exec("SET NAMES utf8");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="products">
    <h2>Nos Produits de Luxe</h2>

    <!-- Afficher le message de confirmation ou d'avertissement -->
    <?php if (isset($_SESSION['message'])): ?>
        <p class="message"><?= $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <div class="product-list">
        <?php if (count($result) > 0): ?>
            <?php foreach ($result as $row): ?>
                <div class="product">
                    <h3><?= htmlspecialchars($row['nom']); ?></h3>
                    <img src="<?= htmlspecialchars($row['image']); ?>" alt="<?= htmlspecialchars($row['nom']); ?>">
                    <p><?= htmlspecialchars($row['description']); ?></p>
                    <span class="price">Prix: €<?= htmlspecialchars($row['prix']); ?></span>

                    <form action="produit.php" method="post">
                        <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                        <button type="submit">Ajouter au Panier</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun produit trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php
include 'footer.php';
?>
