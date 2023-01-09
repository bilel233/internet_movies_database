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
    <h1>Mon site de streaming</h1>
    <nav>
      <a href="#">Accueil</a>
      <a href="#">Catégories</a>
      <a href="#">Mon compte</a>
    </nav>
  </header>

  <!-- Ajoutez le contenu de
votre site -->

  <div class="container">
    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image1.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>
    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image2.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>
    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>
    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>
    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>

    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>

    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>

    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>

    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>

    <div class="video-card">
      <div class="thumbnail" style="background-image: url(image3.jpg);"></div>
      <h2>Titre de la vidéo</h2>
      <p>Description de la vidéo</p>
    </div>
    
  </div>
  <!-- Ajoutez un lecteur vidéo -->
  <div class="video-player">
    <video src="video.mp4" controls></video>
  </div>
  <!-- Ajoutez un pied de page -->
  <footer>
    <p>Copyright 2021 - Mon site de streaming</p>
  </footer>
</body>
</html>
