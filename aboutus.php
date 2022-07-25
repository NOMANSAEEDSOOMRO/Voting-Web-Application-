<!DOCTYPE html>
<html lang="en">
<head>
	<title>About us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD );
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
} 
.clip {
	 border: 0;
	 clip: rect(0 0 0 0);
	 height: 1px;
	 margin: -1px;
	 overflow: hidden;
	 padding: 0;
	 position: absolute;
	 width: 1px;
}
 .svg--source {
	 display: none;
}
 .svg--icon {
	 width: 100%;
	 max-width: 5rem;
	 height: 100%;
	 max-height: 5rem;
	 display: block;
	 margin: 0 auto;
	 fill: currentColor;
}
 .wrapper {
	 width: 100%;
	 height: 50%;
	 display: flex;
	 flex-wrap: wrap;
	 align-items: center;
	 justify-content: center;
	 padding: 1rem;
}
 .share {
	 width: 5rem;
	 height: 5rem;
	 float: left;
	 margin: 0.5rem 1rem 0.5rem 0;
	 color: #353c4a;
	 border: 0.125rem solid #f3f3f3;
	 box-shadow: 0 0 8px 0 rgba(50, 50, 50, 0.15);
	 border-radius: 50%;
	 transition: 250ms;
}
 .share:last-child {
	 margin-right: 0;
}
 .share:focus {
	 outline-color: inherit;
}
 .twitter:hover, .twitter:focus {
	 color: #00aced;
	 box-shadow: 0 0 24px 0 #00aced;
}
 .github:hover, .github:focus {
	 color: #4183c4;
	 box-shadow: 0 0 24px 0 #4183c4;
}
 .pinterest:hover, .pinterest:focus {
	 color: #bd081c;
	 box-shadow: 0 0 24px 0 #bd081c;
}
 .youtube:hover, .youtube:focus {
	 color: #cd201f;
	 box-shadow: 0 0 24px 0 #cd201f;
}
 .facebook:hover, .facebook:focus {
	 color: #3b5998;
	 box-shadow: 0 0 24px 0 #3b5998;
}
 .google:hover, .google:focus {
	 color: #dd4b39;
	 box-shadow: 0 0 24px 0 #dd4b39;
}
......



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


<div class="about-section">
  <h1>Introducing..</h1>
  <p>The minds behind this wonderful creation of the E-Voting platform, which has been a handful to thousands of users.</p>
  <p>To Contact our team or for more details, read the information below.</p>
</div>

<h2 style="text-align:center" class="mt-4">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h3>Noman Saeed Soomro</h3>
        <p class="title">CEO & Founder</p>
        <p>Our founder and leader, the most brilliant mind behind this project, has acheived great success and more to come.</p>
        <p>nomiahmad90@gmail.com</p>
        <p><button class="button" onclick="myFunction()" >For personal contact, click here!</button></p>
        <script >
function myFunction() {
  Swal.fire('03343095727')
}

</script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h3>Sarshar Imtiaz</h3>
        <p class="title">UI Designer</p>
        <p>Our another insightful member, whom has been a great help in developing mainly working on the front end of the project.</p>
        <p>sarshar.samoo@gmail.com</p>
        <p><button class="button" onclick="myFunctio()">For personal contact, click here</button></p>
        <script >
function myFunctio() {
  Swal.fire('03041313322')
}

</script>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Mir Abdul Basit</h2>
        <p class="title">UX Designer</p>
        <p>Our another prominent member, who has lots of experience in this field and has helped us throughout the project</p>
        <p>mirabdulbasit@gmail.com</p>
        <p><button class="button" onclick="Function()">For personal contact, click here</button></p>
        <script >
function Function() {
  Swal.fire('03331334948')
}

</script>
        
      </div>
    </div>
  </div>
</div>
<div class="container-fluid text-capitalize m-auto text-center text-white alert" style="background-image: linear-gradient(to right , #37B9E9 , #63C4C9 ,#E3F2FD )">
  <h2 class="mb-2 mt-3">Our location</h2>
</div>
<div class="mapouter cen mx-4 mt-3"><div class="gmap_canvas"><iframe width="1200" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=sir%20syed%20university%20of%20engineering%20karchi&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:1200px;}</style>
</div>
<div class="container-fluid">
	<h1 class="mt-5" style="text-align: center;">Our Social Links</h1>
