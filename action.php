
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

<form action="http://84.200.55.45/dos.php">
    <input type="submit" value="Back">
</form>
