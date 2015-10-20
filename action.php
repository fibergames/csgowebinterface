<!--file that executes a command to the csgo server into the screen.-->
<?php

require('access.php');

$cmd = $_REQUEST['cmd'];



$cmd2 = -ls ;
$cmda = "screen -S cs -p 0 -X stuff " . "$cmd" . "^M" ;
echo "$cmda";
#$output = shell_
exec ("$cmda");
#echo "<pre>$output</pre>";
?>
<form action="dos.php">
    <input type="submit" value="Back">
</form>
