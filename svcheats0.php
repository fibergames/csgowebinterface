<!-->this executes the svcheatsoff.sh file<-->
<?php
require('access.php');
exec('bash svcheatsoff.sh');
echo "sv_cheats is now off";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
