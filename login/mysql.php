<?php
$host = "";
$dbname = "";
$user = "";
$passwort = "d7646UQyZANheEJDCvVW3Jf7";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>
