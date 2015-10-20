<!-->Who don't know what the index is???<-->
<!DOCTYPE html>
<html>
  <title>CS Server Interface</title>
    <body>
        <h1>CS Server Interface</h1>

          <a href="dos.php">Login</a><br><br>


          <link href="main.css" rel="stylesheet" type="text/css" />




    </body>
<script src="jquery.js"></script>
<p9>Status</p9><br>
<script>
$(function(){
$('p6').hide();
$('div').hide();
$('div2').hide();
$('p9').on('mouseover', function(){
  $('p6').fadeToggle();
});


});




</script>
</html>

<?php

$output = shell_exec('screen -ls');
$t = date("H");
if ($t < "10") {
    echo "<p2>Have a good morning!</p2><br>";
} elseif ($t < "20") {
    echo "<p2>Have a good day!</p2><br>";
} else {
    echo "<p2>Have a good night!</p2><br>";
}

if (strpos($output,'No Sockets found in /var/run/screen/S-www-data') !== false) {
    print "<p6>Server is offline<br></p6>";
	} else {
		echo "<p6>Server is running<br></p6>";
}


?>
