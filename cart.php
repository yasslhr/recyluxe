<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];


    if (!in_array($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $productId;
        $_SESSION['message'] = "Produit ajouté au panier avec succès.";
    } else {
        // Message si le produit est déjà dans le panier
        $_SESSION['message'] = "Ce produit est déjà dans votre panier.";
    }
}

header("Location: produit.php");
exit();
?>
