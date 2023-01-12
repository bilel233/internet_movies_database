
<!DOCTYPE html>
<html>
<head>
  <title>Mon site de streaming</title>
  <link href="Action.css" rel="stylesheet">
</head>
<body>
  <!-- Ajoutez votre en-tête -->
  <header>
    <h1>Mon site de streaming d'Action</h1>
    <form action="search.php" method="GET">
  <input type="text" name="keyword" placeholder="Rechercher une vidéo">
  <input type="submit" value="Rechercher">
</form>


<br>




    <nav>
    <a href="http://localhost:8888/phpProject/monCompte.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Mon compte</a>
    <a href="http://localhost:8888/phpProject/Drama.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Categories</a>
    <a href="http://localhost:8888/phpProject/Action.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Accueil</a>
    <a href="http://localhost:8888/phpProject/Panier.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Panier</a>


    </nav>
  </header>

  <!-- Ajoutez un pied de page -->
  <footer>
    <p>Copyright 2021 - Mon site de streaming</p>
  </footer>
</body>
</html>














<?php

$keyword = $_GET['keyword'];



$keyword = $_GET['keyword'];

/* on se connecte a la bdd */
$bdd = new PDO("mysql:host=localhost;dbname=videos;charset=utf8", "root");
/* requete sql pour rechercher dans la base de donnees les enregistrements de video correspondants au mot cle recherché */
$stmt = $bdd->prepare('SELECT * FROM videos WHERE title LIKE :keyword OR description LIKE :keyword');
$stmt->bindValue(':keyword', "%$keyword%", PDO::PARAM_STR);
$stmt->execute();
$results = $stmt->fetchAll();


foreach ($results as $row) {
    echo '<p>'.$row['title'].'</p>';
 }
// Récupération des films à partir de la base de données
if (isset($_POST['search'])) {
    $text = $_POST['text'];

    // Récupération de l'image correspondant au texte saisi
    $query = "SELECT * FROM images WHERE cheminRelatif LIKE '%$text%' OR description LIKE '%$text%'";
    $result = $bdd->query($query);
    $image = $result->fetch();

    if ($image) {
        echo '<img src="data:Images/sonic le film.jpeg;base64,' . base64_encode($image['data']) . '" alt="' . $image['name'] . '">';
    } else {
        echo 'Aucune image correspondant au texte saisi.';
    }
}
?>



