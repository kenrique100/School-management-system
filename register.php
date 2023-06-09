<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form">
            <h2>Success</h2>
            <hr>
            <?php
            $conn=mysqli_connect("localhost","root","","schoolwork");
            if(!$conn){
                die("Database connection error:" . mysqli_connect_error());
            }
            // Removing SQL Injections
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $department = mysqli_real_escape_string($conn,$_POST['department']);


            // Create a query for saving login's in the log_in table in the database
            $sql = "insert into log_in(email,password,department)
values('$email','$password','$department')";
            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>Registration Successfully</p>";
                print "<a href='log.php' class='btn btn-success'> Add New staff</a>";
            }
            else{
                print "<p>Registration Failed</p>";
                print "<a href='log.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>

