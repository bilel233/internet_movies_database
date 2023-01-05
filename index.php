



<!DOCTYPE html>
<html>

<head>
    <title>site</title>
    <?php echo '<link rel="stylesheet" href="style.css">'; ?>
    <meta charset="UTF-8">

</head>
<body>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Add a responsive class to the container element */
    .container {
      width: 80%;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="column">
      <h2>Column 1</h2>
      <p>Some content in column 1.</p>
    </div>
    <div class="column">
      <h2>Column 2</h2>
      <p>Some content in column 2.</p>
    </div>
  </div>
</div>

<form method="POST" action="url.php">
  <input type="text" name="name" placeholder="Recherche">              <!-- url de soumission-->
  <input type="submit" value="Rechercher">
</form>


<hr>
<h1>Delite Music </h1>

<p> Des videos de musics disponibles en integralites <br>
Que vous pouvez telechargez pour apprendre d'un instrument de musique </p>
<h3> A prix abordables et de tout genres </h3>
<p> la passion d'appendre d'un instrument  </p>
<p> Jouer d'un instrument de musique n'a jamais ete ausi simple, maintenant que les tutoriels en lignes <br> existent </p>
<p> Profiter desormais de plusieurs essais </p>
<p> Grace a ces videos, vous serez capables d'apprehendez vos instruments de musiques comme un professionel sans aucune hesitation </p>
<br>
<p> Ces instruments de musiques se jouent avec grace et vous serez capables d'acquerir cette grace sans aucun probleme </p>
<br>
<p> Les prix proposes sont tarifaires et en vaut la peine </p>

<img src="https://www.istockphoto.com/fr/photo/plan-rapproch%C3%A9-de-violon-gm1288532195-384459237" alt="Image">


<br>

  

<br>


<br>

<br>
<h3> Choissisez la video qui vous interesse </h3>
<br>

<h4> Apprenez le piano en 20 lecons concises </h4>
<br>

<br>

<br>
<video src="http://localhost:8888/database/index.php" controls></video>

<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>

<!--Formulaire d'envoi ajout au panier -->


<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>                                                  <!-- Formulaire de soumission Post-->
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<br>
<h4> prix : 7.50€ </h4>
<br>
<h4>Tutorial : One direction on Piano </h4>  


<video src = "https://www.youtube.com/watch?v=IkeMKNQaOXw&list=PL16C22D992491D8A1&index=2" controls></video>  <!-- ajout de la video -->

<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>  <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<video src = "https://www.youtube.com/watch?v=5HQ-qqcRMn8" controls></video>      <!-- ajout de la video -->



<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>   <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<br>
<h4> prix : 6.50€ </h4>
<br>
<h4> Beethoven's Moonlight Sonata no 14 </h4>
<video src = "https://www.youtube.com/watch?v=T8pfiP7MaIc&list=PL16C22D992491D8A1&index=3" controls></video>  <!-- ajout de la video -->
<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>    <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<br>
<h4> prix : 7.00€ </h4>
<h4> Tutorial : Echoes Yesterday </h4>
<video src = "https://www.youtube.com/watch?v=myPDol5KvDk&list=PL16C22D992491D8A1&index=1" controls></video>   <!-- ajout de la video -->
<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>  <!-- Creation d'un bouton ajouter au panier -->
<h4> prix : 7.00€ </h4>
<h4> Tutorial : When the Saints go marching </h4>
<video src = "https://www.youtube.com/watch?v=zH1LNlslx-I&list=PL16C22D992491D8A1&index=4" controls></video>    <!-- ajout de la video -->
<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>  <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<h4> prix : 7.90€ </h4>
<h4> Tutorial : How to play in 40 Lessons Guaranteed</h4>
<video src = "https://www.youtube.com/watch?v=5VU6gxrbR80" controls></video>       <!-- ajout de la video -->
<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>   <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<h4> prix : 5.10€ </h4>
<br>
<h4> Learn the Piano Lesson 1 & 2 | EASY | Beginner Lessons</h4>
<video src = "https://www.youtube.com/watch?v=bb0C37ACIuY&list=PL6urkeK7KgD4M9FI4JqF_rU6bZ6srK3Ry" controls></video>         <!-- ajout de la video -->

<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form> <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Traitement des données du formulaire
  // Envoi d'un email, enregistrement dans une base de données.
}
?>



<h4> prix : 5.10€ </h4>



</body>
<hr>
<p> apprener le violon en 21 lecons concises </p>
<h4> Learn the violin  Lesson 1 & 2 | EASY | Beginner Lessons</h4>
<video src = "https://www.youtube.com/watch?v=cI6C4lMYCtM&list=PL6urkeK7KgD49h3tZLnpCHqF2CcjeUjNW" controls></video>      <!-- ajout de la video -->

<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>   <!-- Creation d'un bouton ajouter au panier -->

<h4> prix : 7.90€ </h4>
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<h4>Learn the VIOLIN ONLINE | Lesson 1/30 | How to hold the violin & bow</h4>

<video src = "https://www.youtube.com/watch?v=iPbCdOsrDK4&list=PL6urkeK7KgD6z9rImgxwiqBYZVwq31zlg" controls></video>       <!-- ajout de la video -->
<h4> prix : 5.90€ </h4>
<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>

<h4>Learn the VIOLIN ONLINE | Lesson 2/30 - Parts of the violin</h4>

<video src = "https://www.youtube.com/watch?v=k2pxLr13ve4&list=PL6urkeK7KgD6z9rImgxwiqBYZVwq31zlg&index=2" controls></video>        <!-- ajout de la video -->
<h4> prix : 5.90€ </h4>

<form action="ajouter_au_panier.php" method="post">
  <input type="hidden" name="product_id" value="piano">
<button type="submit">Ajouter au panier</button> <!-- Creation d'un bouton ajouter au panier -->
</form>      <!-- Creation d'un bouton ajouter au panier -->
<form method="POST" action="formulaire.php" enctype="multipart/form-data">    
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Envoyer">
</form>
</html>


<?php 
// utilisations de jetons CSRF
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // verification de la reference du formulaire
  // Récupérer le jeton envoyé avec le formulaire 
  $token = $_POST['csrf_token'];
  
  // Vérifier que le jeton est valide
  if ($token !== $_SESSION['csrf_token']) {
    // Le jeton ne correspond pas, ignorer la soumission du formulaire
    exit;
  }
}

// connection à la base de donnes
//on prepare la requete
$pdo = new PDO('mysql:host=localhost;dbname=database', 'user', 'password');
$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :name AND password = :password');
// on lie les valeurs 
$stmt->bindValue(':name', $name, PDO::PARAM_STR); // la valeur name
$stmt->bindValue(':password', $password, PDO::PARAM_STR); // la valeur password
$stmt->bindValue(':id', $id, PDO::PARAM_STR); // la valeur id
// on execute les valeurs
$success = $stmt->execute();
//on recupere les valeurs

$res= $stmt->fetch(); // fetch recupere les valeurs
?>

