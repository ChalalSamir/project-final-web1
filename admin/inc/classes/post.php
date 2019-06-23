<?php


    class Post {
<<<<<<< HEAD
        /**
         * Function addPost
         * Function used to....
         * @param PDO: .....
         * @return: error ? echo 'erreur' : echo 'good'
         */
        public function addPost(PDO $con)
        {
            $title = $_POST['title'];
            $content = $_POST['content'];
            if (empty($titre) and empty($content)) {

               echo 'erreur';
                die();
            } else {
                $req = $con->prepare('
				INSERT INTO articles (title, content) 
				VALUES (
						 :title,
						 :content
				)
			');
                $req->bindParam(':title', $title);
                $req->bindParam(':content', $content);
                $req->execute();
                echo 'good';
            }
        }

        public function getAll(PDO $con) {

            $req = $con->query('
            SELECT * FROM articles order by date DESC
            ');
            return $req->fetchAll(PDO::FETCH_ASSOC);

        }

        public function addPostGet(PDO $con)
        {
            $title = $_GET['title'];
            $content = $_GET['content'];
            if (empty($titre) and empty($content)) {

               echo 'erreur';
                die();
            } else {
                $req = $con->prepare('
				INSERT INTO articles (title, content) 
				VALUES (
						 :title,
						 :content
				)
			');
                $req->bindParam(':title', $title);
                $req->bindParam(':content', $content);
                $req->execute();
                echo 'good';
            }
        }

=======

        public function getAll(PDO $con) {

            $req = $con->query('
            SELECT * FROM articles order by date DESC
            ');
            return $req->fetchAll(PDO::FETCH_ASSOC);

        }

        public function getOne(PDO $con, $id)  {

            $req =  $con->query('SELECT * FROM articles WHERE id=' . $id);
            return $req->fetch(PDO::FETCH_ASSOC);
        }

>>>>>>> 79b9a7b13ba5887078ee18df4528bc2d64015b5d
        public function update(PDO $con, $id) {
			$title = $_POST['title'];
			$content = $_POST['content'];
			if (empty($titre) and empty($content)) {
                echo 'champs incomplets';

			} else {

				$req = $con->prepare('
					UPDATE articles
					SET title = :title,
							content = :content
					WHERE id =' . $id);
				$req->bindParam(':title', $title);
				$req->bindParam(':content', $content);
				$req->execute();

				echo 'modifié';
			}
    }
<<<<<<< HEAD

    public function getOne(PDO $con, $id)  {
        $req =  $con->query('SELECT * FROM articles WHERE id=' . $id);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function delete(PDO $con, $id) {
        $req = $con->prepare(' SELECT * FROM articles WHERE id = :id');
        $req->bindParam(':id', $_GET['id']);
        $req->execute();
        $id_bdd = $req->fetch(PDO::FETCH_ASSOC);

        if($id_bdd) {
            $req = $con->query('DELETE FROM articles WHERE id='. $id);
            echo 'Article supprimé';
        } else {
            echo 'Article introuvable';
        }
    }
=======
>>>>>>> 79b9a7b13ba5887078ee18df4528bc2d64015b5d
}

?>