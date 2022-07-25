<?php
include 'database/connection.php';
session_start();
if(!$_SESSION['user_email'])
{
  echo "<script>window.location.href='login.php'</script>";
}
?>
<?php
$user_email=$_SESSION['user_email'];
$select="select * from registration where user_email = '$user_email'";
$run=$con->query($select);
    if($run->num_rows>0)
    {
      while ($row=$run->fetch_array()){
        $user_fullname  = $row['user_fullname'];
        $user_username  = $row['user_username'];
         $user_email  = $row['user_email'];
         $uid=$row['user_id_genrated'];
         
       }
     }
if($uid!="")
{
  "$uid";
}
else
{
  ?> 
  <?php
}
  ?>

     

<?php
require("sweetalert/popup.php");
include 'database/connection.php';
if (isset($_POST['id'])) {
     $user_fullname  = $_POST['usfl'];
     $user_username  = $_POST['un'];
     $user_email  = $_POST['em'];
     $select="select * from idrequest where user_email = '$user_email'";
     $run=$con->query($select);
     if ($run->num_rows>0) {
       echo"<script >Swal.fire('Request is already under Process, please wait!')</script>";
     }
     else
     {
      $insert="INSERT INTO `idrequest`(`user_fullname`, `user_username`, `user_email`) VALUES ('$user_fullname','$user_username',
     '$user_email')";
     $run=$con->query($insert);
     if($run)
     {
      echo "<script>Swal.fire('','Your Request for ID has been sent!','success')</script>";

     }
     else
     {
      echo "<script>Swal.fire('Check your connection')</script>";

     }
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

  <title>Genrate ID</title>

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
        <h1 class="mt-4 text-capitalize">Step #1.</h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="logimages\1.jpg" class="img-fluid">
  <b><p class="mt-3 text-primary mx-3">Here you can Generate a unique ID by sending request to the Admin, after which that ID shall be used for the verification process and later to cast your Vote!</p></b>
  </div>
  <div class="row mb-4">
                <div class="col-md-6 mx-auto"> 
                    <div class="card border-secondary">
                        <div class="card-header" style="background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD );"> 
                            <h3 class="mb-0 my-2 text-white" >Genrate ID</h3>
                        </div>
                        <div class="card-body" style="background-color: #e3f2fd">
                            <form class="form" role="form" autocomplete="off" method="post" >
                                

                                <div class="form-group">
                                    <label for="inputEmail3" >FullName</label>
                                    <input type="text" class="form-control" placeholder="email@gmail.com" required="" name="usfl" value="<?php echo $user_fullname; ?>" readonly>
                                </div>
                                
                                
                                  
                                <div class="form-group">
                                    <label for="inputName">Username</label>
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="" name="un" value="<?php echo $user_username; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Email</label>
                                    <input type="Email"class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="" name="em" value="<?php echo $user_email; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn  btn-lg float-right text-white" style="background-color: #003D51"name="id">ID request </button>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>


    </div>
  </div>




  <div class="container mt-3">
    <h4 class="text-info text-center mt-5 mb-3">Your Genrated ID is :<?php echo  $uid; ?> </h4>
  </div>
  <div class="container mb-3">
    <b class="text text-capitalize text-center mb-3">NOTE: Save this Unique ID for the next step! </b>
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
