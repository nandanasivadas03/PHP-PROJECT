<?php

include('../includes/connect.php');
include('../functions/common_function.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD </title>
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
            height: 70%;
        }   
        .product_img{
          width: 10%;
          object-fit: contain;
        }
        </style>

</head>
<body>
     <!--Navigation bar -->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-dark"href="#">GALAXY ZONE</a>
        </div>
    </nav>
    </div>
    <!--navigation end-->
   <br><br><br>
    <!--admin manage details -->
<!--Admin dashboard-->
  
<div class="row ">
    <div class="col-md-2 p-0">
        <ul class="navbar-nav  text-center bg-dark">
            <li class="nav-item bg-secondary mt-0">
                <h6>ADMIN AREA</h6>
            </li>
               <li class='nav-item bg-secondary'>
               <img src="../images/admin.jpg" alt='' class='profile_img mt-2'>
               <div class="text-center">
                  <p class="text-dark text-center">Admin Name</p>
                </div>
           </li>
           <li class="nav-item bg-secondary">
            <a class="btn" href="index.php" role="button">Admin dashboard</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="index.php?product_insert" role="button">Insert Product</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="index.php?view_products" role="button">View Product</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="#" role="button">All Orders</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="#" role="button">All Payments</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="#" role="button">Users List</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="#" role="button">Feedbacks Reply</a>
            </li>
            <li class="nav-item bg-secondary">
            <a class="btn" href="#" role="button">Logout</a>
            </li>
            

        </ul>

    </div>
    <div class="col-md-10">
    <?php
       
        if(isset($_GET['product_insert'])){
            include('insert_product.php');
        }
        if(isset($_GET['view_products'])){
          include('view_products.php');
        }else{
          echo "<div class='text-center mt-5'>
          <h5 class='text-dark text-bold'>
          <i>Communication is at the heart of <br>
          e-commerce and community</i></h5>
        </div>";
        }
        ?>

    </div>
  </div><br>
    <!--admin manage details end-->

    <!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
</body>
</html>