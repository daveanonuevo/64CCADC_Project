<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: /login.php");
    return;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selling &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">
    <?php include 'header.php'?>




    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Account Details</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-7 mb-5">



                        <h2 class="h4 text-black mb-5">Account Details</h2>

                        <div class="row ">

                            <div class="col-md-12">
                                <h4 class="text-black">Name (First Name + Last Name): </h4>
                                <p class="rounded-0"> <?php echo $_SESSION["firstname"] ." ". $_SESSION["lastname"] ?> </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-black">Email: </h4>
                                <p class="rounded-0"> <?php echo $_SESSION["email"]?> </p>
                            </div>
                        </div>

                    <?php if(!isset($_SESSION['address']))
                    {
                        echo '<h2 class="h4 text-black mb-5">Account Contact Details</h2>
                        <div class="row ">

                            <div class="col-md-12">
                                <h4 class="text-black"">Details are not set</h4>
                                <p class="rounded-0"> Press the button below to set them now
                             </p>
                            </div>
                        </div>
                        ';


                    }
                    else{
                        echo '
                        <h2 class="h4 text-black mb-5">Account Contact Details</h2>
                        <div class="row ">

                            <div class="col-md-12">
                                <h4 class="text-black">Address: </h4>
                                <p class="rounded-0">'
                            .  $_SESSION["address"] . '
                             </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-black">Contact Number: </h4>
                                <p class="rounded-0"> '. $_SESSION["contact_number"] . '</p>
                               
                            </div>
                        </div>
                        <div class="row ">
                        </div>';
                    }
                    ?>



                        <div class="row">
                            <div class="col-md-12">
                                <input type="button" onclick="window.location.href = '/updatecontact.php';" value="Update Contact"
                                       class="btn btn-black rounded-0 py-3 px-4">
                            </div>
                        </div>

                </div>

            </div>

        </div>
    </div>

    <?php include 'footer.php'?>

</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>


<script src="js/main.js"></script>

</body>

</html>
