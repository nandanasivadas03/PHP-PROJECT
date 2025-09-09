<h3 class="text-center">All Products</h3>
<table class="table table-bordered mt-5 ">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
$get_products="SELECT * FROM products";
$result=mysqli_query($conn,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image=$row['product_image'];
    $product_dealprice=$row['product_dealprice'];
    $status=$row['status'];
    $number++;

?>
    <tr class="text-center">
    <td><?php echo $number ?></td>
    <td><?php echo $product_title ?></td>
    <td> <img src="./product_images/<?php echo $product_image ?>" alt="" class="product_img"></td>
    <td><?php echo $product_dealprice ?></td>
    <td>
        <?php
        $get_count="SELECT * FROM order_pending WHERE product_id=$product_id";
        $result_count=mysqli_query($conn,$get_count);
        $row_count=mysqli_num_rows($result_count);
        echo $rows_count;
        ?>
    </td>
    <td><?php echo $status?></td>
    <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
    <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
     </tr>

     <?php
        }
         ?>
         
        
    </tbody>
</table>