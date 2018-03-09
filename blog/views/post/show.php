<?php include __DIR__ . "/../layouts/header.php" ?>

<br>
<br>

<div class="panel panel-default">
  <div class="panel-heading">
        <h3> 
            <?php
                 echo $post['title'];
            ?> 
        </h3> 
    </div>
  <div class="panel-body">
    <?php 
        echo nl2br($post['content']); 
    ?>
  </div>
</div>

<ul class="list-group">
    <?php foreach ($comments as $comment): ?>
        <li class="list-group-item">
            <?php
                echo nl2br($comment->content) ;
            ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layouts/footer.php" ?>