<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order details</title>
</head>
<body>
    <?php
$user_name=$_SESSION['user_name'];
$get_user="SELECT * FROM user_table WHERE user_name='$user_name'";
$result=mysqli_query($conn,$get_user);
$row_fetch=mysqli_fetch_assoc($result);
$user_id=$row_fetch['user_id'];

    ?>
    <h3 class="text-warning text-center">All my orders</h3>
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>Si.No</th>
            <th>Amount due</th>
            <th>Total products</th>
            <th>Invoice number</th>
            <th>Date</th>
            <th>Complete/Incomplete</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <?php
$get_order_details="SELECT * FROM user_orders WHERE user_id=$user_id";
$result_orders=mysqli_query($conn,$get_order_details);
$number=1;
while($row_data=mysqli_fetch_assoc($result_orders)){
    $order_id=$row_data['order_id'];
    $amount_due=$row_data['amount_due'];
    $total_products=$row_data['total_products'];
    $invoice_number=$row_data['invoice_number'];
    $order_date=$row_data['order_date'];
    $order_status=$row_data['order_status'];
    if($order_status=='pending'){
        $order_status='Incomplete';
    }else{
        $order_status='Complete';
    }
    
    echo "<tr>
    <td>$number</td>
    <td>$amount_due</td>
    <td>$total_products</td>
    <td>$invoice_number</td>
    <td>$order_date</td>
    <td>$order_status</td>";
    ?>
<?php
if($order_status=='Complete'){
    echo "<td>Paid</td>";
}else{
    echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-dark'>Confirm</a></td>
</tr>";
}  
$number++;
}

            ?>
            
        </tbody>
    </table>
</body>
</html>