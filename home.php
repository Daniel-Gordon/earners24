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
    <nav class="navbar">
    <a class="navbar-brand" href="#"><b>Earners 24</b></a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <b>Your Referral code is: <b>https://www.earners24.com/signup-user.php?refer=<?php echo $fetch_info['name'] ?><b>
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><center><h2>Your Unique User Id Is: <?php echo $fetch_info['id'] ?></h2></center>
    <center><h2>Your Current Account Balance Is: $<?php echo $fetch_info['id'] ?></h2></center>
    <div>
    <h3><i>Want To Withdraw?</i>
    <br>
    <br>
        <a href="https://bit.ly/3zsAJXa"><b>Withdraw HERE</b></a>
    </div>
<br>
(NOTE):  <b>MINIMUM WITHDRAWAL IS #2,000</b>
    <br>
<b>If you input any amount below #2,000 , Your withdrawal will not be processed!<b>
</body>

<br><br>
   <div class=".footer"></div>
<p>__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
   Copyright &copy; 2022.<b> Made By Earners 24</b>
<P>____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</P>
</div>
</html>