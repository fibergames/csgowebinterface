<!--file executes the bhopon.sh file to move the bhop plugin.-->
<?php
require('access.php');
exec('bash bhopon.sh');
echo "The best Plugin is now enabled :) ";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
<head>
<meta http-equiv="refresh" content="0; url=dos.php" />
</head>
