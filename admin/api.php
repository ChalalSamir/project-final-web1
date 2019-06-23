<?php require __DIR__ . '/inc/bootstrap.php'; 
// API
  header('Content-Type: application/json');
  if(isset($_GET['id'])) {
    $retour = array();
    $retour['articles'] = $post->getOne($pdo, $_GET['id']);
    echo json_encode($retour);
  } else {
    $retour = array();
    $retour['articles'] = $post->getAll($pdo);
    echo json_encode($retour);
  }
?>
