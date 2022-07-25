<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <?php 
    if ($ans1 == 14935845729703570) header("Location: http://localhost:/earners24/home.php");
    else

  if (isset($_POST["submit"]))
  
  {
    ?>

    <?php
    <script> type = "text/javascript"
     window.location="home.php"; </script>  
  
  $ans1 = $_POST['ans1']; }
    $correct = 0;
    if (!empty($_POST)) {echo "<p>Please Input The Coupon Code!</p>";}
        if ($ans1 == 14935845729703570) {
            $correct++;
        } else { 
            echo "<P>WRONG COUPON CODE!</p>";
        }
        $grade = ($correct / 1) * 100;
        if ($correct == 0) {
            echo "<p>WRONG COUPON CODE!</p>";
        } elseif ($correct == 1) {}
    ?>
    <p>Coupon Code</p>
    <div class="form-group">
     <input type="number" name="ans1" placeholder="Enter Coupon Code" required value>
      <input type="submit">
    
    </form>
</body>
</html>