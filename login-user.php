<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Earners 24</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Earners24 Login</h2>
                    <b class="text-center">Kindly Login To Your Earners 24 Account</b>
                    <br>
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
                    ?> <br>
                    <div class="form-group">
 <input class="form-control" type="email" name="email" placeholder="Enter Your Email Address" required value="<?php echo $email ?>">
                    </div>  <br>
                    <div class="form-group">
  <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required>
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div> <br>
                    <input type="checkbox" checked="checked"> Remember me <br> <br>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot Your Password?</a>
                </div>             
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>