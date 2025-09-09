<?php
//including connected file and function files
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALAXY ZONE WEBSITE</title>
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

    <style>
        /* Style your vertical menu items here */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .icon {
            margin-right: 10px;
        }
    </style>

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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                <sup><?php cart_item_No();?></sup>Mycart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">About</a>
                <?php
if(!isset($_SESSION['user_name'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='loginregisterpage.php'><i class='fa-solid fa-user'></i>Login</a>
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

              <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="loginregisterpage.php">REGISTER</a></li>
            <li><a class="dropdown-item" href="user_login.php">LOGIN</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>-->
            </ul>
           <form class="d-flex" action="search_product.php " method="get">
              <input class="form-control me-2" type="search" 
              placeholder="Search" aria-label="Search" name="search_data">
              <!--<button class="btn btn-dark" type="submit">Search</button>-->
              <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
            </form>
          </div>
        </div>
      </nav>
      </div>
    <!--navigation end-->
    <?php
    //calling add_to_cart function
    cart();
    ?>
<!--carousel-->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" 
      class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" 
      aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" 
      aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/CAROUSEL1.avif" class=" slide d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SAMSUNG GALAXY S23 ULTRA </h5>
          <p>Fall into a whole new level of luxury this fall.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/carousel4.webp" class="slide d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SAMSUNG GALAXY Z FOLD4</h5>
          <p>Foldable devices are about to be not just a thing, but THE thing .</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/CAROUSEL3.jpg" class="slide d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">SAMSUNG GALAXY Z FLIP4</h5>
          <p class="text-dark">FITS ALL YOUR FITS.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><br>
  <!--carousel end-->
  <!--top sale-->
 <div class="bg-body" id="product">
    <h3 class="text-center text-dark">Galaxy Sale</h3>
    <p class="text-center text-dark">EXPLORE THE WORLD OF GALAXY</p>
 </div>

 <div class="row">
    <div class="col-md-12">
        <div class="row">
          <!--fetching new product/displaying inserted products-->
           <?php
           //fetching and displaying products by calling function files to reduce code length
           getProducts();
          ?>
        </div>
    </div>
 </div>
 <?php
 //$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 
?>
 <!--fetching  end-->
  <!--top sale end-->
   <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white" id="footer">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
      <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
      <i class="fa-brands fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
      <i class="fa-brands fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
   <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>GALAXY ZONE</h6>
          <p>This is an online platform for the clients to explore, browse, and ordered their desired products. </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Information</h6>
          <p><a href="#!" class="text-reset">About us</a></p>
          <p><a href="#!" class="text-reset">info</a></p>
          <p><a href="#!" class="text-reset">Privacy policy</a></p>
          <p><a href="#!" class="text-reset">Terms & Conditions</a></p>  
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Useful</h6>
          <p><a href="#!" class="text-reset">Pricing</a></p>  
          <p><a href="#!" class="text-reset">Settings</a></p>
          <p><a href="#!" class="text-reset">Orders</a></p>
          <p><a href="#!" class="text-reset">help</a></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> KOTTAYAM, KERALA, INDIA</p>
          <p><i class="fas fa-envelope me-3"></i>galaxyzone@gmail.com</p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">© 2023 Copyright:
    <a class="text-reset fw-bold" href="#">galaxyzone.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer end -->

<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
</body>
</html>