<?php
//including connected file 
include('includes/connect.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    //echo $order_id;
    $select_data="SELECT * FROM user_orders WHERE order_id='$order_id'";
$result=mysqli_query($conn,$select_data);
$row_fetch=mysqli_fetch_assoc($result);
$invoice_number=$row_fetch['invoice_number'];
$amount_due=$row_fetch['amount_due'];
}
if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['Amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="INSERT INTO user_payments (order_id, invoice_number, amount, payment_mode) 
    values ($order_id,$invoice_number,$amount,'$payment_mode')";
    $result_payment=mysqli_query($conn,$insert_query);
    if($result_payment){
        echo "<h3 class='text-center text-light'>Successfully completed the payment</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="UPDATE user_orders SET order_status='Complete' WHERE order_id=$order_id";
    $result_orders=mysqli_query($conn,$update_orders);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container my-5">
    <h1 class="text-center text-warning">Confirm Payment</h1>
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" 
                value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-center text-light">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="Amount"
                value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto"> 
            <select name="payment_mode" class="form-select w-50 m-auto">
                <option>Select payment mode</option>
                <option>UPI</option>
                <option>NetBanking</option>
                <option>PayPal</option>
                <option>Cash On Delivery</option>
            </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-info py-2 px3 border-0" value="Confirm payment" 
                name="confirm_payment">
            </div>

        </form>
    </div>
    
</body>
</html>