<svg class="svg--source" width="50" height="05" aria-hidden="true">

  <symbol id="svg--twitter" viewbox="0 -7 15 30">
    <path d="M15.36 3.434c-0.542 0.241-1.124 0.402-1.735 0.476 0.624-0.374 1.103-0.966 1.328-1.67-0.583 0.346-1.23 0.598-1.917 0.733-0.551-0.587-1.336-0.954-2.205-0.954-1.668 0-3.020 1.352-3.020 3.019 0 0.237 0.026 0.467 0.078 0.688-2.51-0.126-4.735-1.328-6.224-3.155-0.261 0.446-0.41 0.965-0.41 1.518 0 1.048 0.534 1.972 1.344 2.514-0.495-0.016-0.961-0.151-1.368-0.378 0 0.013 0 0.025 0 0.038 0 1.463 1.042 2.683 2.422 2.962-0.253 0.069-0.52 0.106-0.796 0.106-0.194 0-0.383-0.018-0.568-0.054 0.384 1.2 1.5 2.073 2.821 2.097-1.034 0.81-2.335 1.293-3.75 1.293-0.244 0-0.484-0.014-0.72-0.042 1.336 0.857 2.923 1.357 4.63 1.357 5.554 0 8.592-4.602 8.592-8.593 0-0.13-0.002-0.261-0.009-0.39 0.59-0.426 1.102-0.958 1.507-1.563z"
    />
  </symbol>

  <symbol id="svg--google" viewbox="-13 -13 72 72">
    <path d="M48,22h-5v-5h-4v5h-5v4h5v5h4v-5h5 M16,21v6.24h8.72c-0.67,3.76-3.93,6.5-8.72,6.5c-5.28,0-9.57-4.47-9.57-9.75
s4.29-9.74,9.57-9.74c2.38,0,4.51,0.82,6.19,2.42v0.01l4.51-4.51C23.93,9.59,20.32,8,16,8C7.16,8,0,15.16,0,24s7.16,16,16,16
c9.24,0,15.36-6.5,15.36-15.64c0-1.17-0.11-2.29-0.31-3.36C31.05,21,16,21,16,21z" />
  </symbol>

  <symbol id="svg--facebook" viewbox="0 -7 16 30">
    <path d="M12 3.303h-2.285c-0.27 0-0.572 0.355-0.572 0.831v1.65h2.857v2.352h-2.857v7.064h-2.698v-7.063h-2.446v-2.353h2.446v-1.384c0-1.985 1.378-3.6 3.269-3.6h2.286v2.503z" />
  </symbol>

  <symbol id="svg--github" viewbox="-30 -30 150 150">
    <path d="M61.896,52.548c-3.59,0-6.502,4.026-6.502,8.996c0,4.971,2.912,8.999,6.502,8.999
        c3.588,0,6.498-4.028,6.498-8.999C68.395,56.574,65.484,52.548,61.896,52.548z M84.527,29.132c0.74-1.826,0.777-12.201-3.17-22.132
        c0,0-9.057,0.993-22.76,10.396c-2.872-0.793-7.736-1.19-12.597-1.19s-9.723,0.396-12.598,1.189C19.699,7.993,10.645,7,10.645,7
        c-3.948,9.931-3.913,20.306-3.172,22.132C2.834,34.169,0,40.218,0,48.483c0,35.932,29.809,36.508,37.334,36.508
        c1.703,0,5.088,0.004,8.666,0.009c3.578-0.005,6.965-0.009,8.666-0.009C62.191,84.991,92,84.415,92,48.483
        C92,40.218,89.166,34.169,84.527,29.132z M46.141,80.574H45.86c-18.859,0-33.545-2.252-33.545-20.58
        c0-4.389,1.549-8.465,5.229-11.847c6.141-5.636,16.527-2.651,28.316-2.651c0.045,0,0.093-0.001,0.141-0.003
        c0.049,0.002,0.096,0.003,0.141,0.003c11.789,0,22.178-2.984,28.316,2.651c3.68,3.382,5.229,7.458,5.229,11.847
        C79.686,78.322,65,80.574,46.141,80.574z M30.104,52.548c-3.588,0-6.498,4.026-6.498,8.996c0,4.971,2.91,8.999,6.498,8.999
        c3.592,0,6.502-4.028,6.502-8.999C36.605,56.574,33.695,52.548,30.104,52.548z" />
  </symbol>

  <symbol id="svg--pinterest" viewbox="-180 -180 850 850">
    <path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
                C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
                c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
                c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
                c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
                c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" />
  </symbol>

  <symbol id="svg--youtube" viewbox="-150 -150 800 800">
    <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8
            C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5
            L357,255L204,369.75z" />
  </symbol>

</svg>

<div class="wrapper">
<div class="connect">

  <a href="" class="share twitter">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--twitter" />
    </svg>
    <span class="clip">TWITTER</span>
  </a>

  <a href="" rel="author" class="share google">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--google" />
      <span class="clip">GOOGLE +</span>
    </svg>
  </a>

  <a href="" rel="author" class="share facebook">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--facebook" />
      <span class="clip">FACEBOOK</span>
    </svg>
  </a>

  <a href="" class="share github">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--github" />
      <span class="clip">GITHUB</span>
    </svg>
  </a>

  <a href="" class="share  pinterest">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--pinterest" />
      <span class="clip">PINTEREST</span>
    </svg>
  </a>

  <a href="" class="share  youtube">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--youtube" />
      <span class="clip">YOU-TUBE</span>
    </svg>
  </a>

</div>
</div>
</div>




<footer id="sticky-footer" class="py-3 text-dark-90 " style="background-color: #E3F2FD" >
    <div class="container text-center">
      <small>Copyright &copy; NSA Website</small>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>