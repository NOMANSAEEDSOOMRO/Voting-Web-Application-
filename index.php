<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style >
    .carousel-inner img {
    width: 100%;
    height: 100%;
  }

    
  
 
  </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #6CC2D9;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img src="images/log.jpg" alt="logo" style="width:40px;">  E-VOTING SYSTEM
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="LOGIN.php">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="REGISTRATION.php">REGISTRATION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ABOUTUS.php">ABOUT US</a>
    </li>
  </ul>
</nav>


<div class="container-fluid mt-3">
  <img src="images/hm1.png" class="img-fluid">
  <marquee onmouseover="this.stop();" onmouseout="this.start();"><p class="text-capitalize text-success mx-3"><b>Welcome to our website, where you can arrange a voting session for any activity!</b></p></marquee>
</div>
<div class="container mt-3">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ul>
  
  <div class="carousel-inner mx-auto" style="align-items: center;">
    <div class="carousel-item active">
      <img src="edit img/1.jpg" alt="VOTE" width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img src="edit img/evote.jpg" alt="E-VOTE" width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img src="edit img/evote1.jpg" alt="E-VOTE" width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img src="edit img/vote.jpg" alt="E-VOTE" width="1000" height="400">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      
    </div>
  </div>
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      <a href="login.php"><h3 class="text-center mt-4 alert alert mx-auto bg-primary mb-2 text-white">Vote Now</h3></a>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
</div> 
</header>

<div class="container mt-5 mb-5">
<div class="row">
  <div class="col-sm-6 mx-auto"> 
    <h3 class="text text-center alert mx-5" style="background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD ); font: bold" >DETAILS</h3>
    <ul class=" mx-auto">
      <li>Excercise your voting rights quickly and easily at home / or from other side of the world.</li>
      <li>Cast your ballot with any device with access to the internet from anywhere in the world. </li>
      <li>The secret of your ballot is maintained under the high security standards adheredy by the policy online voting system.</li>
      <li>Your vote remains Anonymous as ours system architecture strickly seprates your personal data from the e-ballot</li>
    </ul>
  </div>
 
<div class="col-sm-6"> 
  <img src="images/hmb.jpg" class="img-fluid rounded mx-auto d-block"> </div>
</div>
</div>


<footer id="sticky-footer" class="py-3 text-dark-90" style="background-color: #E3F2FD" >
    <div class="container text-center">
      <small>Copyright &copy; NSA Website</small>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>