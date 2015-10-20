<!-->list of all enabled and disabled plugins<-->
<?php
require('access.php');
echo "Enabled Plugins";
$output = shell_exec('ls /home/csgohome/steamcmd/csgo/csgo/addons/sourcemod/plugins');
echo "<pre>$output</pre>";
echo "Disabled Plugins";
$output1 = shell_exec('ls /home/csgohome/steamcmd/csgo/csgo/addons/sourcemod/plugins/disabled');
echo "<pre>$output1</pre>";
?>

<form action="dos.php">
    <input type="submit" value="Back">
</form>
