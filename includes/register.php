<?php
session_start();

include 'sql.php';


if (isset($_SESSION['email'])) {

    header("Location: /account.php");
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];
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

// Checks if User with Email exists
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
    }
}

// Checks if User with Username exists
if (isset(($_POST['username']))) {
    $username = $_POST['username'];

    $sql = "
SELECT * FROM user_information.information WHERE username=?
";

    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($row = $result->fetch_assoc()) {
        echo "<br>Account with username exists<br>";
        exit();
        return;
    } else {
    }
}

// INSERT DATA INTO SQL
$sql = "
INSERT INTO information(username, firstname, lastname, email, password)
VALUES(?,?,?,?,?)
";

$stmt = mysqli_prepare($conn ,$sql);
$stmt->bind_param("sssss", $username, $firstname, $lastname, $email, $password);
$stmt->execute();

$_SESSION["username"] = $username;
$_SESSION["firstname"] = $firstname;
$_SESSION["lastname"] = $lastname;
$_SESSION["email"] = $email;

header("Location: /account.php");