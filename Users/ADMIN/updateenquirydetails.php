<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry Update</title>
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
            <hr>
            <?php
            $conn=mysqli_connect("localhost","root","","schoolwork");
            if(!$conn){
                die("Database connection error:" . mysqli_connect_error());
            }
            // Removing SQL Injections
            $enquiryID = mysqli_real_escape_string($conn,$_POST['enquiryID']);
            $enquirydate = mysqli_real_escape_string($conn,$_POST['enquirydate']);
            $firstname = mysqli_real_escape_string($conn,$_POST['Fname']);
            $othernames = mysqli_real_escape_string($conn,$_POST['Oname']);
            $telephone = mysqli_real_escape_string($conn,$_POST['telephone']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $about = mysqli_real_escape_string($conn,$_POST['about']);
            $comments = mysqli_real_escape_string($conn,$_POST['comments']);

            // Create a query for saving data in the courses' table in the database
            $sql = "update enquiry set enquiry_date = '$enquirydate',first_name = '$firstname',other_names = '$othernames', telephone = '$telephone', email = '$email',course = '$course',about_us ='$about',comments ='$comments'
where enquiry_ID = '$enquiryID'";
            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>Enquiry Updated Successfully</p>";
                print "<a href='enquiries.php' class='btn btn-success'> Update New Enquiry</a>";
            }
            else{
                print "<p>Enquiry not Updates</p>";
                print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
