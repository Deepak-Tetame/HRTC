<!DOCTYPE html>
<html lang="en">
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
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
		<li><a href="#">Live Tracking</a></li>
        <li><a href="#">Contact</a></li>
        <!-- <li><a href=".\EmissionCalculator.html">Emission Calculator</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userLogin.php"><span class="glyphicon glyphicon-log-in"></span> User  Login</a></li>
        <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Administrator Login</a></li>

      </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <h1 class="text-center">Arrival Time Calculator</h1>

    <form class="row">
      <div class="col-md-6">
        <label for="distance" class="form-label">Distance (km):</label>
        <input type="number" class="form-control" id="distance">
      </div>

      <div class="col-md-6">
        <label for="averageSpeed" class="form-label">Average speed (km/h):</label>
        <input type="number" class="form-control" id="averageSpeed" value="40">
      </div>
 <br><br>
      
    </form>
    <br>
    <div class="col-md-12" >
       <center>
            <button type="button" class="btn btn-primary mt-5 "  onclick="calculateArrivalTime()">Calculate arrival time</button>
       </center> 
      </div>
    <div class="mt-3 text-center" id="arrivalTime"></div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Custom JS -->
  <script>
    function calculateArrivalTime() {
      const distance = parseFloat(document.getElementById('distance').value);
      const averageSpeed = parseFloat(document.getElementById('averageSpeed').value);

      const timeHours = distance / averageSpeed;
      const timeMinutes = timeHours * 60;

      document.getElementById('arrivalTime').innerHTML = `To cover ${distance} kilometers at an average speed of ${averageSpeed} km/h, it will take approximately ${timeHours.toFixed(2)} hours or ${timeMinutes.toFixed(2)} minutes.`;
    }
  </script>
</body>
</html>