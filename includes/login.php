<?php
session_start();

include 'sql.php';

if (isset($_SESSION['email'])) {

    header("Location: /account.php");
}

// Checks if User Exists
if (isset($_POST['emailusername'])) {
    $emailusername = $_POST['emailusername'];
    $sql = "
SELECT 1 FROM user_information.information WHERE email=? OR username=?
";

    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("ss", $emailusername, $emailusername);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($result->num_rows) {
    } else {
        echo "Account does not exist";
        exit();
        return;
    }
}

// Checks Password
if (isset($_POST['password'])) {
    
    $emailusername = $_POST['emailusername'];

    $password = $_POST['password'];
    $sql = "
SELECT password FROM user_information.information WHERE email=? OR username=?;
";
    $stmt = mysqli_prepare($conn ,$sql);
    $stmt->bind_param("ss", $emailusername, $emailusername);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $stored_password = $result->fetch_assoc()['password']; // fetch data
    if (password_verify($_POST['password'], $stored_password)) {

        if (isset($_POST['emailusername'])) {
            $emailusername = $_POST['emailusername'];
            $sql = "
SELECT username, firstname, lastname, email FROM user_information.information WHERE email=? or username=?
";

            $stmt = mysqli_prepare($conn ,$sql);
            $stmt->bind_param("ss", $emailusername, $emailusername);
            $stmt->execute();
            $result = $stmt->get_result(); // get the mysqli result

            if ($row = $result->fetch_assoc()) {
                // output data of each row

                $_SESSION["username"] = $row["username"];
                $_SESSION["firstname"] = $row["firstname"];
                $_SESSION["lastname"] = $row["lastname"];
                $_SESSION["email"] = $row["email"];
                try {
                    $_SESSION["address"] = $row["address"];
                    $_SESSION["contact_number"] = $row["contact_number"];
                }
                catch (Exception $e){

                    header("Location: /account.php");
                }

                header("Location: /account.php");
            } else {
                echo "Account does not exist";
            }
        }
    }
    else {
        // Invalid credentials
        echo "ERROR: WRONG PASSWORD";
    }

}
