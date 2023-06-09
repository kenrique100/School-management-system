<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<br>
<div class="container">
    <div class="col-sm-5"></div>
    <div class="col-sm-5">
        <form action="register.php" method="post">
            <h3 style="text-align: center"><u>Register</u></h3>
            <label>
                <input type="text" name="email" class="form-control" required placeholder="Email address" style="width: 400px">
            </label>
            <label>
                <input type="password" name="password" class="form-control" required placeholder="Password" style="width: 400px">
            </label>
            <label>
                <select name="department" id=""  class="form-control" required style="width: 400px">
                    <option value="Department">Department</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Admin">Admin</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Managements">Managements</option>
                    <option value="Systems Administration">Systems Administration</option>
                </select>
            </label>
            <div class="buttons">
                <a href="index.php" class="btn btn-success">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-md-5"></div>
</div>
</body>
</html>
