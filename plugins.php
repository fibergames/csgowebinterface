<?php
require('access.php');
?>

Retake<br>
<form method="post" action="process.php">
  <select name="pluginr">
    <option value="on">ON</option>
    <option value="off">OFF</option>
  </select>
<br>
BHOP<br>
<form method="post" action="process.php">
  <select name="pluginb">
    <option value="on">ON</option>
    <option value="off">OFF</option>
  </select>
  <input type="submit" value="Submit"/>
</form>
