<?php
include 'DBConnect.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Check if passwords match
    if ($password !== $confirmpassword) {
        $_SESSION['status'] = "Passwords do not match.";
        $_SESSION['status_code'] = "error";
        header("location:signup.php");
        exit();
    }

    $existSql = "SELECT * FROM `login` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $_SESSION['status'] = "Username already exists.";
        $_SESSION['status_code'] = "error";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT); // Generate secure hash
        $user_id = random_int(10000, 99999); // Using a random integer for user ID
        $sql = "INSERT INTO `login` (`user_id`, `username`, `password`) VALUES ('$user_id', '$username', '$hash')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        if ($result) {
            $_SESSION['status'] = "Account has been created.";
            $_SESSION['status_code'] = "success";
            header("location:signin.php");
            exit(); // Added exit() after header redirection
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>sign_up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <span class="login100-form-title">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please confirm password" style="margin:5px">
                        <input class="input100" type="password" name="confirmpassword" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn" style="margin-top: 30px;">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40" style="margin-top: -100px;">
                        <span class="txt1 p-b-9">
                            Already have an account?
                        </span>

                        <a href="signin.php" class="txt3">
                            Sign in now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "Done!",
            });
        </script>
    <?php
        unset($_SESSION['status']);
    }
    ?>
</body>
</html>
