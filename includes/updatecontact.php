<?php

session_start();
include 'sql.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
else{
    header("Location: /register.php");
    return;
}

if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['contact_number'])) {
    $contact_number = $_POST['contact_number'];
}

// Check if Stored Password = Current Password

// UPDATE DATA INTO SQL

$sql = "
UPDATE user_information.information SET address=?, contact_number=? WHERE email=?
";

$stmt = mysqli_prepare($conn ,$sql);
$stmt->bind_param("sss", $address, $contact_number, $email);
$stmt->execute();


$_SESSION["address"] = $_POST['address'];
$_SESSION["contact_number"] = $_POST['contact_number'];

header("Location: /welcome.php");