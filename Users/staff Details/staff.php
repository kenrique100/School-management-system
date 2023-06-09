<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-md navi ">
    <a class="navbar-brand" href="#">SYSTEMS MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../SYSTEM%20ADMINISTRATION/systemaddministration.php">Dashboard </a>
            </li>
            <li class="nav-item">
                <a  class="nav-link btn btn-danger" href="../../logout.php">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="staffdetails.php" method="post">
            <h2><u>Enter Staff Details</u></h2>
            <label>Staff ID :
                <input type="text" name="staff" class="form-control" required size="40">
            </label>
            <label>First Name :
                <input type="text" name="Fname" class="form-control" required size="40">
            </label>
            <label>Middle Name :
                <input type="text" name="Mname" class="form-control" required size="40">
            </label>
            <label>Last Name :
                <input type="text" name="Lname" class="form-control" required size="40">
            </label>
            <label>Gender :
                <select name="gender" id="" class="form-control" required style="width: 300px">
                    <option value="Gender">Gender</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                </select>
            </label>
            <label>Position :
                <input type="text" name="position" class="form-control" required size="40">
            </label>
            <label>Department :
                <select name="department" id="" class="form-control" required style="width: 300px">
                    <option value="Department">Department</option>
                    <option value="System Administration">System Administration</option>
                    <option value="Administration">Administration</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Managements">Managements</option>
                    <option value="Front Office">Front Office</option>
                </select>
            </label>
            <label>Join Date :
                <input type="date" name="joindate" class="form-control" required style="width: 300px">
            </label>
            <div class="buttons">
                <button type="submit" class="btn btn-success">ADD STAFF</button>
                &nbsp;
                <a href="stafftable.php" class="btn btn-info">Staff Table</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

