<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary  sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="images/icon.png" alt="logo" style="width:40px;">
    </a
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav">
        <!-- Navbar text-->
        <span class="navbar-text" style="color: white"><h4>SCHOOL MANAGEMENT SYSTEM</h4></span>
    </ul>
</nav>
<br>
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>-</td>
            <td>System Administration</td>
            <td><a href="systemadminLOGIN.php" class="btn btn-primary">LOG IN</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Admin</td>
            <td><a href="adminLOGIN.php" class="btn btn-primary">LOG IN</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Front Office</td>
            <td><a href="frontofficeLOGIN.php" class="btn btn-primary">LOG IN</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Accounts</td>
            <td><a href="accountsLOGIN.php" class="btn btn-primary">LOG IN</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Management</td>
            <td><a href="managementLOGIN.php" class="btn btn-primary">LOG IN</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Register Log in</td>
            <td><a href="log.php" class="btn btn-primary">REGISTER</a></td>
        </tr>
    </table>
</div>
</body>
</html>
