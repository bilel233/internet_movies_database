<?php
/* un token de securité est un code aleatoire qui est genere et envoye 
avec un formulaire pour proteger celui-ci contre les attaques de types "CSRF"*/

// generer un token aleatoire
$token = bin2hex(random_bytes(32));
//Enrergistrer le token dans une variable de session

$_SESSION["csrf_token"] = $token;

//afficher le formulaire avec le token cache

echo '<form action="ajouter_au_panier.php" method="post">';
echo '  <input type="hidden" name="csrf_token" value="' . $token . '">';
echo '  <input type="text" name="name" placeholder="Votre nom">';
echo '  <input type="email" name="email" placeholder="Votre email">';
echo '  <input type="submit" value="Envoyer">';
echo '</form>';
// dans le fichier ajouter_au_panier.php, verifier le token
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    //Recuperer le token envoye avec le formulaire
    $token = $_POST['csrf_token'];
    // Verfier que le token est valide
}
if ($token !== $_SESSION['csrf_token']) {
    // Le token est incorrect, sortir
    exit;
  }

  // Recuperer les donnees du formulaire
$name = $_POST["name"];
$email = $_POST["email"];


/* on recupere les donnees envoyes par un formulaire en php par la methode POST */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $name = $_POST["product_id"];


  
  // Afficher les données
  echo "Nom : $name<br>";

}

?>
