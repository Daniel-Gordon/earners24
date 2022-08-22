<?php require_once "controllerUserData.php"; ?>
<?php include 'connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup | Earners24</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){

                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>

                            

                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Enter Your Full Name" required value="<?php echo $name ?>">
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter Your Email Address" required value="<?php echo $email ?>">
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required>
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm Your Password" required>
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control" type="text" name="referralcode" placeholder="Enter Referer's Code" required value=" <?php echo $referralcode; ?>">
                    </div> <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Register">
                    </div> <br>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>