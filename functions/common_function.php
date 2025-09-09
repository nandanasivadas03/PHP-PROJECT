<html>
<head>


</head>
<body>
  <?php 
  // Include connect file connect.php using a path relative to common_function.php
include(__DIR__ . '/../includes/connect.php');

//fetching/display products
function getProducts() {
  global $conn;
  $select_query="SELECT * FROM products ORDER BY rand() limit 0,4";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_info=$row['product_info'];
      $product_keywords=$row['product_keywords'];
      $product_image=$row['product_image'];
      $product_MRP=$row['product_MRP'];
      $product_dealprice=$row['product_dealprice'];
       echo "<div class='col-md-3 mb-2'>
       <div class='card text-center border-2 border-light'>
           <img src='./admin panel/product_images/$product_image' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
             <h5 class='card-title fs-6'>$product_title</h5>
             <p class='card-text fs-6 text-danger'>RS.$product_dealprice</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-warning fs-6'>ADD TO CART</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-primary fs-6'>View More</a>
           </div>
         </div>
       </div>";
   }
 }
//getting all products or display all products//
function get_all_products(){
  global $conn;
  $select_query="SELECT * FROM products ORDER BY rand()";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_info=$row['product_info'];
      $product_keywords=$row['product_keywords'];
      $product_image=$row['product_image'];
      $product_MRP=$row['product_MRP'];
      $product_dealprice=$row['product_dealprice'];
       echo "<div class='col-md-3 mb-2'>
       <div class='card text-center border-2 border-light'>
           <img src='./admin panel/product_images/$product_image' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
             <h5 class='card-title fs-6'>$product_title</h5>
             <p class='card-text fs-6 text-danger'>RS.$product_dealprice</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-warning fs-6'>ADD TO CART</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-primary fs-6'>View More</a>
           </div>
         </div>
       </div>";
   }
}



 //searching product function//
 function search_product(){
  global $conn;
  if(isset($_GET ['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  $search_query="SELECT * FROM products WHERE product_keywords LIKE '%$search_data_value%'";
    $result_query=mysqli_query($conn,$search_query);

    //show no result found when a keyword search is not match//
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-dark'>No results found!</h2>";
    }
    //end of result not found//
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_info=$row['product_info'];
      $product_keywords=$row['product_keywords'];
      $product_image=$row['product_image'];
      $product_MRP=$row['product_MRP'];
      $product_dealprice=$row['product_dealprice'];
       echo "<div class='col-md-5 mb-6'>
       <div class='card text-center border-2 border-dark'>
           <img src='./admin panel/product_images/$product_image' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
             <h5 class='card-title fs-6'>$product_title</h5>
             <p class='card-text fs-6 text-danger'>RS.$product_dealprice</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-warning fs-6'>ADD TO CART</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-primary fs-6'>View More</a>
           </div>
         </div>
       </div>";
   }
 }
 }
 
// view details function
function view_details(){
  global $conn;
  if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];
  $select_query="SELECT * FROM products where product_id =$product_id";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_info=$row['product_info'];
      $product_keywords=$row['product_keywords'];
      $product_image=$row['product_image'];
      $product_MRP=$row['product_MRP'];
      $product_dealprice=$row['product_dealprice'];
       echo 
 "<div class='container'>
        <div class='row'>
            <div class='col-6 border border-2 border-dark'>
                <img src='./admin panel/product_images/$product_image'  alt='$product_title' class='img-fluid'>
                <div class='text-center'><h5>$product_title</h5></div>
                 <div class='form-row pt-4 fs-6'>
                  
                  
                  <div class='col'>
                  <a href='index.php?add_to_cart=$product_id'><button type='submit' 
                  class='btn btn-warning form-control'>ADD TO CART</button></a>
                  </div>
                </div>
            </div>
            <div class='col-6'>
                <small><u>product info</u></small> 
                <br><h6>$product_info<br></h6>
                    <div class='d-flex'>
                        <div class='rating text-warning'>
                            <span <i class='fa-solid fa-star'></i></span>
                            <span <i class='fa-solid fa-star'></i></span>
                            <span <i class='fa-solid fa-star'></i></span>
                            <span <i class='fa-solid fa-star'></i></span>
                            <span <i class='fa-solid fa-star'></i></span>
                            <small class='text-primary'>ratings</small>
                        </div>
                    </div>
                    <hr>
                 <table class='my-3'>
                  <tr>
                    <td>M.R.P :</td>
                    <td><strike> &#8377;$product_MRP</strike></td>
                  </tr>
                  <tr>
                    <td>Deal Price :</td>
                    <td class='text-danger fs-5'> &#8377;$product_dealprice<small class='text-dark fs-6' >
                     inclusive of all taxes</small></td>
                  </tr>
                 </table>
               <!--policy-->

               <div id='policy'>
                <div class='d-flex'>
                    <div class='return text-center mr-5'>
                        <div class='fs-6 my-2'>
                            <span><i class='fa-solid fa-heart border p-3 rounded-pill'></i></span>
                        </div>
                        <a href='#' class='fs-6 text-primary'><small>add to<br>wishlist</small></a>
                    </div>&nbsp;&nbsp;
                    <div class='return text-center mr-5'>
                        <div class='fs-6 my-2'>
                            <span><i class='fa-solid fa-repeat border p-3 rounded-pill'></i></span>
                        </div>
                       <a href='#' class='fs-6 text-primary'><small>10 Days<br>replacement</small></a>
                    </div>&nbsp;&nbsp;
                    <div class='return text-center mr-5'>
                        <div class='fs-6 my-2'>
                            <span><i class='fa-solid fa-truck-front border p-3 rounded-pill'></i></span>
                        </div>
                        <a href='#' class='fs-6 text-primary'><small>free<br>Delivery</small></a>
                    </div>&nbsp;&nbsp;
                    <div class='return text-center mr-5'>
                        <div class='fs-6 my-2'>
                            <span><i class='fa-solid fa-shield border p-3 rounded-pill'></i></span>
                        </div>
                        <a href='#' class='fs-6 text-primary'><small>1 year<br>warranty</small></a>
                    </div>&nbsp;&nbsp;
                    <div class='return text-center mr-5'>
                        <div class='fs-6 my-2'>
                            <span><i class='fa-solid fa-lock border p-3 rounded-pill'></i></span>
                        </div>
                        <a href='#' class='fs-6 text-primary'><small>secure<br>transaction</small></a>
                    </div>
                </div>
               </div><hr>
               <!--policy end-->
              </div>
        <div>
        </div> 
        <br><hr>";
   }
}
}
 //getting IP address for cart
 function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 


