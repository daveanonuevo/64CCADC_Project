<?php

session_start();

$_SESSION = [];
session_destroy();
$_SESSION = [];


header("Location: /login.php");