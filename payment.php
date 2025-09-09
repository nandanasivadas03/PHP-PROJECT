<?php
//including connected file and function files
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<style>
    img{
        width:90%;
        margin:auto;
        display:block;
    }
</style>
<body>
    <!-- php code to access user id -->
  <?php
   $user_ip=getIPAddress();
   $get_user="SELECT * FROM user_table WHERE user_ip='$user_ip'";
   $result=mysqli_query($conn, $get_user);
    $run_query=mysqli_fetch_array($result); 
    $user_id=$run_query['user_id'];
    ?>
   

   <section class="h-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="./images/pay.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <br>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" class="px-md-2">
    <hr>
              <div class="form-outline mb-4">
              <a href="order.php?user_id=<?php echo $user_id ?>" target="_blank"><h2 class="text-center">
                PROCEED PAYMENT</h2></a>
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