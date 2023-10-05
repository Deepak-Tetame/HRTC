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
      <a class="navbar-brand" href="#"><img src="logo.png" height="32" width="45"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
		<li><a href="liveLocation.php">Live Tracking</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
  <h3>Admin Services</h3><br>
  <div class="row">
    <div class="col-sm-4">
      
      <a href='BusInformation.php'><img src="BusInfo.jpeg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Bus Information</p>
    </div>
	<div class="col-sm-4">
	  <a href="busEmission.php">
      <img src="busemission.jpeg" class="img-responsive" style="width:100%" alt="Image">
      </a>
	  <p>Bus Emission</p>
    </div>
	
	<div class="col-sm-4">
	    <a href="liveLocation.php"><img src="LiveTracking.jpeg" class="img-responsive" style="width:100%" alt="Image"></a>
      
      <p>Live Tracking</p>
    </div>
    <div class="col-sm-4">
        <a href="fuelType.php">
            	  <img src="fuelType.jpg" class="img-responsive" style="width:100%" alt="Image">
            
        </a>

	  <p>Fuel Type</p>
    </div>
       <!--<p>Some text..</p>-->
      </div>
      <div class="well">
       <p><br>Smart vehicle tracking system which shows bus live location, bus timing, nearest bus stand to make travel in more convenient or in easy way to travelers.</br>

          <br>The smart system which include the bus estimate time, busdetails along with emission compliance of the bus with respect to their fuel types (Diesel, CNG or Electric).</br>

          <br>DA smart transportation system which provides the real-time information to the user to enhance the efficiency and the convenience of the public transportation system using various advance technologies.</br>

          <br>Providing user friendly interface to traveler and advance safety features to enhance safety for the people travelling on risky roads</br></p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
