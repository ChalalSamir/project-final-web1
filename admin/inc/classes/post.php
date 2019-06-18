<?php


    class Post {

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
}

?>