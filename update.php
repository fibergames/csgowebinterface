<?php
require('access.php');
echo "Updatete...";
exec('bash csstop.sh');
exec('bash csupdate.sh');
?>
<form action="dos.php">
    <input type="submit" value="Back">
</form>
