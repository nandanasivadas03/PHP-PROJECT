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
        .profile_img{
            width: 50%;
            margin: auto;
            display: block;
            height: 90%;
        }   
        .edit_image{
            width: 100px;
            height: 100px;
            object-fit: contain;
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
 
  <br><br><br><div class="text-center">
    <h5 class="text-dark text-bold bg-warning"><i>Communication is at the heart of e-commerce and community</i>
</h5>
  </div>

  <!--user dashboard-->
  
  <div class="row bg-dark">
    <div class="col-md-2 p-0">
        <ul class="navbar-nav bg-dark text-center">
            <li class="nav-item bg-warning">
                <a href="#" class="nav-link text-light"><h4>YOUR PROFILE</h4></a>
            </li>
            <?php
               $user_name=$_SESSION['user_name'];
               $user_image="SELECT * FROM user_table WHERE user_name='$user_name'";
               $user_image=mysqli_query($conn,$user_image);
               $row_image=mysqli_fetch_array($user_image);
               $user_image=$row_image['user_image'];
               echo "<li class='nav-item bg-warning'>
               <img src='./user images/$user_image' alt='' class='profile_img'>
           </li>";
            ?>
            
            <li class="nav-item bg-warning">
                <a href="profile.php" class="nav-link text-light">Pending orders</a>
            </li>
            <li class="nav-item bg-warning">
                <a href="profile.php?edit_account" class="nav-link text-light">Edit Account</a>
            </li>
            <li class="nav-item bg-warning">
                <a href="profile.php?my_orders" class="nav-link text-light">My Order</a>
            </li>
            <li class="nav-item bg-warning">
                <a href="profile.php?delete_account" class="nav-link text-light">Delete Account</a>
            </li>
            <li class="nav-item bg-warning">
                <a href="logout.php" class="nav-link text-light">Logout</a>
            </li>

        </ul>

    </div>
    <div class="col-md-10">
        <?php
        get_user_order_details();
        if(isset($_GET['edit_account'])){
            include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
            include('user_orders.php');
        }
        if(isset($_GET['delete_account'])){
          include('delete_account.php');
        }
        ?>

    </div>
  </div><br>
   <!-- Footer -->
   <?php
include("./includes/footer.php");
   ?>
<!-- Footer end -->

<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
</body>
</html>