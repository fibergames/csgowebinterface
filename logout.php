<!-->logout thing<-->
<?php
    session_start();
    $_SESSION['loggedIn'] = false;
?>
You have logged out
<form action="index.php">
    <input type="submit" value="Home">
</form>
