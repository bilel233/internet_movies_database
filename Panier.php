
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


 // On cree  un tableau de session en utilisant une session php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=videos;charset=utf8", "root");
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$video_id = $_POST['video_id'];
$quantity = $_POST['quantity'];

$_SESSION['cart'][$video_id] = $quantity;


/* je verifie les elements de mon panier si il yen a pui je les affiche */
if (!empty($cart)) {
  echo '<table>';
  echo '<tr>';
  echo '<th>Title</th>';
  echo '<th>Length</th>';
  echo '<th>Quantity</th>';
  echo '</tr>';
  foreach ($cart as $video_id => $item) {
      echo '<tr>';
      echo '<td>'.get_title($video_id).'</td>';
      echo '<td>'.get_length($video_id).'</td>';
      echo '<td>'.$item['qty'].'</td>';
      echo '</tr>';
  }
  echo '</table>';
} else {
  echo 'Your cart is empty.';
}

?>
