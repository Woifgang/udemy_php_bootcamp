<?php require __DIR__ . '/../layouts/header.php'; ?>

<br>
<br>

<?php if (!empty($error)):?>
    <p>
        <?php echo $error; ?>
    </p>
<?php endif; ?>

<form  method="POST" method="login" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-2 control-label">
            Benutzername
        </label>
        <div class="col-sm-9">
            <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            Passwort
        </label>
        <div class="col-sm-9">
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    <input type="submit" value="Login" class="btn btn-primary"/>




</form>



<?php require __DIR__ . '/../layouts/footer.php'; ?>




