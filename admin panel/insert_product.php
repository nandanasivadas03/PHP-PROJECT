<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_info = $_POST['product_info'];
    $product_keywords = $_POST['product_keywords'];
    $product_MRP = $_POST['product_MRP'];
    $product_dealprice = $_POST['product_dealprice'];
    $product_status='true';

    //accessing images
    $product_image = $_FILES['product_image']['name'];
        //accessing images temp name
        $temp_image = $_FILES['product_image']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $product_info=='' or $product_keywords=='' or $product_MRP=='' or $product_dealprice=='' or
     $product_image==''){
        echo"<script>alert('Please fill all the fields');</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"./product_images/$product_image");

        //insert query
        $insert_products="INSERT INTO products (product_title,product_info,product_keywords,product_image,
        product_MRP,product_dealprice,date,status) values ('$product_title', '$product_info', '$product_keywords', 
        '$product_image','$product_MRP', '$product_dealprice',NOW(),'$product_status')";
        //execute query
        $result_query=mysqli_query($conn,$insert_products);
        if($result_query){
            echo"<script>alert('successfully inserted the product');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products</title>
 <!-- bootstrap css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
     <!-- font asewsome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
     <h3 class="text-center ">Insert Product</h3>
    <!--form-->
    <form action="" method="post" enctype="multipart/form-data">
        <!--title-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product_title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" 
            placeholder="Enter product title" autocomplete="off" required="required">
        </div>
        <!--info-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_info" class="form-label">product_info</label>
            <input type="text" name="product_info" id="product_info" class="form-control" 
            placeholder="Enter product info" autocomplete="off" required="required">
        </div>
        <!--keyword-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">product_Keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control" 
            placeholder="Enter product keyword" autocomplete="off" required="required">
        </div>
         <!--Image-->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">product_image</label>
            <input type="file" name="product_image" id="product_image" class="form-control" 
            required="required">
        </div>
        <!--ORIGINAL PRICE-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_MRP" class="form-label">product_MRP</label>
            <input type="text" name="product_MRP" id="product_MRP" class="form-control" 
            placeholder="Enter product MRP" autocomplete="off" required="required">
        </div>
        <!--DEAL PRICE-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_dealprice" class="form-label">product_dealprice</label>
            <input type="text" name="product_dealprice" id="product_dealprice" class="form-control" 
            placeholder="Enter product deal price" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto text-center">
            <input type="submit" name="insert_product" class="btn btn-info" value="insert product">
        </div>
    </form>

</body>
</html>