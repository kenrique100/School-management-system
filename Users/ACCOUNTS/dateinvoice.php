<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date</title>
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
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="invoicereportsdate.php" method="post">
                <h2>Invoice Date Report</h2>
                <hr style="background: white">
                <label> Date From :
                    <input type="date" name="jDataFrom" class="form-control" required>
                </label>
                <label> Date To :
                    <input type="date" name="jDataTo" class="form-control" required>
                </label>
                <div class="buttons">
                    <button type="submit" class="btn btn-info">View Report</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


