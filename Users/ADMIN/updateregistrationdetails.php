<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry Registration</title>
    <link rel="stylesheet" href="css/style.css">
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
            <hr style="background-color: white">
            <?php
            $conn=mysqli_connect("localhost","root","","schoolwork");
            if(!$conn){
                die("Database connection error:" . mysqli_connect_error());
            }
            // Removing SQL Injections
            $addmisionmumber = mysqli_real_escape_string($conn,$_POST['addmnumber']);
            $registrationdate = mysqli_real_escape_string($conn,$_POST['regdate']);
            $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
            $othernames = mysqli_real_escape_string($conn,$_POST['oname']);
            $gender = mysqli_real_escape_string($conn,$_POST['gender']);
            $dateofbirth = mysqli_real_escape_string($conn,$_POST['dateofbirth']);
            $postaladdress = mysqli_real_escape_string($conn,$_POST['address']);
            $number = mysqli_real_escape_string($conn,$_POST['number']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $nextkin = mysqli_real_escape_string($conn,$_POST['nextkin']);
            $nextkinNo = mysqli_real_escape_string($conn,$_POST['nextkinNo']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $grade = mysqli_real_escape_string($conn,$_POST['grade']);
            $education = mysqli_real_escape_string($conn,$_POST['education']);
            $school = mysqli_real_escape_string($conn,$_POST['school']);
            $from = mysqli_real_escape_string($conn,$_POST['from']);
            $to = mysqli_real_escape_string($conn,$_POST['to']);
            $attended = mysqli_real_escape_string($conn,$_POST['attended']);


            // Create a query for saving data in the courses' table in the database
            $sql = "update registration set registration_date = '$registrationdate',first_name = '$firstname',other_names = '$othernames', gender = '$gender', date_birth = '$dateofbirth',postal_address = '$postaladdress',telephone ='$number',email ='$email',kin_name = '$nextkin',
                        kin_number = '$nextkinNo', course = '$course', kcse_grade = '$grade',education_level = '$education', school_attended = '$school',year_from = '$from',year_to = '$to',university_attended = '$attended'
where addmision_number = '$addmisionmumber'";


            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>Registration Updated Successfully</p>";
                print "<a href='registration.php' class='btn btn-success'> Update New Registration</a>";
            }
            else{
                print "<p>Enquiry not Updates</p>";
                print "<a href='registration.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
