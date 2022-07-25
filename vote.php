<?php
include 'database/connection.php';
session_start();
if(!$_SESSION['user_id_genrated'])
{
  echo "<script>window.location.href='election.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vote </title>

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
        <h1 class="mt-4 text-capitalize">Step #3.</h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="logimages\1.jpg" class="img-fluid">
  <marquee><h3 class="text-capitalize mt-2"> Welcome to the Voting Area</h3></marquee>
  </div>


  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <form method="post">
        <label>Categories</label>
        
        <select class="form-control" name="en">
        <option  selected="Select">Select Election</option>
        <?php
        include 'database/connection.php';
        $select="SELECT * FROM `election`";
        $run=$con->query($select);
        if($run->num_rows>0)
        {
          while ($row=$run->fetch_array()) { 
        ?>
        <option value="<?php echo $row ['election_name'];?>"><?php echo $row ['election_name'];?></option>
        <?php
      }
    }


        ?> 
        </select>
        <br>
        <input type="submit" name="SearchCandidate" class="btn btn-success" value="Search Candidate">
        
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
date_default_timezone_set("Asia/Karachi");
if (isset($_POST['SearchCandidate'])) {
	$elcn=$_POST['en'];
	$select="select * from election where election_name='$elcn'";
	$run=$con->query($select);
    if($run->num_rows>0)
    {
      while ($row=$run->fetch_array()) {
      	 $election_sdate=$row['Election Start date'];
      	 $election_edate=$row['Election End date'];	
      }
  }
  $current_ts=time();
  $election_start_date_ts=strtotime($election_sdate);
  $election_end_date_ts=strtotime($election_edate);
  if ($election_start_date_ts>$current_ts) 
  {
  	echo "<script>Swal.fire('','This Election did not start yet, Please select an active Election','info')</script>";
  }
  elseif ($current_ts>$election_end_date_ts)
  {
  	echo "<script>Swal.fire('',' This Election has been Closed. ','info')</script>";
  }
  else
  {
  	echo "<script>Swal.fire('','Redirecting..','success')</script>";
  	?>
	echo "<script>setTimeout(function(){
            window.location.href = 'votecast.php?election_name=<?php echo $elcn;?>';
         }, 1000);</script>";
	<?php
  }
}
?>
