<!DOCTYPE html>
<html>
<head>
    <title>Mon panier</title>
    <link rel="stylesheet" type="text/css" href="Panier.css">
</head>
<body>
    
    <header>
        <h1>Mon panier</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Nom de l'article</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
          
        </table>
    </main>
    
</body>
</html>






<?php
// Établir une connexion à la base de données
$conn = new mysqli("localhost", "root", "", "videos");

// Récupérer l'ID du panier à afficher
$item_id = $_POST['item_id'];

// Préparer la requête pour sélectionner les éléments du panier
$query = "SELECT * FROM panier WHERE item_id = $item_id";

// Exécuter la requête
$result = $conn->query($query);

// Vérifier si la requête a retourné des résultats
if ($result->num_rows > 0) {
    // Afficher les éléments du panier
    while($row = $result->fetch_assoc()) {
        echo "ID de l'article : " . $row["item_id"] . " - Nom de l'article : " . $row["item_name"] . "<br>";
    }
} else {
    echo "Aucun élément dans ce panier.";
}

// Fermer la connexion à la base de données
$conn->close();
?>


