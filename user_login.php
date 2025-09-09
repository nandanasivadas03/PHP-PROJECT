<?php
//including connected file and function files
include('includes/connect.php');
include('functions/common_function.php');
@session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-70">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="./images/Reg2.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt=""><BR>
          <div class="card-body">
            <h4 class="text-center">LOGIN</h4>
            <form action="" method="post" class="px-md-2">
                    <!--Username--> 
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" 
                        placeholder="Enter your name" required="required"/>
                    </div>
                    
                    <!--password--> 
                    <div class="form-outline mb-4">
                        <label for="user_pwd" class="form-label">Password</label>
                        <input type="password" id="user_pwd" name="user_pwd" class="form-control"
                        placeholder="Enter your password" required="required"/>
                    </div>
                    
                    <div class="text-center">
                        <input type="submit" value="Login" name="user_login" class="bg-info border-0 py-2 px-3"><br>
                    </div><br>
                    <div class="text-center">
                         <p>Don't have an account ? <a href="user_registration.php">Register Here</a></p>
                    </div>
              
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


<?php
global $conn;
if(isset($_POST['user_login'])){
  $user_name=$_POST['user_name'];
  $user_pwd=$_POST['user_pwd'];

  $select_query="SELECT * FROM user_table WHERE user_name='$user_name'";

    $result=mysqli_query($conn, $select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result); 
    $user_ip=getIPAddress();
// cart item
   $select_query_cart="SELECT * FROM cart_details WHERE ip_address='$user_ip'";
    $select_cart=mysqli_query($conn, $select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);  
if ($row_count>0)
{ 
   $_SESSION['user_name']=$user_name;
   if(password_verify($user_pwd, $row_data['user_pwd']))
   { 
    //echo "<script>alert('Login successfully')</script>";
      if($row_count ==1 and $row_count_cart==0)
      {
        $_SESSION['user_name']=$user_name;
           echo "<script>alert('Login successfully')</script>";
           echo "<script>window.open('profile.php','_self')</script>";
      }else{
        $_SESSION['user_name']=$user_name;
                 echo "<script>alert('Login successfully')</script>";
                 echo "<script>window.open('payment.php','_self')</script>";
              }
    }else{
           echo "<script>alert('Invalid Credentials')</script>"; 
         }
}else{
       echo "<script> alert('Invalid Credentials')</script>"; 
      }
}
?>