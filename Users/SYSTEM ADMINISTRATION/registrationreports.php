<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Table</title>
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
<div class="container-fluid">
    <br>
    <table class="table table-striped">
        <tr>
            <th>ADDMISSION NUMBER</th>
            <th>REGISTRATION DATE</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th>POSTAL ADDRESS</th>
            <th>TELEPHONE NUMBER</th>
            <th>EMAIL</th>
            <th>NEXT OF KIN</th>
            <th>KIN NUMBER</th>
            <th>COURSE ENROLLED</th>
            <th>KCSE GRADE</th>
            <th>EDUCATION LEVEL</th>
            <th>HIGH SCHOOL ATTENDED</th>
            <th>FROM</th>
            <th>TO</th>
            <th>UNIVERSITY ATTENDED</th>
        </tr>
        <tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "schoolwork");
            if (!$conn) {
                die("Database Connection Error :" . mysqli_connect_error());
            }
            $sql = "select * from registration";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $row['addmision_number']; ?></td>
            <td><?php echo $row['registration_date']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['other_names']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['date_birth']; ?></td>
            <td><?php echo $row['postal_address']; ?></td>
            <td><?php echo $row['telephone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['kin_name']; ?></td>
            <td><?php echo $row['kin_number']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['kcse_grade']; ?></td>
            <td><?php echo $row['education_level']; ?></td>
            <td><?php echo $row['school_attended']; ?></td>
            <td><?php echo $row['year_from']; ?></td>
            <td><?php echo $row['year_to']; ?></td>
            <td><?php echo $row['university_attended']; ?></td>
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

