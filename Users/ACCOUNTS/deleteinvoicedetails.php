<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice Details</title>
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
            $conn = mysqli_connect("localhost", "root" , "", "schoolwork");
            if(!$conn){
                die("Database Connection Error : " . mysqli_connect_error());
            }
            //Removing SQL Injections
            $invoice = mysqli_real_escape_string($conn,$_POST['invoice']);
            //Creat a query for saving data in the course table in the database
            $sql = "delete form invoice where invoice_number = '$invoice'";
            //Executing the query in sql above
            if ($conn->query($sql) == true){
                print "<p>Invoice Details Deleted  Successfully</p>";
                print "<a href='invoice.php' class='btn btn-danger'>Delete Another Invoice</a>";
            }
            else{
                print " <p>Invoice Not Deleted</p>";
                print "<a href='invoice.php' class='btn btn-outline-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
