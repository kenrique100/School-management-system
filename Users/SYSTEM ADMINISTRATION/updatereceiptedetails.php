<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt Update</title>
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
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
            $receiptnumber = mysqli_real_escape_string($conn,$_POST['receipt']);
            $receiptdate = mysqli_real_escape_string($conn,$_POST['receiptdate']);
            $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
            $othernames = mysqli_real_escape_string($conn,$_POST['oname']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $tutionfees = mysqli_real_escape_string($conn,$_POST['tuition']);
            $registrationfees = mysqli_real_escape_string($conn,$_POST['registration']);
            $hostelfees = mysqli_real_escape_string($conn,$_POST['hostel']);
            $libraryfees = mysqli_real_escape_string($conn,$_POST['library']);
            $totalamount = mysqli_real_escape_string($conn,$_POST['paid']);

            // Create a query for saving data in the courses' table in the database
            $sql = "update receipts set receipt_date = '$receiptdate',first_name = '$firstname',other_names = '$othernames', course = '$course', tution_fees = '$tutionfees',registration_fees = '$registrationfees',hostel_fees ='$hostelfees',library_fees ='$libraryfees', total_amount = '$totalamount'
where receipt_number = '$receiptnumber'";
            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>Receipt Updated Successfully</p>";
                print "<a href='receipts.php' class='btn btn-success'> Update New Receipt</a>";
            }
            else{
                print "<p>Receipt not Updated</p>";
                print "<a href='receipts.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
