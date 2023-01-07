<?php
/* on valide et filtre la valeur de la requete de recherche en utilisant la foncvtion "filter_input" de PHP
*/

$query = filter_input(INPUT_POST, "query", FILTER_SANITIZE_STRING);

/* on genere un token de securite unique pour chaque formulaire , ici formulaireAction.php en utilisant la foction de hachage sha1
*/

// generation d'un token de securite unique pour le formulaireAction.php

$formID = 123; // ID unique du formulaire
$secretKey = "my-secret-key"; // la cle secrete qu'on choisie
$token = sha1($formID. $secretKey);

/* ajout du token de securite dans un champ cache du formulaire */
echo '<input type="hidden" name="token" value ="' . $token . '">';

 /* le token de securite ne doit jamais etre stocké en clair dans la base de donnes ou envoye en clair dans la requete */

 // Recuperer la valeur de la requete de recherche.

 $query = isset($_POST["query"]) ? $_POST['query'] : "";

// afficher les resultats de la recherche

echo " voici les resultats de votre recherche pour '$query' :";
 ?>

