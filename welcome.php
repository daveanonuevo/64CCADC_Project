<?php
session_start();

echo "<br>";
echo "welcome.php";
echo "<br>";
echo $_SESSION["firstname"];
echo "<br>";
echo $_SESSION["lastname"] ;
echo "<br>";
echo $_SESSION["email"];
echo "<br>";
echo $_SESSION["username"] ;
echo "<br>";
// header("Location: /account.php");