
<?php
require('access.php');
?>
<html>
<body>
  <title>CS Server Interface</title>
    <h1>CS Server Interface</h1>
<link href="notmain.css" rel="stylesheet" type="text/css" />
<ul>
  <li><a class="disabled" href="start.php">start</a></li>
  <li><a class="disabled" href="startcomp.php">startcomp</a></li>
  <li><a class="disabled" href="stop.php">stop</a></li>
  <li><a class="disabled" href="update.php">update</a></li>
  <li1><a class="disabled" href="lookin.php">status</a></li1>
  <li><a class="disabled" href="svcheats1.php">svcheats_1</a></li>
  <li><a class="disabled" href="svcheats0.php">svcheats_0</a></li>
  <li2><a class="disabled" href="dosplug.php">plugins</a></li2>
  <li><form action="action.php" method="post">
      command:  <input type="text" name="cmd" /><input type="submit" name="submit" value="Submit me!" />
  <li><a class="disabled" href="logout.php">LogOut</a></li>
</li>
</ul>
<ul id="plugins">
  <li><a class="disabled" href="bhopon.php">bHopOn</a></li>
  <li><a class="disabled" href="bhopoff.php">bHopOff</a></li>
  <li><a class="disabled" href="retakeon.php">retakeOn</a></li>
  <li><a class="disabled" href="retakeoff.php">retakeOff</a></li>
  <li><a class="disabled" href="lookinplug.php">lokkIn</a></li>
</ul id="plugins">
<script src="jquery.js"></script>
<script>
$(function(){
$('p6').hide();
$(plugins).hide();
$('li1').on('mouseover', function(){
  $('p6').fadeToggle();
});
$('li2').on('click', function(){
  $(plugins).fadeToggle();
});

});
</script>

<?php
$output = shell_exec('screen -ls');
if (strpos($output,'No Sockets found in /var/run/screen/S-www-data') !== false) {
    print "<p6>Server is offline<br></p6>";
	} else {
		echo "<p6>Server is running<br></p6>";
}
?>
<!--
<form action="start.php">
    <input type="submit" value="Starten">
</form>
<form action="startcomp.php">
    <input type="submit" value="Start Comp Mode">
</form>
<form action="stop.php">
    <input type="submit" value="Stoppen">
</form>
<form action="update.php">
    <input type="submit" value="Updaten">
</form>
<form action="lookin.php">
    <input type="submit" value="LookIn">
</form>

<form action="svcheats1.php">
    <input type="submit" value="sv_cheats1">
</form>
<form action="svcheats0.php">
    <input type="submit" value="sv_cheats 0">
</form>
<form action="dosplug.php">
    <input type="submit" value="PluginWIzzard">
</form>


<form action="action.php" method="post">
    Command:  <input type="text" name="cmd" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>


<form action="logout.php">
    <input type="submit" value="Logout">
</form>
</body>
</html>
-->
