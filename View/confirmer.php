<form action="Model/supprimer.php" method="post">
    Are you sure?
    <input type="submit" name="confirm" value="Yes">
    <input type="submit" name="confirm" value="No">

    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
</form>