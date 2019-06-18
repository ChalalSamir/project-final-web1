<?php

class User {
	

	 public function __construct()
	{
	    $this->message = new Alert();
	} 

	public function connect(PDO $con) {
		// Rechercher l'user
		$req = $con->prepare('
			SELECT *
			FROM users
			WHERE
				mail = :identifiant
				OR pseudo = :identifiant
		');
		$req->bindParam(':identifiant', $_POST['identifiant']);
		$req->execute();

		$user = $req->fetch(PDO::FETCH_ASSOC);
		if (!$user) {

            echo"Aucun utilisateur n'a été trouvé";


        } else if(!password_verify($_POST['password'], $user['password'])) {
			// si le mdp ne correspond pas au hash en BDD
            echo"Le mot de passe ne correspond pas";

        } else {
            echo 'Salut' . $_SESSION['pseudo'];
            $_SESSION['user'] = $user;
            
        } 
	}

	public function disconnect() {
		// Déconnexion

		if (isset($_POST['logout'])) {
			
			unset($_SESSION['user']);
			header('Location: index.php');
		}
	}
}