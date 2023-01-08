

<!DOCTYPE html>
<html>
  <head>
    <title>site-action</title>
    <title>Ma bannière</title>
    <?php echo '<link rel="stylesheet" href="styleAction.css">'; ?>
    <meta charset="UTF-8">
    <meta charset="utf-8">
  </head>
  <body>
  <div class="banner">
    <h1>Bienvenue sur mon site de streaming !</h1>
    <p>Regardez vos films et séries préférés en illimité et sans publicité.</p>
    <button class="button">Commencer à regarder</button>
  </div>
  <br>
  <br>


  <form method="POST" action="formulaireAction.php">
  <input type="text" name="query" placeholder="Recherche">              <!-- formulaire de soumission-->
  <input type="submit" value="Rechercher">
</form>

    <h1>Action</h1>
    <p>des videos basees sur le theme de l'action. Avec ceci, vous pourrez en apprendre bien plus. Les videos sont toujours bases sur l'apprentisages d'un instrument de musique, cequi vous permettra de vous ameliorez ou bien de commencez son etude.</p>
    <br>
    <h2>Divers instruments de musiques vous sont proposes en rapport avec l'action</h2>
    <br>
    <p> A vous de choisir la video qui vous convient. Vous pouvez optez pour le violocelle, la guitare, le piano ou meme le violon. Tout cela regroupe a petit forma </p>
    <p> Avez-vous parfois le sentiment d'etre perdu sur internet face a la quantite de partitions et de videos mides a dispositions ? Comment vous orientez vous sur le web
      en ayant confiance dans son contenu ? </p>
   <br>
    <p>Sur ce site, vous decouvrirez des videos qui parlent principalement d'instrument. Ces instruments de musiques s'adresse egalement aux amateurs melomanes </p>
    <p> En parcourant toutes les pages, vous profiterez de l'expertise et des investigations qui met ses competences et son energie à votre service dans le but de partager la passion de son metier en vous aidant à trouver votre chemin dans le labyrinthe d'internet </p>
    <br>
    <p> Souhaitez -vous recuperez facilement des partitions gratuites et libres d'acces organises par epoques et par niveaux de difficulté ? vous profiterez également d'enregistrements de qualité associés à une grande partie des oeuvres d'actions pour mieux vous decider et mieux les comprendre </p>
      <h2>"Entrez dans le Partiontheque" </h2>
      <p> Vous ne trouvez pas les morceaux de votre choix ? Consultez la Partitionthèque qui regroupe toutes les partitions digitales du répertoire que vous pourrez télécharger en quelques minutes seulement.</p>
    <h2> "Visionnez les videos" </h2>
    <p>​Souhaitez-vous développer votre culture musicale du violon en visionnant des vidéos consacrées aux masterclasses, aux interviews et aux concerts donnés par les plus grands violonistes depuis près d'un siècle ?  </p>
    <hr>
    <h3> titre : Crazy In Love - Fifty Shades of Grey | Easy PIANO TUTORIAL
    <video src = "https://www.youtube.com/watch?v=pKdMhkciwrs&list=PL6urkeK7KgD41JDZRHaQzdKlHrJ5-fvdr&index=1" controls></video>       <!-- ajout de la video -->
    <h3> prix : 4.50 €


      <br>
      realisateur : Alison Sparrow : theme : Action </h3>
     lien :  <a href="https://www.youtube.com/watch?v=pKdMhkciwrs&list=PL6urkeK7KgD41JDZRHaQzdKlHrJ5-fvdr&index=1">Cliquez ici pour accéder à la page </a>  <!-- creation du lien -->
      <br>



      <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                 <!-- ajout de la video au panier  -->
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>
<hr>
  <!-- ajout de la video -->
  <video src = "https://www.youtube.com/watch?v=0XDk9FC25yo" controls></video>  <!-- theme de games au throne  -->
  <h3> Game of Thrones Theme </h3>
  <br>
  <h3> prix : 5.50 € </h3>
    <br>
    <h3>realisateur : Alison Sparrow </h3>
    <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                 <!-- ajout de la video au panier  -->
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>
<hr>

<!-- ajout de la video -->


<video src = "https://www.youtube.com/watch?v=wE3G7VNMgKg" controls></video> 
<h3> titre : Alan Walker - Faded for violin and piano (COVER) </h3>
<a href = "https://www.youtube.com/watch?v=Cm_N-hqbElc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4"> Lien vers toutes les videos du realisateur </a>
<br>
<h3> prix : 7.00€ </h3>
    <h3>  realisateur : Alisson Sparrow </h3>

     <!-- ajout de la video au panier  -->

     <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>  

<hr>

<!-- ajout de la video -->
<video src = "https://www.youtube.com/watch?v=Cm_N-hqbElc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4" controls></video> 
<h3> titre : Imagine Dragons - Believer for violin and piano (COVER) </h3>
<a href = "https://www.youtube.com/watch?v=Cm_N-hqbElc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4"> Lien vers toutes les videos du realisateur </a>
<br>
<h3> prix : 8.00 € </h3>
<h3>  realisateur : Alisson Sparrow </h3>
<hr>

  <!-- ajout de la video au panier  -->

  <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>  


<!-- ajout de la video -->

<video src = "https://www.youtube.com/watch?v=fjchrT-L9QU&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=2" controls></video> 
<h3> titre : Christina Perri - A Thousand Years </h3>
<a href =   https://www.youtube.com/watch?v=Cm_N-hqbElc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4"> Lien vers toutes les videos du realisateur </a>
<br>
<h3> prix : 8.20€ </h3>
<h3>  realisateur : Alisson Sparrow </h3>
 <!-- ajout de la video au panier  -->

 <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>
<hr>

<!-- ajout de la video -->

<video src = "https://www.youtube.com/watch?v=YnoIoRUciAY&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=3" controls></video> 
<h3> titre : Coldplay - The Scientist </h3>


<a href =   "https://www.youtube.com/watch?v=YnoIoRUciAY&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=3"> Lien vers toutes les videos du realisateur </a>
<br>
<h3> prix : 4.20€ </h3>
<h3>  realisateur : Alisson Sparrow </h3>
 <!-- ajout de la video au panier  -->

 <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>
<hr>

<!-- ajout de la video -->

<video src = "https://www.youtube.com/watch?v=12ibMHRQDGc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=4" controls></video> 
<h3> River Flows in You </h3>
<a href =   "https://www.youtube.com/watch?v=12ibMHRQDGc&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=4"> Lien vers toutes les videos du realisateur </a>
<br>
<h3> prix : 4.20€ </h3>
<h3>  realisateur : Alisson Sparrow </h3>
 <!-- ajout de la video au panier  -->
 <form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>
<hr>
<!-- ajout de la video -->
<video src = "https://www.youtube.com/watch?v=y4-7fqaDj4c&list=PLb5HHk6gBt1KPgPJ9LrhTXKMetOzfY-C4&index=5" controls></video> 
<h3> Hallelujah  in You </h3>
 controls></video> 
 <br>
 <h3> prix : 3.90€ </h3>
<h3>  realisateur : Alisson Sparrow </h3>
 <!-- ajout de la video au panier  -->
<!-- ajout de la video au panier  -->
<form action="ajouter_au_panier.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Titre de la video : </label><br>
        <input type="text" id="video-title" name="video-title"><br>
        <label for="video-file">Selectionnez le fichiez video :</label><br>                
        <input type="file" id="video-file" name="video-file"><br><br>
        <input type="submit" value = "Ajouter la video">
</form>

  </body>
</html>
