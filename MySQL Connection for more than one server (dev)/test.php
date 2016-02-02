<?php
 $number = 1;
  $userid = 3;
	$pdo = new PDO('mysql:host=localhost;dbname=cswebin', 'root', 'password');
/**IP Catching
  $statement = $pdo->prepare("SELECT ip,serverid,type FROM servers WHERE owner_id = :userid");
  $statement->bindParam(':userid', $userid);
  $statement->execute();
  $ips = $statement->fetchAll();

**/

//  $userstrid = strval($userid);
  $userstm = '%#' . $userid . '#%';
  echo $userstm;
  echo "<br>";
  //$userstm = '%#3#%';
  echo $userstm;
  $statement0 = $pdo->prepare("SELECT count(serverid) as numba from servers where admin_id like :user");
  $statement0->bindParam(':user', $userstm);
  $statement0->execute();
  //$row1 = $statement0->fetchAll();
	$row1 = $statement0->fetch(PDO::FETCH_ASSOC);
  print_r ($row1);

//  echo $ips[$number]["type"];

 ?>
  <title>CS Server Interface</title>
