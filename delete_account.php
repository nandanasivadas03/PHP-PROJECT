
<h3 class="text-warning text-center mb-4"><u>Delete Account</u></h3>
<form action="" method="post" class="mt-5 text-center">
    <div class="form-outline mb-4">
    <label for="" class="text-center text-light">Are you sure you want to delete the account?</label><br><br>
        <input type="submit" class="bg-info mb-1 py-1 px-2 border-0" name="delete" value="Delete Account">
    </div>
    <div class="form-outline mb-4">
    <label for="" class="text-center text-light">Don't want to delete your account?</label><br><br>
        <input type="submit" class=" mb-1 py-1 px-2 border-0" name="dont_delete" value="Cancel">
    </div>
</form>

<?php
$user_name_session=$_SESSION['user_name'];
if(isset($_POST['delete'])){
    $delete_query="DELETE FROM user_table WHERE user_name='$user_name_session'";
    $result=mysqli_query($conn,$delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account deleted Successfully')</script>";
           echo "<script>window.open('index.php','_self')</script>";
    }
}
if(isset($_POST['dont_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}

?>
