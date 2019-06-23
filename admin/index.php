<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>test</title>
</head>
<body>

  <?php
  require '../assets/config/bootstrap.php';
  $page_title = 'TchernoByLegassov - Administrateur';


  if (isset($_POST['login']) ) {
      $user->connect($pdo);
  }

  if(isset($_GET['disconnect'])) {
      $user->disconnect();
  }


  if(!isset($_SESSION['user'])) {


      ?>


      <form class="connexion__form" action="index.php" method="post">
          <label class="form__label" for="indent">Email / Pseudo</label>
          <input class="form__field" id="indent" type="text" class="form-control" name="identifiant">

          <label class="form__label" for="password">Mot de passe</label>
          <input class="form__field" type="password" id="password" name="password" class="form-control">

          <input class="form__submit"  type="submit" name="login" class="" value="Connexion"> <br>
      </form>

      <?php

  } else {
      echo 'Salut ' . $_SESSION['user']['pseudo'];?> <br>
      <a href="index.php?disconnect">Déconnexion</a> <br>
      <a href="addPost.php">Ajouter un post</a>
      <?php

  }
  ?>
</body>
</html>