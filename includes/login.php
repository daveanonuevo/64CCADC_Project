<?php

include 'sql.php';

// Checks if User Exists
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "
SELECT 1 FROM user_information.information WHERE email=?
";

    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($result->num_rows) {
        // output data of each row
        echo "Account exists";
    } else {
        echo "Account does not exist";
    }
}



// Checks Password


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
    }

}


