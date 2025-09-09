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
    <title>DISPLAY ALL PRODUCTS</title>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
              </li>
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
      <br><br><br>
    <!--navigation end-->

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
           get_all_Products();
          ?>
        </div>
    </div>
 </div>
 <!--fetching  end-->
  <!--top sale end-->
   <!-- Footer -->
<!--include footer-->
<?php
include("./includes/footer.php")
?>
<!-- Footer end -->

<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
</body>
</html>