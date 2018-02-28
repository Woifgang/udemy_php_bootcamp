<?php
  include './../init.php';

  $postController = $container->make("postsController");
  
  $postController->post();

?>
  <?php
  /*
  include 'elements/header.php';
?>

<h1>POST.PHP</h1>

<?php
    $postsRepo = $container->make("postsRepository");
    $id = $_GET['id'];
    $post = $postsRepo->fetchPost($id);
    //var_dump($post);
?>

<div class="panel panel-default">
  <div class="panel-heading"><h3> <?php echo $post['title']; ?> </h3> </div>
  <div class="panel-body">
    <?php echo nl2br($post['content']); ?>
  </div>
</div>


<?php include 'elements/footer.php';

*/?>
