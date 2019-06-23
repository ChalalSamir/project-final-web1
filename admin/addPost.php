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
    
        <form action="addPost.php?id=<?= $currentPost['id']; ?>" method="post">
    
          <label class="createLabel" for="title">Titre</label>
          <input class="createInput" type="text" name="title" value="<?= $currentPost['title']?>">
    
          <label class="createLabel" for="content">Message</label>
          <textarea class="createInput" name="content" id="content" cols="60" rows="10"><?= $currentPost['content']?></textarea>
    
          <input class="createSubmit" type="submit" name="send">
        </form>
      </article>
    
    
    <?php 
    }   
    else {


        foreach($post->getAll($pdo) as $post) {?>
         <div class="postAdmin">
        <p class="postAdmin__title" ><?= $post['title']?></p>
        <p class="postAdmin__content" ><?= $post['content'] ?></p>
        <p class="postAdmin__date" ><?= $post['date'] ?></p>
        <a href="addPost.php?modify&id=<?= $post['id'];?>">[Editer]</a>
        <a href="addPost.php?delete&id=<?= $post['id'];?>">[Supprimer]</a>
        </div>

        <?php

        }
    ?>
    
       
    
    <?php 
    // endforeach; 
    }
    ?>
    

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