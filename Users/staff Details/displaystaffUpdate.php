<?php
$conn = mysqli_connect("localhost","root","","schoolwork");
if (!$conn){
    die("Database Connection Error!" . mysqli_connect_error());
}
$staffID = mysqli_real_escape_string($conn,$_POST['staff']);
$sql = " select * from staffdetails where staff_ID = '$staffID'";
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
    <title>Update Staff</title>
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
            <form action="Updatestaffdetails.php" method="post">
                <h2>Update Staff</h2>
                <hr>
                <label>Staff ID :
                    <input value="<?php print $row['staff_ID'];?>" type="text" name="staff" class="form-control" required>
                </label>
                <label>First name :
                    <input value="<?php print $row['first_name'];?>" type="text" name="Fname" class="form-control" required>
                </label>
                <label>Middle name :
                    <input value="<?php print $row['middle_name'];?>" type="text" name="Mname" class="form-control" required>
                </label>
                <label>Last name :
                    <input value="<?php print $row['last_name'];?>" type="text" name="Lname" class="form-control" required>
                </label>
                <label>Gender:
                    <input value="<?php print $row['gender'];?>" type="text" name="gender" class="form-control" required>
                </label>
                <label>Position:
                    <input value="<?php print $row['position'];?>" type="text" name="position" class="form-control" required>
                </label>
                <label>Department:
                    <input value="<?php print $row['department'];?>" type="text" name="department" class="form-control" required>
                </label>
                <label>Join date:
                    <input value="<?php print $row['join_date'];?>" type="date" name="joindate" class="form-control" required>
                </label>
               <div class="buttons">
                   <button type="submit" class="btn btn-info">Update</button>
                   &nbsp;&nbsp;
                   <a class="btn btn-dark" href="searchstaffUpdate.php">Cancel Update</a>
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