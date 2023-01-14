<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <style>
      /* CSS styles go here */
      body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
      }
      header {
        background-color: #333333;
        color: #ffffff;
        padding: 20px;
        text-align: center;
      }
      header h1 {
        margin: 0;
      }
      main {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      .card {
        background-color: #ffffff;
        padding: 20px;
        margin-bottom: 20px;
      }
      .card img {
        max-width: 100%;
      }
      /* styles de base pour toutes les tailles d'écran */
body {
    font-size: 16px;
    margin: 0;
}

/* styles pour les écrans de petite taille */
@media (max-width: 600px) {
    body {
        font-size: 14px;
    }
}

/* styles pour les écrans de taille moyenne */
@media (min-width: 601px) and (max-width: 900px) {
    body {
        font-size: 18px;
    }
}

/* styles pour les écrans de grande taille */
@media (min-width: 901px) {
    body {
        font-size: 20px;
    }
}

    </style>
  </head>
  <body>
    <header>
      <h1>Accueil</h1>
    </header>
    <main>
      <div class="card">
        <h2>Mon site de streaming</h2>
        
      </div>
      <div class="card">
        <h2>types de films</h2>
        <ul>
          <li>Action</li>
          <li>Drama</li>
          
          
        </ul>
      </div>
      
        
        
      </div>
    </main>
  </body>
</html>


<?php
  // Connection à la BDD
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "videos";
  $conn = mysqli_connect($host, $username, $password, $dbname);
  // Vérification de la connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // Récupération des images de la BDD
  $query = "SELECT * FROM images";
  $result = mysqli_query($conn, $query);
?>
<main>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card">
      <h2><?php echo $row['title']; ?></h2>
      <img src="Images/<?php echo $row['title']; ?>" alt="<?php echo $row['description']; ?>">
      <p><?php echo $row['description']; ?></p>
    </div>
    <?php } ?>
  </main>
