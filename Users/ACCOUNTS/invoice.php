<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing And Invoice</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-md navi">
    <a class="navbar-brand" href="#">ACCOUNTS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="accounts.php">Dashboard</a>
            </li>
            <li>
                <a class="nav-link" href="invoice.php">Invoice</a>
            </li>
            <li>
                <a class="nav-link" href="receipts.php">Receipts</a>
            </li>
            <li>
                <a class="nav-link" href="invoicereports.php">Invoice Table</a>
            </li>
            <li>
                <a class="nav-link" href="receiptreports.php">Receipts Table</a>
            </li>
            <li>
                <a class="nav-link" href="dateinvoice.php">Invoice Report</a>
            </li>
            <li>
                <a class="nav-link" href="datereceipt.php">Receipt Report</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <li>
                <a  class="nav-link btn btn-danger" href="../../logout.php">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <h3><u>Invoice</u></h3>
        <form action="invoicedetails.php" method="post">
            <label>Invoice Number :
                <input type="text" name="invoice" class="form-control" required>
            </label>
            <label>Invoice Date :
                <input type="date" name="invoicedate" class="form-control" required>
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
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="invoiceupdate.php" class="btn btn-success">UPDATE</a>
                <a href="invoicedelete.php" class="btn btn-danger">Delete</a>
            </div>
        </form>

    </div>
    <div class="col-md-6"></div>
</div>
</body>
</html>
