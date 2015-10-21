<!-->executes the startcomp.sh which has other startparameters than the csstart.sh<-->
<?php
require('access.php');
exec('bash startcomp.sh');
echo "Server is turning up...";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
