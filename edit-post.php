<?php include __DIR__ . "/../layouts/header.php" ?>

    <br>
    <br>

	<form method="POST" action="edit-post?id<?php echo e($editPost['id']) ?>" class="form-hozizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<input type="text" name="title" value="<?php echo e($editPost['title']); ?>" class="form-control">
			</div>
			<div class="panel-body">
				<textarea name="content" class="form-control" rows="15">
					<?php
						echo nl2br(e($editPost['content']));
					?>
				</textarea>
			</div>
		</div>
		<input class="btn btn-default" type="submit" value="Post speichern">
	</form>
	
<?php include __DIR__ . "/../layouts/footer.php" ?>