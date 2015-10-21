<!-->this executes the svcheatson.sh file<-->
<?php
require('access.php');
exec('bash svcheatson.sh');
echo "sv_cheats is now on";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
