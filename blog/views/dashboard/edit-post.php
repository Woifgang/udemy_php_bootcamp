<?php include __DIR__ . "/../layouts/header.php" ?>

    <br>
    <br>

    <div class="panel panel-default">
        <div class="panel-heading">
            <input type="text" value="<?php echo e($editPost['title']); ?>" class="form-control">
        </div>
        <div class="panel-body">
            <textarea class="form-control" rows="15">
                <?php
                    echo nl2br(e($editPost['content']));
                ?>
            </textarea>
        </div>
    </div>
    <input class="btn btn-default" type="submit" value="Post speichern">

<?php include __DIR__ . "/../layouts/footer.php" ?>