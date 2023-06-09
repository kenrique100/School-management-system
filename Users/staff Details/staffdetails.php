<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Details</title>
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
            $staffID = mysqli_real_escape_string($conn,$_POST['staff']);
            $firstname = mysqli_real_escape_string($conn,$_POST['Fname']);
            $middlename = mysqli_real_escape_string($conn,$_POST['Mname']);
            $lastname = mysqli_real_escape_string($conn,$_POST['Lname']);
            $gender = mysqli_real_escape_string($conn,$_POST['gender']);
            $position = mysqli_real_escape_string($conn,$_POST['position']);
            $department = mysqli_real_escape_string($conn,$_POST['department']);
            $joindate = mysqli_real_escape_string($conn,$_POST['joindate']);

            // Create a query for saving data in the courses' table in the database
            $sql = "insert into staffdetails(staff_ID,first_name,middle_name,last_name,gender,position,department,join_date)
values('$staffID','$firstname','$middlename','$lastname','$gender','$position','$department','$joindate')";
            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>New Staff Added Successfully</p>";
                print "<a href='staff.php' class='btn btn-success'> Add New Staff</a>";
            }
            else{
                print "<p>Student not added</p>";
                print "<a href='staff.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
