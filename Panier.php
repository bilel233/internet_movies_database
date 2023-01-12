
<?php
function get_title($video_id) {
  global $pdo;
  $query = $pdo->prepare("SELECT title FROM videos WHERE id = ?");
  $query->execute([$video_id]);
  $result = $query->fetch();
  return $result['title'];
}
function get_length($video_id) {
  global $pdo;
  $query = $pdo->prepare("SELECT length FROM videos WHERE id = ?");
  $query->execute([$video_id]);
  $result = $query->fetch();
  return $result['length'];
}


 <?php
$pdo = new PDO("mysql:host=localhost;dbname=videos;charset=utf8", 'root','');
// Initialisation du panier s'il n'existe pas déjà
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Ajout d'un produit au panier
if (isset($_POST['add_to_cart'])) {
  $product_id = $_POST['product_id'];
  $quantity = $_POST['quantity'];
  if (!isset($_SESSION['cart'][$product_id])) {
      $_SESSION['cart'][$product_id] = $quantity;
  } else {
      $_SESSION['cart'][$product_id] += $quantity;
  }
}


foreach ($_SESSION['cart'] as $product_id => $quantity) {
  // Récupération des informations sur le produit à partir de la base de données
  $query = "SELECT * FROM panier WHERE id = $product_id";
  $result = $pdo->query($query);
  $product = $result->fetch();
  echo '<tr>';
  echo '<td>' . $product['name'] . '</td>';
  echo '<td>' . $quantity . '</td>';
  echo '</tr>';
}
echo '</table>';

// Affichage du contenu du panier
echo '<h2>Contenu de votre panier</h2>';
echo '<table>';
echo '<tr><th>Nom de l\'article</th><th>Quantité</th></tr>';
if(empty($_SESSION['cart'])){
    echo '<tr><td colspan="2">Votre panier est vide</td></tr>';
}
else{
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Récupération des informations sur le produit à partir de la base de données
        $query = "SELECT * FROM panier WHERE id = $product_id";
        $result = $pdo->query($query);
        $product = $result->fetch();
        echo '<tr>';
        echo '<td>' . $product['name'] . '</td>';
        echo '<td>' . $quantity . '</td>';
        echo '</tr>';
    }
}
echo '</table>';
?>
