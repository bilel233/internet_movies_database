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

  <!-- Ajoutez le contenu de
votre site -->

  <div class="container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/XFPOBERTZwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hlgwRr_7gr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CUCygdUCb34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JxOsr8gidwc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ua3qXksEIdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/_LUWnjT3iks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/h1Jv5WdOrz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/i8529cjgCOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/0LXyf7Capjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-card">
    <form action="Panier.php" method="POST">
    <input type="hidden" name="item_id" value="123">
    <input type="submit" value="Ajouter au panier">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/H0J23Tk_lfY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    
  </div>

  
  <!-- Ajoutez un pied de page -->
  <footer>
    <p>Copyright 2021 - Mon site de streaming</p>
  </footer>
</body>
</html>
