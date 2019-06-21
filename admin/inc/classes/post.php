<?php


    class Post {

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
}

?>