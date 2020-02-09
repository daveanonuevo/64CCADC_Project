<?php
session_start();

echo "welcome.php";
echo $_SESSION["firstname"];
echo $_SESSION["lastname"] ;
echo $_SESSION["email"];

// header("Location: /account.php");