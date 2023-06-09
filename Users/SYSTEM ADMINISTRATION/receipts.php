<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipts</title>
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>

    <style>
        .navi, .dropdown-menu{
            background-color: navy;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navi ">
    <a class="navbar-brand" href="#">SYSTEMS ADMINISTRATIONS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="systemaddministration.php">Dashboard </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../staff%20Details/staff.php">Staff</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Biling and Invoices</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="invoice.php">Invoice</a>
                    <a class="nav-link" href="receipts.php">Receipts</a>
                    <a class="nav-link" href="invoicereports.php">Invoice Table</a>
                    <a class="nav-link" href="receiptreports.php">Receipt Table</a>
                    <a class="nav-link" href="dateinvoice.php">Invoice Report</a>
                    <a class="nav-link" href="datereceipt.php">Receipt Report</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Enquiries</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="enquiries.php">Enquires</a>
                    <a class="nav-link" href="registration.php">Registration</a>
                    <a class="nav-link" href="enquiriesreports.php">Enquiries Table</a>
                    <a class="nav-link" href="registrationreports.php">Registration Table</a>
                    <a class="nav-link" href="dateenquiries.php">Enquiry Date</a>
                    <a class="nav-link" href="dateregistration.php">Registration Date</a>
                </div>
            </li>
            <li class="nav-item">
                <a  class="nav-link btn btn-danger" href="../../logout.php">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="col-md-6">
        <h3><u>Receipt</u></h3>
        <form action="receiptdetails.php" method="post">
            <label>Receipt Number :
                <input type="text" name="receipt" class="form-control" required>
            </label>
            <label>Receipt Date :
                <input type="date" name="receiptdate" class="form-control" required>
            </label>
            <label>First Name :
                <input type="text" name="fname" class="form-control" required>
            </label>
            <label>Other Names :
                <input type="text" name="oname" class="form-control" required>
            </label>
            <label>Course :
                <input type="text" name="course" class="form-control" required>
            </label>
            <label>Tuition Fees :
                <input type="text" name="tuition" class="form-control" required>
            </label>
            <label>Registration Fees :
                <input type="text" name="registration" class="form-control" required>
            </label>
            <label>Hostel Fees :
                <input type="text" name="hostel" class="form-control" required>
            </label>
            <label>Library Fees:
                <input type="text" name="library" class="form-control" required>
            </label>
            <label>Amount Paid :
                <input type="text" name="paid" class="form-control">
            </label>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="receiptupdate.php" class="btn btn-success">Update</a>
            </div>
        </form>
    </div>
</div>


</body>
</html>

