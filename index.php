<?php
require 'assets/config/bootstrap.php';
include 'assets/inc/header.php';
$page_title = 'TchernoByLegassov - Administrateur';

$user->disconnect();
if (isset($_SESSION['user'])) {
  header('Location: index.php');
}
if ( isset($_POST['login']) ) {
	$user->connect($pdo);
}

if (isset($_POST["disconnect"])) {
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
?> 
        <a href="index.php?disconnect">Deconnexion</a>
 <?php 
}
?>





