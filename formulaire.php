<?php
// Récupérer les données du formulaire sous forme ternaire
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Afficher les données du formulaire
echo "Nom : $name<br>";
echo "Email : $email<br>";
echo "Message : $message<br>";
?>

