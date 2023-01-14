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
    <a href="http://localhost:8888/phpProject/Accueil.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Accueil</a>
    <a href="http://localhost:8888/phpProject/Panier.php" target="_blank" title="Cliquez pour ouvrir dans un nouvel onglet">Panier</a>


    </nav>
  </header>

  <!-- Ajoutez le contenu de
votre site -->

  <div class="container">
    
  <iframe width="560" height="315" src="https://www.youtube.com/embed/kVKwsqTaVyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="0">
    <input type="submit" value="Ajouter au panier">
</form>





    <iframe width="560" height="315" src="https://www.youtube.com/embed/G1Na0rKWY74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="1">
    <input type="submit" value="Ajouter au panier">
</form>



    <iframe width="560" height="315" src="https://www.youtube.com/embed/VjaLDf-ouJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/NCZTYdAP6w0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/SqH3-sCkZQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/2TAOizOnNPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/KUX6KI3-AjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/KPiJgEc7Ux8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/99XOxDLMvBg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
</form>


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
