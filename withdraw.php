<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql)
        $fetch_info = mysqli_fetch_assoc($run_Sql);
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw | Earners24</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h1 class="text-center">Want To Withdraw?</h1>
                    <b class="text-center">Please Note That The MINIMUM WITHDRAWAL IS ₦2,000.<br>If you input any amount below ₦2,000 <br> Your withdrawal will not be processed!</b>
                    <br>
                    <center><h1><button type="button" class="btn btn-light"><a href="https://bit.ly/3zsAJXa" target="_blank">Withdraw</a></button></h1></center>
                <br>
        <h3><li><a class="selected" href="home.php">Back To Dashboard</a></li></h3>
</div>
    </body>
</html>