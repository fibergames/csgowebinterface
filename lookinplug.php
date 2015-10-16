<?php
require('access.php');
echo "Enabled Plugins";
$output = shell_exec('ls /home/csgohome/steamcmd/csgo/csgo/addons/sourcemod/plugins');
echo "<pre>$output</pre>";
echo "Disabled Plugins";
$output1 = shell_exec('ls /home/csgohome/steamcmd/csgo/csgo/addons/sourcemod/plugins/disabled');
echo "<pre>$output1</pre>";
?>

<form action="http://84.200.55.45/dos.php">
    <input type="submit" value="Back">
</form>
