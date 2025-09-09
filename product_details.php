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
    <title>PRODUCT_DETAILS</title>
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
     <?php
     include ("./includes/navbar.php")
     ?>
    <!--navigation end-->
    <br><br><br>
<!--product page-->
<?php
view_details();
?>
<!--product page end-->

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
 <!--fetching  end-->
  <!--top sale end-->
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