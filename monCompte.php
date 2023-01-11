


<?php

$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
?>
<form method="post" action="monCompte.php">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    <br>
    <label for="password_confirm">Confirmez le mot de passe :</label>
    <input type="password" name="password_confirm" id="password_confirm" required>
    <br>
    <input type="submit" value="S'inscrire">
</form>



