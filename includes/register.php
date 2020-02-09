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

// Checks if User Exists
if (isset(($_POST['email']))) {
    $email = $_POST['email'];

    $sql = "
SELECT * FROM user_information.information WHERE email=?
";

    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($row = $result->fetch_assoc()) {
        echo "<br>Account with email exists<br>";
        exit();
        return;
    } else {
        echo "<br>Account does not exist<br>";
    }
    echo "<br>Code Reached 3<br>";
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

header("Location: /account.php");