<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Table</title>
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
<div class="container">
    <br>
    <table class="table table-striped">
        <tr>
            <th>STAFF ID</th>
            <th>FIRST NAME</th>
            <th>MIDDLE NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>POSITION</th>
            <th>DEPARTMENT</th>
            <th>JOIN DATE</th>
        </tr>
        <tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "schoolwork");
            if (!$conn) {
                die("Database Connection Error :" . mysqli_connect_error());
            }
            $sql = "select * from staffdetails";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $row['staff_ID']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['middle_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['join_date']; ?></td>
        </tr>
        <?php
        }
        }
        ?>
    </table>

    <a href="staff.php" class="btn btn-info">BACK</a>
    <a href="searchstaffUpdate.php" class="btn btn-primary">Update Staff</a>


</div>
</body>
</html>


