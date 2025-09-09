<?php
include('includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <!-- font asewsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css stle-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--Navigation bar -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-dark"href="#">GALAXY ZONE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                <sup></sup>Mycart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">About</a>
              </li>
              
              <?php
if(!isset($_SESSION['user_name'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='user_login.php'><i class='fa-solid fa-user'></i>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link' href='logout.php'><i class='fa-solid fa-user'></i>Logout</a>
</li>";
}
?>
<li class="nav-item">
                <a class="nav-link" href="profile.php">My Profile</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="loginregisterpage.php"><i class="fa-solid fa-user"></i>Login</a>
              </li>-->
              
            </ul>
          </div>
        </div>
      </nav>
      </div>
    <!--navigation end--><br><br>
    
    <!-- checkout form -->
     
      <div class="row px-1">
        <div class="col-md-12">
          <div class="row">
            <?php
            if(!isset($_SESSION['user_name'])){
              include('user_login.php');
            }else{
              include('payment.php');
            }
            ?>
          </div>
        </div>

      </div>
</body>
</html>