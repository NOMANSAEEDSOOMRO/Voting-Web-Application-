<?php
include 'database/connection.php';
session_start();
if(!$_SESSION['user_email'])
{
  echo "<script>window.location.href='login.php'</script>";
}






?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> <img src="logimages\1.png" class="img-fluid">
      	<b><?php echo $_SESSION['user_username'];?></div>
      <div class="list-group list-group-flush">
        <a href="home.php" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="id gen.php" class="list-group-item list-group-item-action bg-light">Genrate ID</a>
        <a href="election.php" class="list-group-item list-group-item-action bg-light">Verification</a>
        <a href="vote.php" class="list-group-item list-group-item-action bg-light">Voting</a>
        <a href="result.php" class="list-group-item list-group-item-action bg-light">Result</a></b>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"> Menu </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4 text-capitalize">Welcome our dear member </h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="logimages\1.jpg" class="img-fluid">
  <b><marquee><h5 class="text-capitalize text-success mt-5 mx-3">You have logged in successfuly! For more info, refer below...</h5></marquee></b>
  </div>
  <div class="container mt-5 mb-5">
<div class="row">
  <div class="col-sm-6 mx-auto"> 
    <h3 class="text text-center alert mx-5 bg-primary" style="font: bold" >How to cast Vote?</h3>
    <ul class=" mx-auto">
      <li>In the First step, Select <b>Genrate ID</b> from the Menu.</li>
      <li>Then send request to <b>Admin</b> to generate a unique ID.</li>
      <li>Now click on <b>Verification</b> tab from the menu to verify yourself by inserting the generated ID and your account's password.</li>
      <li>Then you shall be automatically redirected to the <b>Voting</b> Page.</li>
      <li>Select the <b>Avaliable</b> Election.</li>
      <li>Now select your prefered <b>Category</b> and Search for the candidates.</li>
      <li>Finally, cast your <b>Vote!</b></li>



    </ul>
  </div>
 
<div class="col-sm-6"> 
  <img src="logimages/22.png" class="img-fluid rounded mx-auto d-block"> </div>
</div>
</div>






    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
