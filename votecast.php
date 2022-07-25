<?php
include 'database/connection.php';
session_start();
if(!$_SESSION['user_id_genrated'])
{
  echo "<script>window.location.href='election.php'</script>";
exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Cast Vote </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right"  id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="logimages\1.png" class="img-fluid">
        <b><?php echo $_SESSION['user_username'];?></div>
      <div class="list-group list-group-flush">
        <a href="home.php" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="id gen.php" class="list-group-item list-group-item-action bg-light">Genrate ID</a>
        <a href="election.php" class="list-group-item list-group-item-action bg-light">Election</a>
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
        <h1 class="mt-4 text-capitalize">Step #4.</h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="logimages\1.jpg" class="img-fluid">
  <h4 class="text-capitalize mt-3 text-primary">Cast Your Vote Here..</h4>
  </div>


  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <form method="post">
        <?php
        include 'database/connection.php';
         $electioname=$_GET['election_name'];
         ?>
         <div class="form-group">
          <input type='text' value='<?php echo $electioname;?>' class='form-control' readonly='readonly'>
         </div>
         <?php
        $select ="select * from candidates where election_name   = '$electioname'" ;
        $run=$con->query($select);
        if($run->num_rows>0)
         {
          while ($row=$run->fetch_array()) {
            ?>
            <div class="form-group">
               <input type="radio"  class="list-group" value="<?php echo $row ['candidate_name'];?>" name="Candidatename">
            <label><?php echo $row ['candidate_name'];?></label>
              
            </div> 
           
            <?php
        }
      }
        ?>
        <input type="submit" name="castevote" class="btn btn-success mb-4" value="Cast Your Vote">
      </form>
      
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
<?php
include 'database/connection.php';
include('sweetalert/popup.php');
if (isset($_POST['castevote'])) {
  $Candidatename=$_POST['Candidatename'];
  $user_email=$_SESSION['user_email'];
  $s="select * from result where user_email='$user_email' and election_name='$electioname'";
  $exe1=$con->query($s);
  if ($exe1->num_rows>0) {
    echo "<script>Swal.fire('','You Already Casted Your Vote Against this Election','info')</script>";
  }
  else
  {
    $insert="INSERT INTO `result`(`user_email`, `candidate_name`, `election_name`) VALUES ('$user_email','$Candidatename','$electioname')";
  $run=$con->query($insert);
    if ($run)
    {
      $update="UPDATE candidates set total_votes = `total_votes` + '1' where candidate_name ='$Candidatename' and election_name ='$electioname'";
      $exe=$con->query($update);
      if ($exe)
      {
        include('sweetalert/popup.php');
        echo "<script>Swal.fire('','you have successfully casted your vote','success')</script>";
      }
      else
      {
        echo "you didnot cast your vote";
      }
    }
    else
    {
      echo "error";

    }
  }
}
?>
