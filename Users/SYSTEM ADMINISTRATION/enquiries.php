<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENQUIRIES</title>
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
<div class="container">
    <br>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <h3><u>ENQUIRIES</u></h3>
        <form action="enquirydetails.php" method="post">
            <label>Enquiry ID:
                <input type="text" name="enquiryID" class="form-control" required>
            </label>
            <label>Enquiry date:
                <input type="date" name="enquirydate" class="form-control" required style="width: 210px">
            </label>
            <label>First Name :
                <input type="text" name="Fname" class="form-control" required>
            </label>
            <label>Other Names :
                <input type="text" name="Oname" class="form-control" required>
            </label>
            <label>Telephone Number :
                <input type="tel" name="telephone" class="form-control" required>
            </label>
            <label>Email :
                <input type="email" name="email" class="form-control" required>
            </label>
            <label>Course :
                <input type="text" name="course" class="form-control" required>
            </label>
            <label>How did you know About US?
                <select name="about" id="" class="form-control" required>
                    <option value="choose">Choose</option>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="student">Student</option>
                    <option value="friend">Friend</option>
                    <option value="alumni">Alumni</option>
                    <option value="staff member">Staff Member</option>
                    <option value="social media">Social Media</option>
                </select>
            </label><br>
            <label>Comments :
                <textarea name="comments" id="" cols="52" rows="5" class="form-control" required></textarea>
            </label><br>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
                <a class="btn btn-success" href="enquiryupdate.php">Update</a>
            </div>
        </form>
    </div>
    <div class="col-md-6"></div>
</div>




</body>
</html>