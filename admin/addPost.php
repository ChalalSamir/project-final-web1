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
