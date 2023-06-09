<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries Report</title>
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
    <table class="table table-striped">
        <tr>
            <th>RECEIPT NUMBER</th>
            <th>RECEIPT DATE</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>COURSE </th>
            <th>TUTION FEES</th>
            <th>REGISTRATION FEES</th>
            <th>HOSTEL FEES</th>
            <th>LIBRARY FEES</th>
            <th>AMOUNT PAID</th>
            <th>TOTAL AMOUNT</th>
            <th>BALANCE</th>
        </tr>
        <tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "schoolwork");
            if (!$conn) {
                die("Database Connection Error :" . mysqli_connect_error());
            }
            $sql = "select * from receipts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $row['receipt_number']; ?></td>
            <td><?php echo $row['receipt_date']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['other_names']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['tution_fees']; ?></td>
            <td><?php echo $row['registration_fees']; ?></td>
            <td><?php echo $row['hostel_fees']; ?></td>
            <td><?php echo $row['library_fees']; ?></td>
            <td><?php echo $row['amount_paid']; ?></td>
            <td><?php echo $row['total_amount']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php
        }
        }
        ?>
        </tr>

    </table>


</div>
</body>
</html>

