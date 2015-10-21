<!-->executes the csstarts.sh<-->
<?php
require('access.php');
exec('bash csstart.sh');
echo "Server is turning up...";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
