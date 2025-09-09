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
    <title>CART_DETAILS</title>
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
    .cart_img{
        width: 60px;
    height: 60px;
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
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Product</a>
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
          </div>
        </div>
      </nav>
      </div><br>
    <!--navigation end-->
    <br>
    <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
<!--cart table--> 
    <div class="container">
        <div class="row">
          <form action="" method="POST">
            <table class="table table-bordered text-center">
                
                <tbody>
                    <!--php code to dynamic data -->
                    <?php
                    global $conn;
                    $ip = getIPAddress();
                    $total_price=0;
                    $cart_query="SELECT * FROM cart_details where ip_address='$ip'";
                    $result=mysqli_query($conn,$cart_query);
                    $result_count=mysqli_num_rows($result);
                    if($result_count>0){
                      echo " <thead>
                      <tr>
                          
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                          <th>Remove</th>
                          
                          
                      </tr>
                  </thead>";
                    while($row=mysqli_fetch_array($result)){
                      $product_id=$row['product_id'];
                      $select_products="SELECT * FROM products where product_id='$product_id'";
                      $result_products=mysqli_query($conn,$select_products);
                      while($row_product_dealprice=mysqli_fetch_array($result_products)){
                        $product_dealprice=array($row_product_dealprice['product_dealprice']);
                        $price_table=$row_product_dealprice['product_dealprice'];
                        $product_title=$row_product_dealprice['product_title'];
                        $product_image=$row_product_dealprice['product_image'];
                        $product_values=array_sum($product_dealprice);
                        $total_price+=$product_values;
                 
                    ?>
                    <tr>
                     <td><?php echo $product_title  ?></td>
                     <td><img src="./images/<?php echo $product_image  ?>" alt="" class="cart_img"> </td>


                     <td>
                     <form action="" method="post">
    <input type="number" name="quantity" min="1" value="1">
    <input type="submit" value="Update" name="update_cart" class="bg-info px-3 border-0" />
</form></td>
                         <?php
                         global $conn;
                         $ip = getIPAddress();
                         if(isset($_POST['update_cart'])){
                          $quantities=$_POST['quantity'];
                          $update_cart="UPDATE cart_details SET quantity=$quantities WHERE ip_address='$ip'";
                          $result_quantity=mysqli_query($conn,$update_cart);
                          $total_price=$total_price*$quantities;
                         }
                         
                         ?>
                     <td><?php echo $price_table  ?>/-</td>
                     <td>
                      <input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>">
                      <!--<button class="bg-info px-3 border-0">Remove</button>-->
                      <input type="submit" value="Remove" name="remove_cart" class="bg-info px-3 border-0" />
                    </td>
                     
                     </tr>
                    <?php
                       }
                    }
                    }
                    else{
                      echo "<h2 class='text-center text-danger'>Cart is Empty</h2>";
                    }
                    ?>
                </tbody>
            </table><br>
           
<div class="container">
    <div class="row">
      <?php
global $conn;
$ip = getIPAddress();
$cart_query="SELECT * FROM cart_details where ip_address='$ip'";
$result=mysqli_query($conn,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
  echo "<center> <div class='col-lg-3'>
  <div class='border bg-light rounded p-4'>
      <h4>Total:</h4>
      <div class='col-4'><h4><strong>$total_price/-</strong></h4></div>
  </div>
</div> </center>  <br><br><br><br><br><br><br>
  <center>   
  <input type='submit' value='Continue Shopping' name='Continue_Shopping' class='bg-info px-3 border-0'/>

<button class='bg-warning px-3 border-0'><a href='checkout.php' class='text-decoration-none'>Buy Now</a></button>
</center> ";
}else{
echo "<center><input type='submit' value='Continue Shopping' name='Continue_Shopping' 
class='form-input w-50 bg-info border-0 px-3 py-2'</center>";
}
if(isset($_POST["Continue_Shopping"])){
echo "<script>window.open('index.php','_self')</script>";
}
?>
    

           

  <!-- function to remove cart item -->
  <?php 
delete_cart_item();
  ?>
    </div><br><br>
  <!--cart table end--> 
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