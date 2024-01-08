<?php
session_start();

// Vider le panier
$_SESSION['cart'] = array();

// Rediriger vers la page du panier ou la page des produits
header("Location: cart.php");
exit();
?>
