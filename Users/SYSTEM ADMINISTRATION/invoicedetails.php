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
            $conn=mysqli_connect("localhost","root","","schoolwork");
            if(!$conn){
                die("Database connection error:" . mysqli_connect_error());
            }
            // Removing SQL Injections
            $invoice = mysqli_real_escape_string($conn,$_POST['invoice']);
            $invoicedate = mysqli_real_escape_string($conn,$_POST['invoicedate']);
            $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
            $othernames = mysqli_real_escape_string($conn,$_POST['oname']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $tutionfees = mysqli_real_escape_string($conn,$_POST['tuition']);
            $registrationfees = mysqli_real_escape_string($conn,$_POST['registration']);
            $hostel = mysqli_real_escape_string($conn,$_POST['hostel']);
            $library = mysqli_real_escape_string($conn,$_POST['library']);


            // Create a query for saving data in the courses' table in the database
            $sql = "insert into invoice(invoice_number,invoice_date,first_name,other_names,course,tution_fees,registration_fees,hostel_fees,library_fees)
values('$invoice','$invoicedate','$firstname','$othernames','$course','$tutionfees','$registrationfees','$hostel','$library')";
            // Executing the query in $sql above
            if($conn->query($sql)==true){
                print"<p>Invoice Added Successfully</p>";
                print "<a href='invoice.php' class='btn btn-success'> Add New Enquiry</a>";
            }
            else{
                print "<p>Invoice not added</p>";
                print "<a href='invoice.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
