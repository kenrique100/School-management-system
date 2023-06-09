<?php
$conn = mysqli_connect("localhost","root","","schoolwork");
if (!$conn){
    die("Database Connection Error!" . mysqli_connect_error());
}
$addmnumber = mysqli_real_escape_string($conn,$_POST['addmnumber']);
$sql = " select * from registration where addmision_number = '$addmnumber'";
$result = $conn->query($sql);
if ($result ->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Registration Number</title>
    <link rel="stylesheet" href="../A/style.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <form action="updateregistrationdetails.php" method="post">
                <h2>Update Enquiry</h2>
                <hr style="background-color: white">
                <label>Addmision Number:
                    <input value="<?php print $row['addmision_number'];?>" type="text" name="addmnumber" class="form-control" required>
                </label>
                <label>Registration Date :
                    <input value="<?php print $row['registration_date'];?>" type="text" name="regdate" class="form-control" required>
                </label>
                <label>First Name :
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required>
                </label>
                <label>Other Names :
                    <input value="<?php print $row['other_names'];?>" type="text" name="oname" class="form-control" required>
                </label>
                <label>Gender :
                    <input value="<?php print $row['gender'];?>" type="text" name="gender" class="form-control" required>
                </label>
                <label>Date of Birth :
                    <input value="<?php print $row['date_birth'];?>" type="text" name="dateofbirth" class="form-control" required>
                </label>
                <label>Postal Address :
                    <input value="<?php print $row['postal_address'];?>" type="text" name="address" class="form-control" required>
                </label>
                <label>Telephone :
                    <input value="<?php print $row['telephone'];?>" type="text" name="number" class="form-control" required>
                </label>
                <label>Email :
                    <input value="<?php print $row['email'];?>" type="text" name="email" class="form-control" required>
                </label>
                <label>Next of Kin :
                    <input value="<?php print $row['kin_name'];?>" type="text" name="nextkin" class="form-control" required>
                </label>
                <label>Next of Kin Number :
                    <input value="<?php print $row['kin_number'];?>" type="text" name="nextkinNo" class="form-control" required>
                </label>
                <label>Course :
                    <input value="<?php print $row['course'];?>" type="text" name="course" class="form-control" required>
                </label>
                <label>Kcse Grade :
                    <input value="<?php print $row['kcse_grade'];?>" type="text" name="grade" class="form-control" required>
                </label>
                <label>Education Level :
                    <input value="<?php print $row['education_level'];?>" type="text" name="education" class="form-control" required>
                </label>
                <label>School Attended :
                    <input value="<?php print $row['school_attended'];?>" type="text" name="school" class="form-control" required>
                </label>
                <label>FROM :
                    <input value="<?php print $row['year_from'];?>" type="text" name="from" class="form-control" required>
                </label>
                <label>TO :
                    <input value="<?php print $row['year_to'];?>" type="text" name="to" class="form-control" required>
                </label>
                <label>University Attended :
                    <input value="<?php print $row['university_attended'];?>" type="text" name="attended" class="form-control" required>
                </label>
               <div class="buttons">
                   <button type="submit" class="btn btn-info">Update</button>
                   &nbsp;&nbsp;
                   <a class="btn btn-dark" href="registrationupdate.php">Cancel Update</a>
               </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
    }
}
mysqli_close($conn);
?>