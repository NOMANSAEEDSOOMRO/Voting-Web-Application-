<?php
session_start();
include 'database/connection.php';
  if (isset($_POST['sub'])) 
  {
    $e=$_POST['Email'];
    $p=$_POST['p'];

    $select ="select * from registration where user_email = '$e' and user_password = '$p' " ;
    $run=$con->query($select);
    if($run->num_rows>0)
    {
      while ($row=$run->fetch_array()) {
        $_SESSION['user_username']=$un=$row['user_username'];
        $_SESSION['user_email']=$e=$row['user_email'];

        require("sweetalert/popup.php");
        echo "<script>const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in Successfuly!'
})</script>";
      }
      echo "<script>setTimeout(function(){
            window.location.href = 'home.php';
         }, 2100);</script>";
    }
    else
    {
      require("sweetalert/popup.php");
      echo "<script>Swal.fire(
  'Sorry!',
  'You entered wrong Username or Password!',
  'error'
)</script>";
    }

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		loginpage</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Sans+JP|Slabo+27px&display=swap" rel="stylesheet">
<style >
	body{
		 background-image: url("images/l1.png");

		 }
</style>
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-sm  navbar-light" style="background-color: #6CC2D9;">
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
	</header>
	<div class="container text-capitalize">

  <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-4 text-white"   >Account login </h1>
            <hr class="w-25 mx-auto mt-auto" style="border: 04px solid #003D51; border-radius: 5px">
            <div class="row">
                <div class="col-md-6 mx-auto"> 
                    <div class="card border-secondary">
                        <div class="card-header" style="background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD );"> 
                            <h3 class="mb-0 my-2 text-white" >Login here</h3>
                        </div>
                        <div class="card-body" style="background-color: #e3f2fd">
                            <form class="form" role="form" autocomplete="off" method="post" action="login.php">
                                

                                <div class="form-group">
                                    <label for="inputEmail3" >enter Email</label>
                                    <input type="email" class="form-control" placeholder="email@gmail.com" required="" name="Email">
                                </div>
                                
                                
                                  
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="" name="p">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn  btn-lg float-right text-white" style="background-color: #003D51"name="sub">Sign in</button>
                                    dont have Account? <a href="REGISTRATION.php">Create Account</a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
  
</div>


<footer id="sticky-footer" class="py-4 text-dark-90 mt-4" style="background-color: #E3F2FD" >
    <div class="container text-center">
      <small>Copyright &copy; NSA Website</small>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>