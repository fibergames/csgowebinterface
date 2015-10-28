<!--file executes the retakeon.sh file to move the retake plugin.-->
<?php
require('access.php');
exec('bash retakeon.sh');
echo "Retake Plugin is now enabled";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
<head>
<meta http-equiv="refresh" content="0; url=dos.php" />
</head>
