<?php include __DIR__ . "/../layouts/header.php" ?>

<br>
<br>

<ul>
  <?php foreach ($posts as $post): ?>
  <li>
    <a href="post.php?id=<?php echo $post->id; ?>">
      <?php echo "{$post->title}"; ?>
    </a>
  </li>
  <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layouts/footer.php" ?>
