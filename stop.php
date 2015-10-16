
<?php
require('access.php');
exec('bash csstop.sh');
echo "Server is turning down...";
?>

<form action="http://84.200.55.45/dos.php">
    <input type="submit" value="Back">
</form>
