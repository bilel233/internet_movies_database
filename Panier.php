<?php
// Connexion à la base de données

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", 'root', 'root');
}
catch (Exception $e)
{
    die("Erreur;" . $e->getMessage());
}
// Récupération de l'ID du produit à ajouter au panier
$product_id = $_GET['id'];

// Vérification de l'existence de la session
if (isset($_SESSION['cart'][$product_id])) {
  // Le produit est déjà dans le panier, augmenter la quantité
  $_SESSION['cart'][$product_id]++;
} else {
  // Le produit n'est pas encore dans le panier, ajouter le produit avec une quantité de 1
  $_SESSION['cart'][$product_id] = 1;
}

// Redirection vers la page du panier
header('Location: Panier.php');
exit;


// Récupération des produits du panier à partir de la session
//$products = $_SESSION['cart'];

// Vérification de l'existence de produits dans le panier
if (!empty($products)) {
  // Affichage de chaque produit dans le panier
  foreach ($products as $product_id => $quantity) {
    // Récupération des informations du produit à partir de la base de données
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    // Affichage du nom et de la quantité du produit
    echo $product['name'] . ' x ' . $quantity . '<br>';
  }
} else {
  // Aucun produit dans le panier
  echo 'Le panier est vide';
}


?>
