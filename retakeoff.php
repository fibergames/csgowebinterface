<!--file executes the retakeoff.sh file to move the retake plugin.-->
<?php
require('access.php');
exec('bash retakeoff.sh');
echo "Retake Plugin is now disabled";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
