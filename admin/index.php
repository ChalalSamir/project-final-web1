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


  require __DIR__ . '/inc/bootstrap.php';


  if(isset($_POST['send'])) {
      $post->addPost($pdo);
  }
  ?>

  <form action="#" method="post">
     <p> <label for="title">Titre : </label>
         <input type="text" name="title"></p>
     <p> <label for="content">Contenu : </label>
         <textarea name="content" cols="30" rows="10"></textarea></p>
      <input type="submit" name="send">
  </form>
</body>
</html>