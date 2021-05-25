<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:welcome.php");
}

require_once('pdo.php');
$newGuid = md5(uniqid(rand(), true));
$dte = gmdate("Y-m-d\TH:i:s\Z");

$sql = "insert into page_hits(tracking_id, request_date) values (?, ?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$newGuid,$dte]);
/*
$sql = "select * from page_hits order by request_date desc LIMIT 50";
$stmt = $pdo->query($sql);

while($row = $stmt->fetch()) {
        echo $row['id'].",";
        echo $row['tracking_id'].",";
        echo $row['request_date']."</br >";
}
*/



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--TITLE-->
    <meta charset="utf-8" />
    <title>
        Demo Application
    </title>
    <!--STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--SCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In<h5>
                                <form class="form-signin" method="POST" action="login.php">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                        <label for="inputPassword">Password</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Sign
                                        in</button>
                                    <hr class="my-4">
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>