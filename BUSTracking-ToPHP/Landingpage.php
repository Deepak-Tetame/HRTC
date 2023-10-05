<!DOCTYPE html>
<html lang="en">
<html lang="hindi">
<head>
  <title>Himachal Pradesh Bus Seva</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="logo.jpg" height="32" width="45"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
		<li><a href="#">Live Tracking</a></li>
        <li><a href="#">Contact</a></li>
        <!-- <li><a href=".\EmissionCalculator.html">Emission Calculator</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=".\userLogin.html"><span class="glyphicon glyphicon-log-in"></span> User  Login</a></li>
        <li><a href=".\adminLogin.html"><span class="glyphicon glyphicon-log-in"></span> Administrator Login</a></li>

      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1">
	  <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="electric_bus.jpg" height="100" width="25" alt="Image">
        <div class="carousel-caption">
          <h3>Himachal Pradesh Electric Bus</h3>
        </div>      
      </div>

      <div class="item">
        <img src="snow_bus.jpeg" height="100" width="100" alt="Image">
        <div class="carousel-caption">
          <h3>Himachal Pradesh Snow Region</h3>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="desiel_bus.jpeg" height="100" width="100" alt="Image">
        <div class="carousel-caption">
          <h3>Himachal Pradesh Desiel Bus</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="BusTime.html">
	  <img src="BusTimeTable.jpeg" class="img-responsive" style="width:100%" alt="Image">
      </a>
	  <p>Bus Time</p>
    </div>
	<div class="col-sm-4">
      <img src="Neareststop.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Nearest Stop</p>
    </div>
	<div class="col-sm-4">
      <img src="LiveTracking.jpeg" class="img-responsive" style="width:100%" "height:10%" alt="Image">
      <p>Live Tracking</p>
    </div>
	<div class="col-sm-4">
    <a href="/ETA.php">
    <img src="Estimatetime.jpeg" class="img-responsive" style="width:100%" alt="Image">
    </a>
      
      <p>Estimate Time</p>
    </div>
	<div class="col-sm-4">
      <img src="TrafficRoute.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Traffic Route</p>
    </div>
    <div class="col-sm-4"> 
      <img src="Emergency.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Emergency Alert</p>    
    </div>
    <!-- <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div> -->
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
