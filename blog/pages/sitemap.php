<?php
  include './../init.php';
  include 'elements/header.php';
?>



<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php $result = fetch_posts(); ?>

<ul>
  <?php foreach ($result as $row): ?>
  <li>
    <?php echo "{$row["title"]}"; ?>
  </li>
  <?php endforeach; ?>
</ul>

<?php include 'elements/footer.php'; ?>
