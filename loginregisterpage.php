
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register page</title>
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


    <header>
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
                <a class="nav-link" href="#footer">Contact Us</a>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
      </div>
    <!--navigation end-->
    </header><br><br>
    <!--<div class="background-image"></div>-->

    <div id="carouselExampleCaptions" class="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" 
      class="active" aria-current="true" aria-label="Slide 1"></button>
      
    </div>
    <section class="hero-section">
      
    

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/CAROUSEL3.jpg" class="slide d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
        <a href="user_registration.php" class="btn btn-light fs-6 border-0'">REGISTER/LOGIN</a><br><br>
          <h5 class="text-dark">EXPLORE YOUR GALAXY WORLD</h5>
          <p class="text-dark">FITS ALL YOUR FITS.</p>
        </div>
      </div>
    </div>
    </section>
  <br>
  <!--carousel end-->

    

    
    
  
   

<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
</body>
</html>