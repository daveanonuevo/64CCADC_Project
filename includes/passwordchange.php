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

if (isset($_POST['password'])) {
    $password = $_POST['password'];

    $sql = "
SELECT password FROM user_information.information WHERE email=?;
";
    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $stored_password = $result->fetch_assoc()['password']; // fetch data
    if (password_verify($_POST['password'], $stored_password)) {
        echo "Password is correct";
    }
    else {
        // Invalid credentials
        echo "ERROR: WRONG PASSWORD";
        return;
    }
}

if (isset($_POST['newpassword'])) {
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

// Check if Stored Password = Current Password

// UPDATE DATA INTO SQL

$sql = "
UPDATE user_information.information SET password=? WHERE email=?
";
$stmt = mysqli_prepare($conn ,$sql);
$stmt->bind_param("ss", $hashed_password, $email);
$stmt->execute();
header("Location: /account.php");