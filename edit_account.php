<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['user_name'];
    $select_query="SELECT * FROM user_table WHERE user_name='$user_session_name'";
    $result_query=mysqli_query($conn,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['user_name'];
    $user_email=$row_fetch['user_email'];
    $user_pwd=$row_fetch['user_pwd'];
    $user_address=$row_fetch['user_address'];
    $user_num=$row_fetch['user_num'];
}
 
if(isset($_POST['user_update'])){
    $update_id=$user_id;
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_pwd=$_POST['user_pwd'];
    $user_address=$_POST['user_address'];
    $user_num=$_POST['user_num'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_tmp,"./user images/$user_image");

    //update 
    $update_data="UPDATE user_table SET user_name='$user_name', user_email='$user_email', user_pwd='$user_pwd',
     user_image='$user_image', user_address='$user_address', user_num='$user_num' WHERE user_id='$update_id'";
    $result_query_update=mysqli_query($conn,$update_data);
    if($result_query_update){
        echo "<script>alert('Data updated successfully')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
    
</head>
<body>
    <h3 class="text-warning text-center mb-4"><u>Edit Account</u></h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
      <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_name" value="<?php echo $user_name ?>">
      </div>
      <div class="form-outline mb-4">
    <input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo $user_email ?>">
      </div>
      <div class="form-outline mb-4">
    <input type="password" class="form-control w-50 m-auto" name="user_pwd" value="<?php echo $user_pwd ?>">
      </div>
      <div class="form-outline mb-4 d-flex w-50 m-auto">
        <input type="file" class="form-control" name="user_image">
        <img src="./user images/<?php echo $user_image ?>" alt="" class="edit_image">
      </div>
      <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_address" value="<?php echo $user_address ?>">
      </div>
      <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_num" value="<?php echo $user_num ?>">
      </div>
      <input type="submit" value="Update" class="bg-info mb-1 py-1 px-2 border-0" name="user_update">


    </form>

    
</body>
</html>