<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
include 'connection.php'
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fetch_info['name'] ?> | My Profile</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                <h1 class="text-center" class="logo">
          <img src="dashboard_user.png">
          <span class="nav-item">My Profile</span>
          </h1><br> 
                    <b class="text-center">Name: <?php echo $fetch_info['name'] ?></b><br><br>
                    <b class="text-center">Account Balance: ₦<?php echo $fetch_info['referral_point']?></b><br><br>    
                    <b class="text-center">User I.D: <?php echo $fetch_info['id'] ?></b><br><br> 
                    <b class="text-center">Referral Link: http://localhost/earners24/signup-user.php?refer=<?php echo $fetch_info['name'] ?></b>
</body>
</html>