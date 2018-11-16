<!DOCTYPE html>
<html lang="en">
<head>
  <title>BusKaro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <a class="navbar-brand" href="#">BusKaro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Bus Schedule</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--<div class="jumbotron">
  <div class="container text-center">
    <h1>Book Bus Tickets On The Go...</h1>      
    <p>Eat Lunch In Peace, Ditch the Queue!</p>
  </div>
</div> -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/carousel/bus.jpg" alt="BusKaro">
      <div class="carousel-caption">
        <h1>BusKaro!</h1>
        <h3>Because You Need To Eat Your Lunch In Peace...</h3>
      </div>
    </div>

    <div class="item">
      <img src="../images/carousel/bus_bg.jpeg" alt="BusKaro">
      <div class="carousel-caption">
        <h1>BusKaro!</h1>
        <h3>Because You Have To Ditch The Queue...</h3>
      </div>
    </div>

    <div class="item">
      <img src="../images/carousel/bus2.png" alt="BusKaro">
      <div class="carousel-caption">
        <h1>BusKaro!</h1>
        <h3>Because Juniors Baap Ke Naukar Nahin Hai...</h3>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h2>Ticket Counter</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>Book Tickets</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
      
    </div>
    <div class="col-sm-4"> 
      <h3>Cancel Tickets</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
    </div>
    <div class="col-sm-4"> 
      <h3>Modify Tickets</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center"> 
  <h2>Enquiries and Everything Else</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>Weekly Bus Schedule</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
    </div>
    <div class="col-sm-4"> 
      <h3>Your BusKaro Profile</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
    </div>
    <div class="col-sm-4"> 
      <h3>Terms & Conditions</h3>
      <button type = "button" class = "btn btn-default btn-block">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      </button>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <h3>&copy; 2018 BusKaro. All Rights Reserved.</h3>
</footer>

</body>
</html>
