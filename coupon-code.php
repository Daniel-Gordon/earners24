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
    <title>Coupon Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="coupon-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Coupon Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter Coupon Code" required>
                    </div><br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div><br>
                    <div class="link login-link text-center">Don't have a coupon code? <a href="https://wa.link/1a5x8k" target="_blank">Get one here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>