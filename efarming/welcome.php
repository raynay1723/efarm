<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
       <!DOCTYPE html>
<html>
<header>
<meta charset="UTF-8">
<link rel ="stylesheet" href = "styles.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</header>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="farm.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders </span></a></li>
                        <li><a href="products.php"><i class="fa fa-address-card" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Products</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <li><a href="reset-password.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reset Password</span></a></li>
                    </ul>
                </div>
            </div>
          <div>
              <h1>FARM PRODUCE INFORMATION  SYSTEM</h1>
          </div>


    <!-- Modal -->
   

</body>
</html>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Make your order</title>
</head>
<body>
<form action="farmerinsert.php" method="post">
   <p>
      <label for="farmer_id">Farmer_id:</label>
        <input type="text" name="farmer_id" id="farmer_id">
    </p>
  <p>
      <label for="product_name"> Product_name:</label>
        <input type="text" name="product_name" id="product_name">
    </p>
    <p>
      <label for="product_id">Product_id:</label>
        <input type="text" name="product_id" id="product_id">
    </p>
    <p>
      <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
     <p>
      <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact">
    </p>
    <input type="submit" value="POST PRODUCTS">
</form>
</body>
</html>