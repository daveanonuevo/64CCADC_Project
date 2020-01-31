<?php
session_start();

include 'sql.php';


if (isset($_SESSION['email'])) {

    header("Location: /account.php");
}

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

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $sql = "
SELECT firstname, lastname, email FROM user_information.information WHERE email=?
";

            $stmt = mysqli_prepare($conn ,$sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result(); // get the mysqli result

            if ($row = $result->fetch_assoc()) {
                // output data of each row

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
