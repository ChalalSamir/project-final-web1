<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Tchernobyl - Administration</title>
</head>
<body>
<div class="container">

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

        <div class="form-group">
        <form class="connexion__form" action="index.php" method="post">
            <label class="exampleInputUsername" for="indent">Email / Pseudo</label>
            <input class="form-control" id="indent" type="text" class="form-control" name="identifiant">

            <label class="exampleInputPassword1" for="password">Mot de passe</label>
            <input class="form-control" type="password" id="password" name="password" class="form-control">

            <input class="btn btn-primary"  type="submit" name="login" class="" value="Connexion"> <br>
        </form>
        </div>
      <?php
  } else {
      echo 'Bonjour ' . $_SESSION['user']['pseudo'];?> <br>
      <a href="addPost.php"><div class="btn btn-primary">Gérer les articles</div></a>
      <a href="index.php?disconnect"><div class="btn btn-danger">Déconnexion</div></a>
      <?php
  }
  ?>
</div>
</body>
</html>