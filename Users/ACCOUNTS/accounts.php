<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACCOUNTS</title>
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>

    <style>
        .welcome{
            background-color: blue;
            color: white;
            font-family: initial;
            padding: 14px 16px;
            border-radius: 20px;
            box-sizing: border-box;
        }

    </style>
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
    <h2 style="font-family: cursive">Accounts Portal</h2>
    <hr style="background-color: navy">
    <div class="welcome">
        <h3>Welcome Back !</h3>
        <h6>To get started, use the menu on top.
            All the general summaries will be displayed on this page. <br>
            Any new system updates will be displayed here.</h6>
    </div>
</div>


</body>
</html>
