
<!--main file for the login and password protection thing.-->


<?php
//put sha1() encrypted password here - example is 'hello'
$password = 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
}

if (!$_SESSION['loggedIn']): ?>

<html><head><title>Login</title></head>
<script src="jquery.js"></script>
<link href="notmain2.css" rel="stylesheet" type="text/css" />
  <body>
    <p2>You need to login</p2><br>
    <form method="post" id="logi">
      <input type="password" name="password">
    <noscript>
      <input type="submit" name="btnSubmit" value="Login">
    </noscript>
      <a onclick="document.getElementById('logi').submit()" id="subb" href="#">btnSubmit</a>
    </form id="logi">
  </body>
</html>
<a href="index.php">Back</a><br><br>
<?php
exit();
endif;
?>
