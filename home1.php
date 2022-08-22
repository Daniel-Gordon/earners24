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
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | My Account</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar"><a class="navbar-brand" href="#"><b>Earners 24 Dashboard</b></a><br><br>                                                                                                                                                                        
    <h2><button type="button" class="btn btn-light"><a href="logout-user.php">LOGOUT</a></button></h2>
    </nav>
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
        </ul>
      </nav>
    </div>
    <div id="content">
				<div id="nav">
				<ul><br>
                <h3><li><a class="selected" href="withdraw.php" target="_blank">Withdraw</a>
      <a class="selected" href="mailto:info.earners24@gmail.com">Contact Us</a>
      <a class="selected" href="user-invest.php">Invest And Earn</a></h3>
	</ul>
	</div> <br>
    <center><h2><b>Hello <?php echo $fetch_info['name'] ?></b><h2></center><br>
  <center><h3>Your Unique User Id Is: <?php echo $fetch_info['id'] ?></h3></center>
    <center><h3>Your Current Account Balance Is: $<?php echo $fetch_info['referral_point']?></h3></center><br><br>
    <center><h3><b>Your Referral Link Is: http://localhost/earners24/signup-user.php?refer=<?php echo $fetch_info['name'] ?></h3></center>
    <div>
</body>
   <div class=".footer"></div>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   Copyright &copy; 2022.<b> Made By Earners 24</b>
</div>
</html>