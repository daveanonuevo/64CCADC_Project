<?php

$_SESSION = [];
session_destroy();
$_SESSION = [];


header("Location: /login.php");