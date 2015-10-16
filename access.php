


<?php
//put sha1() encrypted password here - example is 'hello'
$password = '72a5b2626b757f4bba1774ef46db94991ab0f183';

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
  <body>
    <p2>You need to login</p2>
    <form method="post">
      <p2>Password: <input type="password" name="password"></p2>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
<a href="index.php">Back</a><br><br>
<?php
exit();
endif;
?>
