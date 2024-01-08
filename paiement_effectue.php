<?php
session_start();
include 'bdd/db.php';

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérez les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $email = $_POST['email'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Vérifiez si l'utilisateur est connecté
    if (isset($_SESSION['user_id'])) {
        // Calculez le montant total en fonction du contenu du panier
        $totalAmount = 0;
        foreach ($_SESSION['cart'] as $productId) {
            $stmt = $conn->prepare("SELECT prix FROM produits WHERE id = ?");
            $conn->exec("SET NAMES utf8");
            $stmt->execute([$productId]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalAmount += $product['prix'];
        }

        // Effectuez ici la logique de paiement (par exemple, enregistrer la transaction dans la base de données)

        // Supprimez les produits achetés de la base de données
        foreach ($_SESSION['cart'] as $productId) {
            $stmt = $conn->prepare("DELETE FROM produits WHERE id = ?");
            $stmt->execute([$productId]);
        }

        // Envoyez un résumé d'achat par e-mail
        $to = $email;
        $subject = "Résumé de votre achat sur RecyLuxe";
        $message = "Merci pour votre achat sur RecyLuxe!\n\n";
        $message .= "Détails de l'achat:\n";
        $message .= "Nom: $nom\n";
        $message .= "Prénom: $prenom\n";
        $message .= "Numéro de téléphone: $tel\n";
        $message .= "Adresse: $adresse\n";
        $message .= "Code postal: $code_postal\n";
        $message .= "Ville: $ville\n";
        $message .= "Pays: $pays\n";
        $message .= "Montant total: €$totalAmount\n";
        $message .= "Numéro de carte bancaire: XXXX-XXXX-XXXX-" . substr($card_number, -4) . "\n"; // Masquez la plupart du numéro
        $message .= "Date d'expiration: $expiry_date\n";

        // Utilisez la fonction mail() pour envoyer l'e-mail (assurez-vous que la configuration du serveur le permet)
        // mail($to, $subject, $message);

        // Effacez le panier après l'achat
        unset($_SESSION['cart']);

        // Redirigez l'utilisateur vers une page de confirmation
        header("Location: confirmation_paiement.php");
        exit();
    } else {
        // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
        header("Location: connexion.php");
        exit();
    }
} else {
    // Le formulaire n'a pas été soumis, redirigez l'utilisateur vers la page de paiement
    header("Location: paiement.php");
    exit();
}
?>
