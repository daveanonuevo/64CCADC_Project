<?php

session_start();

include 'sql.php';

// Checks if User Exists
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql = "
SELECT * FROM user_information.information WHERE email=?
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
        $_SESSION["address"] = $row["address"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["contact_number"] = $row["contact_number"];

        header("Location: /welcome.php");
    } else {
        echo "Account does not exist";
    }
}
