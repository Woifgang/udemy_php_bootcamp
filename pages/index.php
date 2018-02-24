<?php
  include './../database.php';
  include 'elements/header.php';
?>

//123

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php $result = fetch_posts(); ?>

<ul>
  <?php foreach ($result as $row): ?>
  <li>
    <a href="post.php?id=<?php echo $row["id"]; ?>">
      <?php echo "{$row["title"]}"; ?>
    </a>
  </li>
  <?php endforeach; ?>
</ul>

<?php include 'elements/footer.php'; ?>
