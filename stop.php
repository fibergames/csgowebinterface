<!-->this executes the csstop.sh<--->
<?php
require('access.php');
exec('bash csstop.sh');
echo "Server is turning down...";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
