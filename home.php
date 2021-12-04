<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: log.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
  <!-- AIzaSyD3DS7vl0hBWsboxGivtpkAC92As2Kcbhw -->
<head>
  <title>SoFit - Profile</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  
  <!--stylesheet and boostrap first then javascript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD3DS7vl0hBWsboxGivtpkAC92As2Kcbhw"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="script1.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <h1><a class="navbar-brand" href="#">SoFit</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>		  
          <li class="nav-item">
           <a href="logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Log in successful</h1>
        <p class="lead">
            
    
		 
        <div class="content">
			
			<p>Welcome, <?=$_SESSION['name']?>! Click the profile page to go to your profile or click Home to go to the map.</p>
			
		</div>
		
        <!--<ul class="list-unstyled">
          <li>Bootstrap 4.3.1</li>
          <li>jQuery 3.4.1</li>
        </ul>-->
      </div>
    </div>
  </div>
   <center><footer id="footer">Copyright &copy; So-fit 2019 Home | About us | Services | Contact Us </footer></center>
</body>

</html>