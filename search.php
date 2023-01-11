
<?php

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
 



 
 

?>
