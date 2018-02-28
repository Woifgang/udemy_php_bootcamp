<?php
  include './../init.php';

  $postController = $container->make("postsController");
  
  $postController->post();

?>