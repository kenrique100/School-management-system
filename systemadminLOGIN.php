<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Admin LOGIN</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <style>

        .container {
            text-align: center;
            margin-top: 50px;
            padding: 16px 18px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="#" method="post">
        <div class="col-md-6 container">
            <h4>System Administration</h4>
            <p>Admin Log in</p>
            <label>
                <input type="email" name="email" class="form-control" required size="50" placeholder=" Email Address">
            </label><br>
            <label>
                <input type="password" name="password" class="form-control" required size="50" placeholder=" Password">
            </label>

            <hr style="background: white">
            <div class="buttons">
                <button type="submit" name="submit" class="btn btn-primary">Log In</button>
            </div>
        </div>
        <div class="col-md-6"></div>
    </form>
</div>
</body>
</html>

<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT email FROM log_in WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $email;

        header("location: Users/SYSTEM%20ADMINISTRATION/systemaddministration.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>