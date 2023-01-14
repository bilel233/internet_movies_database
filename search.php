

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



