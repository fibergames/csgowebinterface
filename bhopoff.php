<!--file executes the bhopoff.sh file to move the bhop plugin.-->
<?php
require('access.php');
exec('bash bhopoff.sh');
echo "The best Plugin is now disabled :(";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
<head>
<meta http-equiv="refresh" content="0; url=dos.php" />
</head>
