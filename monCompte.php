
<?php
// Récupération des données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Nettoyage des données d'entrée
$username = htmlspecialchars($username);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
// Affichage des données
echo "Nom d'utilisateur : $username<br>";
echo "Adresse e-mail : $email<br>";
echo "Mot de passe : $password<br>";
?>

<br>


<form action="monCompte.php" method="post">
  <label for="username">Nom d'utilisateur :</label><br>
  <input type="text" id="username" name="username" required><br>
  <label for="email">Adresse e-mail :</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="password">Mot de passe :</label><br>
  <input type="password" id="password" name="password" required><br><br>
  <button type="submit">S'inscrire</button>
</form> 


