<?php
include 'database/connection.php';
session_start();
if(!$_SESSION['user_email'])
{
  echo "<script>window.location.href='login.php'</script>";
}
?>
<?php
include 'database/connection.php';
  if (isset($_POST['sub'])) 
  {
    $id=$_POST['id'];
    $p=$_POST['p'];

    $select ="select * from registration where user_id_genrated = '$id' and user_password = '$p' " ;
    $run=$con->query($select);
    if($run->num_rows>0)
    {
      while ($row=$run->fetch_array()) 
      {
        $_SESSION['user_id_genrated']=$uid=$row['user_id_genrated'];
      }
              require("sweetalert/popup.php");
        echo "<script>const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Verified!'
})</script>";
echo "<script>setTimeout(function(){
            window.location.href = 'vote.php';
         }, 1100);</script>";
      
      }
      else
      {
      echo "Your Id or Password is Invalid";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Verification</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="logimages\1.png" class="img-fluid">
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
        <h1 class="mt-4 text-capitalize">Step #2.</h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="logimages\1.jpg" class="img-fluid">
  <b><p class=" text-primary mx-3 mt-3">Enter your Unique Generated ID for the verification in order to move on to the Voting Page <br>
  This step is essential for Security purposes.</p></b>
  </div>

  <div class="row mb-3">
                <div class="col-md-6 mx-auto"> 
                    <div class="card border-secondary">
                        <div class="card-header" style="background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD );"> 
                            <h3 class="mb-0 my-2 text-white" >Verification</h3>
                        </div>
                        <div class="card-body" style="background-color: #e3f2fd">
                            <form class="form" role="form" autocomplete="off" method="post" action="">
                                

                                <div class="form-group">
                                    <label for="Text">Your ID</label>
                                    <input type="Text" class="form-control" placeholder="Enter your ID" required="" name="id">
                                </div>
                                
                                
                                  
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" title="At least 6 characters with letters and numbers" required="" name="p">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn  btn-lg float-right text-white" style="background-color: #003D51"name="sub">Enter Voting Area</button>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
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
