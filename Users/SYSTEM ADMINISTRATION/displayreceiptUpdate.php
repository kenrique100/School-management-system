<?php
$conn = mysqli_connect("localhost","root","","schoolwork");
if (!$conn){
    die("Database Connection Error!" . mysqli_connect_error());
}
$receiptnumber = mysqli_real_escape_string($conn,$_POST['receipt']);
$sql = " select * from receipts where receipt_number = '$receiptnumber'";
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
    <title>Select Receipt Number</title>
    <link rel="stylesheet" href="css/stylee.css">
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
            <form action="updatereceiptedetails.php" method="post">
                <h2>Update Receipt</h2>
                <hr style="background-color: white">
                <label>Receipt Number :
                    <input value="<?php print $row['receipt_number'];?>" type="text" name="receipt" class="form-control" required>
                </label>
                <label>Receipt Date :
                    <input value="<?php print $row['receipt_date'];?>" type="text" name="receiptdate" class="form-control" required>
                </label>
                <label>First Name :
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required>
                </label>
                <label>Other Names :
                    <input value="<?php print $row['other_names'];?>" type="text" name="oname" class="form-control" required>
                </label>
                <label>Course :
                    <input value="<?php print $row['course'];?>" type="text" name="course" class="form-control" required>
                </label>
                <label>Tution Fees :
                    <input value="<?php print $row['tution_fees'];?>" type="text" name="tuition" class="form-control" required>
                </label>
                <label>Registration Fees :
                    <input value="<?php print $row['registration_fees'];?>" type="text" name="registration" class="form-control" required>
                </label>
                <label>About :
                    <input value="<?php print $row['hostel_fees'];?>" type="text" name="hostel" class="form-control" required>
                </label>
                <label>Comments :
                    <input value="<?php print $row['library_fees'];?>" type="text" name="library" class="form-control" required>
                </label>
                <label>Amount Paid :
                    <input value="<?php print $row['amount_paid'];?>" type="text" name="paid" class="form-control" required>
                </label>
               <div class="buttons">
                   <button type="submit" class="btn btn-info">Update</button>
                   &nbsp;&nbsp;
                   <a class="btn btn-dark" href="invoiceupdate.php">Cancel Update</a>
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