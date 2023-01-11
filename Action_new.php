<!DOCTYPE html>
<html>
<head>
  <title>Mon site de streaming</title>
  <style>
    /* Styles CSS pour votre site */
    body {
      margin: 0;
      font-family: sans-serif;
    }

    header {
      background-color: black;
      color: white;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    header nav {
      display: flex;
    }

    header nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }

    .video-card {
      background-color: lightgray;
      padding: 20px;
      text-align: center;
    }

    .video-card h2 {
      margin: 0;
      font-size: 18px;
    }

    .video-card p {
      margin: 0;
      font-size: 14px;
      color: gray;
    }

    .video-card .thumbnail {
      width: 100%;
      height: 0;
      padding-bottom: 75%;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      margin-bottom: 20px;
    }

    .video-player {
      width: 100%;
      height: 0;
      padding-bottom: 56.25%;
      background-color: black;
      position: relative;
    }

    .video-player video {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    footer {
      background-color: black;
      color: white;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Ajoutez votre en-tête -->
  <header>
    <h1>Mon site de streaming d'Action</h1>
    <form action="search.php" method="GET">
  <input type="text" name="query">
  <input type="submit" value="Rechercher">
</form>
<br>




    <nav>
    <a href="http://localhost:8888/phpProject/monCompte.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Mon compte</a>
    <a href="http://www.example.com" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Categories</a>
    <a href="http://localhost:8888/phpProject/Action.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Accueil</a>
    <a href="http://localhost:8888/phpProject/Panier.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Panier</a>


    </nav>
  </header>

  <!-- Ajoutez le contenu de
votre site -->

  <div class="container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/kVKwsqTaVyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/G1Na0rKWY74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VjaLDf-ouJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/NCZTYdAP6w0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/SqH3-sCkZQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2TAOizOnNPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/KUX6KI3-AjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/KPiJgEc7Ux8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/99XOxDLMvBg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CYV-mTqlI_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    
  </div>
  <!-- Ajoutez un lecteur vidéo -->
  
  <!-- Ajoutez un pied de page -->
  <footer>
    <p>Copyright 2021 - Mon site de streaming</p>
  </footer>
</body>
</html>
