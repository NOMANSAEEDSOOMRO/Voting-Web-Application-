<?php
include 'database/connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Result</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Sans+JP|Slabo+27px&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="logimages\1.png" class="img-fluid">
        <b><?php echo $_SESSION['user_username'];?> </div>
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
        <h1 class="mt-4 text-capitalize">Here you can view the results</h1>
        
      </div>

      <div class="container-fluid mt-3">
  <img src="C:\Users\Dell\OneDrive\Desktop\web project\images\ehfa.jpg" class="img-fluid">
  <p class="text-capitalize text-success mx-3">The .navbar-brand class is used to highlight the brand/logo/project name of your page.</p>
  </div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <h3 class="text text-info text-capitalize text-center">Result portion</h3>
      <p class="text text-danger">IN this section those election result displayed which are ended</p>
      <form method="post">
        <select class="form-control" name="een">
          <div class="form-group">
            <option class="form-control" selected="selected">Select Election</option>
            <?php
            $current_ts-time();
            include 'database/connection.php';
        $select="SELECT * FROM `election`";
        $run=$con->query($select);
        if($run->num_rows>0)
        {
          while ($row=$run->fetch_array()) {
            
            $electionname=$row['election_name'];
            $electionsdate=$row['Election Start date'];
            $electioneend=$row['Election End date'];
            ?>
            <?php
            $election_end_date_ts=strtotime($election_end_date);
            if ($election_end_date_ts<$current_ts) {
              # code...
            }
            ?>
            <option value="<?php echo $row ['election_name'];?>"><?php echo $row ['election_name'];?></option>
            <?php
          }
        }
            ?>
          </div>
        </select>
        <div class="form-group">
          <input type="Submit" name="result"  value="Search Result" class="btn btn-success mt-3">
          </form>
          <table class="table-responsive table mt-3 text-center table-bordered">
        <tr>
          <th>#</th>
          <th>Candidate Name</th>
          <th>Obtain Votes</th>
          <th>Winning Status </th>  
        </tr>
         <?php
      include 'database/connection.php';
      include('sweetalert/popup.php');
      if (isset($_POST['result'])) {
         $en=$_POST['een'];
         $select ="select * from result where election_name  = '$en'" ;
         $run=$con->query($select);
         if($run->num_rows>0)
          {
            $total_election_votes=0;
            while ($row=$run->fetch_array()) {
            $total_election_votes=$total_election_votes+1;
      
            }
          }
          
          $select1 ="select * from candidates where election_name  = '$en'" ;
         $run1=$con->query($select1);
         if($run1->num_rows>0)
          {
            $total=0;
            while ($row2=$run1->fetch_array()) {
              $total=$total+1;
             $Candidate_name=$row2['candidate_name'];
              $total_votes=$row2['total_votes'];
             $ercentage=(($total_votes/$total_election_votes)*100);
            
             
             ?>
             <tr>
              <td><?php echo $total ;?></td>
              <td><?php echo $Candidate_name ;?></td>
              <td><?php echo $total_votes ;?></td>
              <td>
                <?php
                if ($ercentage>50) {
                  ?>
                  <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar"
                  aria-valuenow="<?php echo $ercentage;?>" aria-valuemin="0" aria-valuemax="<?php echo $ercentage;?>" style="width:<?php echo $ercentage;?>%"><?php echo $ercentage;?>%
                </div>
              </div>
              <?php
                }
                else if($ercentage>40)
                {
                  ?>
                  <div class="progress">
                  <div class="progress-bar progress-bar-info" role="progressbar"
                  aria-valuenow="<?php echo $ercentage;?>" aria-valuemin="0" aria-valuemax="<?php echo $ercentage;?>" style="width:<?php echo $ercentage;?>%"><?php echo $ercentage;?>%
                </div>
              </div>
                  <?php
                }
                else
                  {
                    ?>
                    <div class="progress">
                  <div class="progress-bar progress-bar-danger" role="progressbar"
                  aria-valuenow="<?php echo $ercentage;?>" aria-valuemin="0" aria-valuemax="<?php echo $ercentage;?>" style="width:<?php echo $ercentage;?>%"><?php echo $ercentage;?>%
                </div>
              </div>

                    <?php
                  }

                ?>
 
              </td>
             </tr>
             <?php
            }
            ?>
            <tr>
              <td colspan="2">Total Votes</td>
            <td> <?php echo $total_election_votes ?></td>
            </tr>

            <?php

          }

        }
      ?>  
      </table>  
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
