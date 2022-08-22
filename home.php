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
<link rel="stylesheet" href="style2.css" />

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $fetch_info['name'] ?> | My Account</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="profile.php" class="logo">
          <img src="dashboard_user.png">
          <span class="nav-item">Hi <?php echo $fetch_info['name'] ?></span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="user-invest.php">
          <i class="fas fa-donate"></i>
          <span class="nav-item">Invest And Earn</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">How It Works</span>
        </a></li>
        <li><a href="withdraw.php">
          <i class="fas fa-money-check-alt"></i>
          <span class="nav-item">Withdraw</span>
        </a></li>
        <li><a href="contact us.php">
          <i class="fas fa-envelope"></i>
          <span class="nav-item">Contact Us</span>
        </a></li>

        <li><a href="logout-user.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Earners 24</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="./pic/img1.jpg">
          <h3><br>Account Balance</h3><br><br>
          <h4>₦<?php echo $fetch_info['referral_point']?></h4>
        </div>
        <div class="card">
          <img src="./pic/img2.jpg">
          <h3><br>Referral Link</h3><br><br>
          <h4>Your Referral Link Is:</h4> <b><p>http://localhost/earners24/signup-user.php?refer=<?php echo $fetch_info['name'] ?></p></b>
        </div>
        <div class="card">
          <img src="./pic/img3.jpg">
          <h3><br>Total Referred Users</h3><br><br>
          <h4>You Have Referred 0 Users</h4>
        </div>
        <div class="card">
          <img src="./pic/img4.jpg">
          <h3><br>User I.D</h3><br><br>
          <h4>Your Unique User I.D Is: <?php echo $fetch_info['id'] ?></h4>
          </div>
</div>
</body>
</html>