<?php
session_start();

include 'sql.php';


if (isset($_SESSION['email'])) {

    header("Location: /account.php");
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

// INSERT DATA INTO SQL
$sql = "
INSERT INTO information(firstname, lastname, email, password)
VALUES(?,?,?,?)
";
$stmt = mysqli_prepare($conn ,$sql);
$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
$stmt->execute();

$_SESSION["firstname"] = $firstname;
$_SESSION["lastname"] = $lastname;
$_SESSION["email"] = $email;

header("Location: /welcome.php");