<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $query = $_POST['q'];
  // Traitement de la requête de recherche

  // Construction de l'URL de la page de résultats de recherche
  $url = "url.php?" . http_build_query(array('q' => $query));

  // Redirection vers la page de résultats de recherche
  header("Location: " . $url);
    
  exit;
}
?>