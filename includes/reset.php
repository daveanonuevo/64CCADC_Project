<?php
session_start();

include 'sql.php';

// Clear Database
$sql = "
DROP database user_information
";
$stmt = mysqli_prepare($conn ,$sql);

$stmt->execute();

echo "Cleared Database";