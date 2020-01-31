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
                        <h2 class="section-title mb-3">Change Password</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">



                        <form action="/includes/passwordchange.php" class="p-5 bg-white" method="post">

                            <h2 class="h4 text-black mb-5">Change Password</h2>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="currentPassword">Current Password</label>
                                    <input type="password" id="currentpassword" name="password" class="form-control rounded-0">
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="newPassword">New Password</label>
                                    <input type="password" id="newpassword" name="newpassword" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="confirmPassword">Confirm New Password</label>
                                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control rounded-0" oninput="check(this)">
                                </div>
                            </div>
                            <script language='javascript' type='text/javascript'>
                                function check(input) {
                                    if (input.value != document.getElementById('newpassword').value) {
                                        input.setCustomValidity('Password Must be Matching.');
                                    } else {
                                        // input is valid -- reset the error message
                                        input.setCustomValidity('');
                                    }
                                }
                            </script>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Change Password"
                                        class="btn btn-black rounded-0 py-3 px-4">
                                </div>
                            </div>

                        </form>
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