//cart function
function cart(){
  if(isset($_GET['add_to_cart'])){
   global $conn;
   $ip = getIPAddress();
   $get_product_id=$_GET['add_to_cart'];
   $select_query="SELECT * FROM cart_details where ip_address='$ip' and product_id=$get_product_id";
   $result_query=mysqli_query($conn,$select_query);
   $num_of_rows=mysqli_num_rows($result_query);
   if($num_of_rows>0){
     echo "<script>alert('This item is already present in the cart')</script>";
     echo "<script>window.open('index.php','_self')</script>";
   }else{
    $insert_query="INSERT INTO cart_details (product_id,ip_address,quantity) 
    VALUES ($get_product_id,'$ip',0)";
    $result_query=mysqli_query($conn,$insert_query);
    echo "<script>alert('This item has added in the cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
   }
  }
 }
 //function to get cart item number
 function cart_item_No(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $ip = getIPAddress();
    $select_query="SELECT * FROM cart_details where ip_address='$ip'";
    $result_query=mysqli_query($conn,$select_query);
    $count_of_cart_items=mysqli_num_rows($result_query);
    }else{
      global $conn;
      $ip = getIPAddress();
      $select_query="SELECT * FROM cart_details where ip_address='$ip'";
      $result_query=mysqli_query($conn,$select_query);
      $count_of_cart_items=mysqli_num_rows($result_query);
    }
    echo $count_of_cart_items;
   }

   //total price function
   function total_cart_price(){
    global $conn;
    $ip = getIPAddress();
    $total_price=0;
    $cart_query="SELECT * FROM cart_details where ip_address='$ip'";
    $result=mysqli_query($conn,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_products="SELECT * FROM products where product_id='$product_id'";
      $result_products=mysqli_query($conn,$select_products);
      while($row_product_dealprice=mysqli_fetch_array($result_products)){
        $product_dealprice=array($row_product_dealprice['product_dealprice']);
        $product_values=array_sum($product_dealprice);
        $total_price+=$product_values;
    }
  }
  echo $total_price;
   }

   //function to delete cart item
   function delete_cart_item(){
    global $conn;
    if(isset($_POST['remove_cart'])){
      foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="DELETE FROM cart_details where product_id=$remove_id";
        $run_delete=mysqli_query($conn,$delete_query);
        if($run_delete){
          echo "<script>alert('This item has been removed from the cart')</script>";
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }
   }

// get user order details
function get_user_order_details(){
  global $conn;
  $user_name=$_SESSION['user_name'];
  $get_details="SELECT * FROM user_table where user_name='$user_name'";
  $result_query=mysqli_query($conn,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
  $user_id=$row_query['user_id'];
     if(!isset($_GET['edit_account'])){
           if(!isset($_GET['my_orders'])){
              if(!isset($_GET['delete_account'])){
                 $get_orders="SELECT * FROM user_orders WHERE user_id=$user_id and order_status='pending'";
                  $result_order_query=mysqli_query($conn,$get_orders);
                   $row_count=mysqli_num_rows($result_order_query);
                   if ($row_count>0){
                   echo "<h5 class='text-center text-warning my-5'>You have <span class='text-danger'>$row_count
                   </span>pending orders</h5>
                   <p class='text-center'><a href='profile.php?my_orders'>Order Details</a></p>";
                   }else{
                    echo "<h5 class='text-center text-warning my-5'>You have zero pending orders</h5>
                   <p class='text-center'><a href='index.php'>Explore Products</a></p>";
                   }
               }
          }
      }
   }
  }

?>
</body>
</html>


    





