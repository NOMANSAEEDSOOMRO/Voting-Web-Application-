<?php
  require("database/connection.php");
  if (isset($_POST['Reg'])) {
     $user_fullname  = $_POST['Name'];
     $user_username  = $_POST['username'];
     $user_email  = $_POST['Email'];
     $user_gender  = $_POST['Gender'];
     $user_password  = $_POST['password'];
     $select = "select * from registration where user_email = '$user_email' ";
     $exe =$con->query($select);
     if ($exe->num_rows>0) 
     {
      require("sweetalert/popup.php");
      echo "<script>Swal.fire('Sorry!','This Email is already registered, Please try a unique Email!','info')</script>";
     }
     else
     {
      $insert = "INSERT INTO `registration`( `user_fullname`, `user_username`, `user_email`, `user_gender`, `user_password`) VALUES ('$user_fullname','$user_username','$user_email','$user_gender','$user_password')";
    $run=$con->query($insert);
    if ($run) {
      require("sweetalert/popup.php");
      echo "<script>Swal.fire('Thank you for Registering!','Your Account has been Created','success')</script>";
      
          }
          else
          {
            require("sweetalert/popup.php");
            echo "<script>Swal.fire('Check your connection')</script>";
          }

     }
    
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css"></script>
  <style >
  body {
    height: 100%;
      background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD );
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

<div class="container-fluid mt-2 ">
  <img src="images/ehfa.jpg" class="img-fluid" style="opacity: 0.8">
  <marquee> <p class="text-capitalize text-white mx-3 mt-3" style="font-size: 25px">Enter your credentials and register to our website to cast your Vote!</p> </marquee>
</div>
	
</header>

<div class="container text-capitalize">

  <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-4 text-white">Create Account </h1>
            <hr class="w-25 mx-auto mt-auto" style="border: 04px solid #003D51; border-radius: 5px">
            <div class="row">
                <div class="col-md-6 mx-auto"> 
                    <div class="card border-secondary">
                        <div class="card-header" style="background-color: #557D8B"> 
                            <h3 class="mb-0 my-2 text-white" >Sign Up</h3>
                        </div>
                        <div class="card-body" style="background-color: #e3f2fd">
                            <form class="form text-capitalize" method="post" role="form" autocomplete="off"
                            action="registration.php">
                                <div class="form-group">
                                    <label for="inputName" >Full Name</label>
                                    <input type="text" class="form-control"  placeholder="Enter your Full Name"required="" name="Name">
                                </div>

                                <div class="form-group">
                                    <label for="inputName" >Username</label>
                                    <input type="text" class="form-control"  placeholder="Enter your Username"required="" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" >Email</label>
                                    <input type="email" class="form-control" placeholder="Email@gmail.com" required="" name="Email">
                                </div>
                                
                                  <div class="form-group">
                                    <label for="gender" >Gender</label>
                                    <select class="custom-select form-inline" name="Gender">
                                      <option selected>Choose...</option>
                                      <option value="male" name="Gender" >Male</option>
                                      <option value="female" name="Gender"> Female</option>
                                      
                                    </select>
                                    
                                  </div>
                                <div class="form-group">
                                    <label for="inputPassword3" >Password</label>
                                    <input type="password" class="form-control"  placeholder="Enter your Password" title="At least 6 characters with letters and numbers" required="" name="password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn  btn-lg float-right text-white" style="background-color: #003D51" name="Reg">Register</button>
                                    Already have an Account? <a href="Login.php">Login </a>
                                </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                           I Agree to the terms and conditions.
                                           
                                          </label>
                                             </div>
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
<footer id="sticky-footer" class="py-3 text-dark-90 mt-5" style="background-color: #E3F2FD" >
    <div class="container text-center">
      <small>Copyright &copy; NSA Website</small>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>