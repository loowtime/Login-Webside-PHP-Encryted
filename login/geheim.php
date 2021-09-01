<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: login.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="logout.php">Abmelden</a>
  </body>
</html>
