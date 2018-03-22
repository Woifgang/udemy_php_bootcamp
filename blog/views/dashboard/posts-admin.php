<?php include __DIR__ . "/../layouts/header.php" ?>

<br>
<br>
<h1>POSTS ADMIN</h1>
<ul>
    <?php foreach ($editPosts as $post): ?>
        <li>
            <a href="edit-post?id=<?php echo e($post->id); ?>">
                <?php echo e($post->title); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layouts/footer.php" ?>
