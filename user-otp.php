<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Email Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div><br>
                        <?php
                    }
                    ?> <p>A code has been sent to your email</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?><br>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter Email Verification Code" required>
                    </div><br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div><br>
                    <div class="link login-link text-center">Didn't receive an email verification code? <a href="https://wa.link/1a5x8k" target="_blank">Contact Us Now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>