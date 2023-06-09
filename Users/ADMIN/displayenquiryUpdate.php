<?php
$conn = mysqli_connect("localhost","root","","schoolwork");
if (!$conn){
    die("Database Connection Error!" . mysqli_connect_error());
}
$enquiryID = mysqli_real_escape_string($conn,$_POST['enquiryID']);
$sql = " select * from enquiry where enquiry_ID = '$enquiryID'";
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
    <title>Select Enquiry ID</title>
    <link rel="stylesheet" href="css/style.css">
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
            <form action="updateenquirydetails.php" method="post">
                <h2>Update Enquiry</h2>
                <hr style="background-color: white">
                <label>Enquiry ID :
                    <input value="<?php print $row['enquiry_ID'];?>" type="text" name="enquiryID" class="form-control" required>
                </label>
                <label>Enquiry Date :
                    <input value="<?php print $row['enquiry_date'];?>" type="text" name="enquirydate" class="form-control" required>
                </label>
                <label>First Name :
                    <input value="<?php print $row['first_name'];?>" type="text" name="Fname" class="form-control" required>
                </label>
                <label>Other Names :
                    <input value="<?php print $row['other_names'];?>" type="text" name="Oname" class="form-control" required>
                </label>
                <label>Telephone :
                    <input value="<?php print $row['telephone'];?>" type="text" name="telephone" class="form-control" required>
                </label>
                <label>Email :
                    <input value="<?php print $row['email'];?>" type="text" name="email" class="form-control" required>
                </label>
                <label>Course :
                    <input value="<?php print $row['course'];?>" type="text" name="course" class="form-control" required>
                </label>
                <label>About :
                    <input value="<?php print $row['about_us'];?>" type="text" name="about" class="form-control" required>
                </label>
                <label>Comments :
                    <input value="<?php print $row['comments'];?>" type="text" name="comments" class="form-control" required>
                </label>
               <div class="buttons">
                   <button type="submit" class="btn btn-info">Update</button>
                   &nbsp;&nbsp;
                   <a class="btn btn-dark" href="enquiryupdate.php">Cancel Update</a>
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