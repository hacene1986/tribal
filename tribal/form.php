<?php include('form_log.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>TBB</title>
</head>
<body>
<header>
  <div id="sidebar">
              <div class="toggle-btn" onclick="toggleSidebar()">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
              <ul>
                  <li><a href="index.html">Acceuil</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="photos.html">Media</a></li>
                  <li><a href="evenement.html">Evenements</a></li>
                  <li><a href="espacepro.html">Espace PRO</a></li>
                  <li><a href="form.php">Avis</a></li>

              </ul>
          </div>
    </header>
    <section class="container formulaire">
      <h2><i class="fas fa-pencil-alt"></i> Laissez nous vos commentaires</h2>
      <fieldset>
        <legend><i class="far fa-file"></i> Nouveau Commentaire</legend>
        <form class="" action="" method="post">
          <h3>nom:</h3>
          <input type="text" name="name" value="" placeholder="nom" required>
          <h3>Prénom:</h3>
          <input type="text" name="lastname" value="" placeholder="prénom" required>
          <h3>Mail:</h3>
          <input type="text" name="email" value="" placeholder="Contac@mail.fr" required>
          <h3>Commentaire:</h3>
          <textarea name="commentaire" rows="10" cols="50"></textarea required></br>
          <div class="btn">
            <button type="submit" name="submit_commentaire" class="button"></i>Ajouter</button>
          </div>

        </form>
      </fieldset>
<div class="com">
  <?php

     if(isset($c_erreur)){ echo $c_erreur; }

    foreach ($c as $key => $value) {

       echo "<h3>".$value['lastname']."</h3>";
       echo "<p>".$value['commentaire']."</p>";
    }

    

     ?>
</div>





  </section>
  <footer>
    <p>Retrouvez-Nous sur les réseaux sociaux</p>
    <div class="social">
      <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
      <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
      <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
      <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
    </div>
    <small>
      <img src="img/tbb1.jpg" alt="tbb">
      <p>Developed By HACENE KHERBOUCHE</p>
    </small>
  </footer>
      <script src="app.js"></script>
</body>
</html>
