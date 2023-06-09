<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Enquiry Update</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <form action="displayenquiryUpdate.php" method="post">
                <h2> Select Enquiry Update</h2>
                <hr style="background-color: white">
                <select name="enquiryID" id="" class="form-control" required>
                    <?php
                    $conn = mysqli_connect("localhost", "root","","schoolwork");
                    if (!$conn){
                        die("Database Connection Error!");
                    }
                    $sql = "select enquiry_ID from enquiry";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            ?>
                            <option value="<?php print $row['enquiry_ID'];?>"><?php print $row['enquiry_ID'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <br>
                <div class="buttons">
                    <button type="submit" class="btn btn-info">Search</button>
                    &nbsp;&nbsp;
                    <a class="btn btn-dark" href="enquiries.php">Cancel Search</a>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>

