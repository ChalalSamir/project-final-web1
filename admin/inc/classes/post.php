<?php


    class Post {
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

               echo 'Erreur';
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
                echo 'Article ajouté !';
            }
        }

        public function update(PDO $con, $id) {
			$title = $_POST['title'];
			$content = $_POST['content'];
			$date_article = $_POST['date_article'];
			$paragraph_one = $_POST['paragraph_one'];
			$paragraph_two = $_POST['paragraph_two'];
			$paragraph_three = $_POST['paragraph_three'];
			$paragraph_four = $_POST['paragraph_four'];
			$paragraph_five = $_POST['paragraph_five'];
			$paragraph_six = $_POST['paragraph_six'];
			$paragraph_seven = $_POST['paragraph_seven'];
			$paragraph_eight = $_POST['paragraph_eight'];
			$paragraph_nine = $_POST['paragraph_nine'];
			$paragraph_ten = $_POST['paragraph_ten'];
			$paragraph_eleven = $_POST['paragraph_eleven'];
			$paragraph_twelve = $_POST['paragraph_twelve'];
			$paragraph_thirteen = $_POST['paragraph_thirteen'];

				$req = $con->prepare('
					UPDATE articles
					SET title = :title,
							content = :content,
							date_article = :date_article,
							paragraph_one = :paragraph_one,
							paragraph_two = :paragraph_two,
							paragraph_three = :paragraph_three,
							paragraph_four = :paragraph_four,
							paragraph_five = :paragraph_five,
							paragraph_six = :paragraph_six,
							paragraph_seven = :paragraph_seven,
							paragraph_eight = :paragraph_eight,
							paragraph_nine = :paragraph_nine,
							paragraph_ten = :paragraph_ten,
							paragraph_eleven = :paragraph_eleven,
							paragraph_twelve = :paragraph_twelve,
							paragraph_thirteen = :paragraph_thirteen
					WHERE id =' . $id);
				$req->bindParam(':title', $title);
				$req->bindParam(':content', $content);
				$req->bindParam(':date_article', $date_article);
				$req->bindParam(':paragraph_one', $paragraph_one);
				$req->bindParam(':paragraph_two', $paragraph_two);
				$req->bindParam(':paragraph_three', $paragraph_three);
				$req->bindParam(':paragraph_four', $paragraph_four);
				$req->bindParam(':paragraph_five', $paragraph_five);
				$req->bindParam(':paragraph_six', $paragraph_six);
				$req->bindParam(':paragraph_seven', $paragraph_seven);
				$req->bindParam(':paragraph_eight', $paragraph_eight);
				$req->bindParam(':paragraph_nine', $paragraph_nine);
				$req->bindParam(':paragraph_ten', $paragraph_ten);
				$req->bindParam(':paragraph_eleven', $paragraph_eleven);
				$req->bindParam(':paragraph_twelve', $paragraph_twelve);
				$req->bindParam(':paragraph_thirteen', $paragraph_thirteen);
				$req->execute();

				echo 'L\'article a bien été modifé';
			
    }

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
}

?>