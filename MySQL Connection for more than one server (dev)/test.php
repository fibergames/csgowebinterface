<?php
 $number = 5;
  $userid = 2;
	$pdo = new PDO('mysql:host=localhost;dbname=cswebin', 'root', 'g35k2787');
//IP Catching
  $statement = $pdo->prepare("SELECT ip,serverid FROM servers WHERE owner_id = :userid");
  $statement->bindParam(':userid', $userid);
  $statement->execute();
  $ips = $statement->fetchAll();


  print_r($ips);
  $name = array("hi", "hello", "fcknzs");
  echo $ip['1'];
  echo "<br>";
  echo "<br>";
  echo "<br>";

 for ($i=0; $i < $number ; $i++) {
   echo $ips[$i]["ip"];
   echo "<br>";
 }
 ?>
  <title>CS Server Interface</title>
