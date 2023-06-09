<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries</title>
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <br>
    <table class="table table-striped">
        <tr>
            <th>ENQUIRY ID</th>
            <th>ENQUIRY DATE</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>TELEPHONE </th>
            <th>EMAIL</th>
            <th>COURSE</th>
            <th>ABOUT</th>
            <th>COMMENTS</th>
        </tr>
        <tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "schoolwork");
            if (!$conn) {
                die("Database Connection Error :" . mysqli_connect_error());
            }
            $joinDateFrom = mysqli_real_escape_string($conn,$_POST['jDataFrom']);
            $joinDateTo = mysqli_real_escape_string($conn,$_POST['jDataTo']);
            $sql = "select * from enquiry where enquiry_date>= '$joinDateFrom' and enquiry_date <= '$joinDateTo'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $row['enquiry_ID']; ?></td>
            <td><?php echo $row['enquiry_date']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['other_names']; ?></td>
            <td><?php echo $row['telephone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['about_us']; ?></td>
            <td><?php echo $row['comments']; ?></td>
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

