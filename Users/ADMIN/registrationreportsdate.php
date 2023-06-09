<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
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
            $joinDateFrom = mysqli_real_escape_string($conn,$_POST['jDataFrom']);
            $joinDateTo = mysqli_real_escape_string($conn,$_POST['jDataTo']);
            $sql = "select * from registration where registration_date>= '$joinDateFrom' and registration_date <= '$joinDateTo'";
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

