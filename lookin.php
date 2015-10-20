<!-->checks if screen is running and covert the output to user friendly<-->
<?php
require('access.php');
$output = shell_exec('screen -ls');
echo $output;
echo "<br>";



if (strpos($output,'No Sockets found in /var/run/screen/S-www-data') !== false) {
    echo 'Ja mei der Serva is aus';
	} else {
		echo 'Ja mei der Serva is an';
}

?>


<form action="dos.php">
    <input type="submit" value="Back">
</form>
