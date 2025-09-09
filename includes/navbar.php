 <?php
 session_start();
 ?>
 
 
 <!--Navigation bar -->
 <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-dark"href="#">GALAXY ZONE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                <sup><?php cart_item_No();?></sup>Mycart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">About</a>
                <?php
if(!isset($_SESSION['user_name'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='loginregisterpage.php'><i class='fa-solid fa-user'></i>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link' href='logout.php'><i class='fa-solid fa-user'></i>Logout</a>
</li>";
}
?>
<li class="nav-item">
                <a class="nav-link" href="profile.php">My Profile</a>
              </li>
              <!--</li>
              <li class="nav-item">
                <a class="nav-link" href="loginregisterpage.php"><i class="fa-solid fa-user"></i>Login</a>
              </li>-->
              <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="loginregisterpage.php">REGISTER</a></li>
            <li><a class="dropdown-item" href="user_login.php">LOGIN</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>-->
              
            </ul>
           <form class="d-flex" action="search_product.php " method="get">
              <input class="form-control me-2" type="search" 
              placeholder="Search" aria-label="Search" name="search_data">
              <!--<button class="btn btn-dark" type="submit">Search</button>-->
              <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
            </form>
          </div>
        </div>
      </nav>
      </div>
    <!--navigation end-->