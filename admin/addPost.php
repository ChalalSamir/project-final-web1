<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Tchernobyl - Admin - Ajout d'article</title>
  <style>
  .postAdmin {
     
     height: 100px;
     display: flex;
     flex-direction: row;
     margin-top: 10px;
     justify-content: space-around;
 }
 
 .postAdmin__modifier {
     height: 30px;
 }
 </style>
</head>
<body>
  <div class="container">

  <h2>Liste des articles</h2>
<?php
require __DIR__ . '/inc/bootstrap.php';
if (isset($_POST['send'])) {
    $post->update($pdo, intval($_GET['id']));
    }

    if(isset($_GET['delete'])) {
        $post->delete($pdo, $_GET['id']);
    }
    
    if(isset($_GET['modify'])) {
        $currentPost = $post->getOne($pdo, $_GET['id']);
    ?>
      <!-- MODIFY  SECTION -->
      <article class="post">
        <div class="form-group">
        <form action="addPost.php?id=<?= $currentPost['id']; ?>" method="post">
          <label class="createLabel" for="title">Titre</label>
          <input class="form-control" type="text" name="title" value="<?= $currentPost['title']?>">
          <label class="createLabel" for="content">Contenu 1</label>
          <textarea class="form-control" name="content" id="content" cols="60" rows="10"><?= $currentPost['content']?></textarea>
          <label class="createLabel" for="date_article">Date</label>
          <textarea class="form-control" name="date_article" id="content" cols="60" rows="10"><?= $currentPost['date_article']?></textarea>
          <label class="createLabel" for="paragraph_one">Paragraphe 1</label>
          <textarea class="form-control" name="paragraph_one" id="content" cols="60" rows="10"><?= $currentPost['paragraph_one']?></textarea>
          <label class="createLabel" for="paragraph_two">Paragraphe 2</label>
          <textarea class="form-control" name="paragraph_two" id="content" cols="60" rows="10"><?= $currentPost['paragraph_two']?></textarea>
          <label class="createLabel" for="paragraph_three">Paragraphe 3</label>
          <textarea class="form-control" name="paragraph_three" id="content" cols="60" rows="10"><?= $currentPost['paragraph_three']?></textarea>
          <label class="createLabel" for="paragraph_four">Paragraphe 4</label>
          <textarea class="form-control" name="paragraph_four" id="content" cols="60" rows="10"><?= $currentPost['paragraph_four']?></textarea>
          <label class="createLabel" for="paragraph_five">Paragraphe 5</label>
          <textarea class="form-control" name="paragraph_five" id="content" cols="60" rows="10"><?= $currentPost['paragraph_five']?></textarea>
          <label class="createLabel" for="paragraph_six">Paragraphe 6</label>
          <textarea class="form-control" name="paragraph_six" id="content" cols="60" rows="10"><?= $currentPost['paragraph_six']?></textarea>
          <label class="createLabel" for="paragraph_seven">Paragraphe 7</label>
          <textarea class="form-control" name="paragraph_seven" id="content" cols="60" rows="10"><?= $currentPost['paragraph_seven']?></textarea>
          <label class="createLabel" for="paragraph_eight">Paragraphe 8</label>
          <textarea class="form-control" name="paragraph_eight" id="content" cols="60" rows="10"><?= $currentPost['paragraph_eight']?></textarea>
          <label class="createLabel" for="paragraph_nine">Paragraphe 9</label>
          <textarea class="form-control" name="paragraph_nine" id="content" cols="60" rows="10"><?= $currentPost['paragraph_nine']?></textarea>
          <label class="createLabel" for="paragraph_ten">Paragraphe 10</label>
          <textarea class="form-control" name="paragraph_ten" id="content" cols="60" rows="10"><?= $currentPost['paragraph_ten']?></textarea>
          <input class="btn btn-success" type="submit" name="send">
          <a href="addPost.php"><div class="btn btn-danger">Retour</div></a>
        </form>
        </div>
      </article>
    <?php 
    }   
    else {
        foreach($post->getAll($pdo) as $post) {?>
         <div class="postAdmin">
          <p>#<?= $post['id']; ?></p>
        <p class="postAdmin__title" ><?= $post['title']?></p>
        <a href="addPost.php?modify&id=<?= $post['id'];?>"><div class="btn btn-dark">Editer</div></a>
        <a href="addPost.php?delete&id=<?= $post['id'];?>"><div class="btn btn-danger">Supprimer</div></a>
        </div>

        <?php
        }
    ?>
    <?php 
    // endforeach; 
    }
    ?>
        <a href="index.php"><div class="btn btn-secondary">Aller à l'accueil</div></a>

    </div>
   
</body>
</html>