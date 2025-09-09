<?php
 include('includes/connect.php');
 include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration of user</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <script>
        function validateEmail() {
            // Get the input value
            var email = document.getElementById("user_email").value;
            
            // Regular expression to check email format
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            // Test if the email matches the regex
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false; // Prevent form submission
            }
            
            return true; // Allow form submission if email is valid
        }
    </script>
    
</head>
<body>
<section class=" h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="./images/Reg2.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo"><BR>
            <div class="text-center">
            <p>Already have an account ? <a href="user_login.php"> Login</a></p>
            </div>
          <div class="card-body">
            <h4 class="text-center">REGISTER</h4>
            <form action="" method="post" enctype="multipart/form-data" class="px-md-2" 
             onsubmit="return validateEmail();" >
                    <!--Username--> 
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" 
                        placeholder="Enter your name"required="required"/>
                    </div>
                    <!--email-->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email id</label>
                        <input type="text" id="user_email" name="user_email" class="form-control" 
                        placeholder="Enter your Email id"required="required"/>
                    </div>
                    <!--dOB--> 
                    <div class="form-outline mb-4">
                        <label for="user_dob" class="form-label">Date of birth</label>
                        <input type="date" id="user_dob" name="user_dob" class="form-control" 
                        required="required"/>
                    </div>
                    <!--gender-->
                    <div class="form-outline mb-4">
                        <label class="form-label">Gender</label><br>
                        <input type="radio"  name="subject" value="Male" required="required"/>&nbsp;Male&nbsp;
                        <input type="radio"  name="subject" value="Female" required="required"/>&nbsp;Female&nbsp;
                        <input type="radio"  name="subject" value="Other" required="required"/>&nbsp;Other&nbsp;
                    </div>
                    <!--address--> 
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <textarea rows="2" cols="50" id="user_address" name="user_address" class="form-control" 
                        required="required"></textarea>
                    </div>
                    <!--contact--> 
                    <div class="form-outline mb-4">
                        <label for="user_num" class="form-label">Phone Number</label>
                        <input type="text" id="user_num" name="user_num" class="form-control" 
                        placeholder="Enter your contact number"required="required"/>
                    </div>
                    <!--pincode--> 
                    <div class="form-outline mb-4">
                        <label for="user_pin" class="form-label">Pincode</label>
                        <input type="text" id="user_pin" name="user_pin" class="form-control"
                        placeholder="Enter your area pincode" required="required"/>
                    </div>
                    <!--place--> 
                    <div class="form-outline mb-4">
                        <label for="user_place" class="form-label">Place</label>
                        <input type="text" id="user_place" name="user_place" class="form-control"
                        placeholder="Enter your place" required="required"/>
                    </div>
                    <!--district--> 
                    <div class="form-outline mb-4">
                        <label for="user_dis" class="form-label">District</label>
                        <select name="dropdown">
                            <option value="">Select your District</option>
                            <option value="Alappuzha">Alappuzha</option>
                            <option value="Ernakulam">Ernakulam</option>
                            <option value="Idukki">Idukki</option>
                            <option value="Kannur">Kannur</option>
                            <option value="Kasargod">Kasargod</option>
                            <option value="Kollam">Kollam</option>
                            <option value="Kottayam">Kottayam</option>
                            <option value="Kozhikode">Kozhikode</option>
                            <option value="Malappuram">Malappuram</option>
                            <option value="Palakkad">Palakkad</option>
                            <option value="Pathanamthitta">Pathanamthitta</option>
                            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                            <option value="Thrissur">Thrissur</option>
                            <option value="Wayanad">Wayanad</option>
                        </select>
                    </div>
                    <!--landmark--> 
                    <div class="form-outline mb-4">
                        <label for="user_lm" class="form-label">Landmark</label>
                        <input type="text" id="user_lm" name="user_lm" class="form-control"
                        placeholder="Example: Near temples,church,mosque, shops, buildings etc" required="required"/>
                    </div>
                    <!--password--> 
                    <div class="form-outline mb-4">
                        <label for="user_pwd" class="form-label">Password</label>
                        <input type="password" id="user_pwd" name="user_pwd" class="form-control"
                        placeholder="Create a password" required="required"/>
                    </div>
                    <!--confirm password--> 
                    <div class="form-outline mb-4">
                        <label for="conf_user_pwd" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_pwd" name="conf_user_pwd" class="form-control"
                        placeholder="Confirm password" required="required"/>
                    </div>
                    <!--image--> 
                    <div class="form-outline mb-4">
                        <label for="user_image" class="form-label">Your Photo (Optional)</label>
                        <input type="file" id="user_image" name="user_image" class="form-control"/>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="register" class="bg-info border-0 py-2 px-3"
                        name="user_register">
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
<!--php code to insert user info into user_table-->


<?php

if(isset($_POST['user_register'])){
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_dob=$_POST['user_dob'];
    $subject=$_POST['subject'];
    $user_address=$_POST['user_address'];
    $user_num=$_POST['user_num'];
    $user_pin=$_POST['user_pin'];
    $user_place=$_POST['user_place'];
    $user_dis=$_POST['dropdown'];
    $user_lm=$_POST['user_lm'];
    $user_pwd=$_POST['user_pwd'];
    $hash_pwd=password_hash($user_pwd,PASSWORD_DEFAULT);
    $conf_user_pwd=$_POST['conf_user_pwd'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();
    $product_status='true';


    move_uploaded_file($user_image_tmp,"./user images/$user_image");
    //checking duplication of user
    $select_query="SELECT * FROM user_table WHERE user_name='$user_name' or user_email='$user_email'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    if($row_count>0){
        echo "<script>alert('username and email already exist')</script>";
    }else if($user_pwd!=$conf_user_pwd){
        echo "<script>alert('password do not match')</script>";
           
        }else{
   //insert query
    $insert_query="INSERT INTO user_table (user_name,user_email,user_dob,gender,user_address,user_num,user_pin,
    user_place,user_dis,user_lm,user_pwd,user_image,user_ip,date,status) values ('$user_name','$user_email',
    '$user_dob','$subject','$user_address','$user_num','$user_pin','$user_place','$user_dis','$user_lm',
    '$hash_pwd','$user_image','$user_ip',NOW(),'$product_status')";

    $insert_query_run=mysqli_query($conn,$insert_query);
    if($insert_query_run){
        echo "<script>alert('Registered Successfully')</script>";
    }else{
        die(mysqli_error($conn));
    }
//selecting cartitem
$select_cart_items="SELECT * FROM cart_details WHERE ip_address='$user_ip'";
$result_cart=mysqli_query($conn,$select_cart_items);
$row_count=mysqli_num_rows($result_cart);
if($row_count>0){
    $_SESSION['username']=$user_name;
    echo "<script>alert('You hava item in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
}else{
    echo "<script>window.open('index.php','_self')</script>";
}
}
}

?>
