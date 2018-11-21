<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'?>
<body>
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

    .glyphicon.glyphicon-send {
    font-size: 150px;
    }

    .glyphicon.glyphicon-pencil {
    font-size: 150px;
    }

    .glyphicon.glyphicon-remove-circle {
    font-size: 150px;
    }

    .glyphicon.glyphicon-list-alt {
    font-size: 150px;
    }

    .glyphicon.glyphicon-user {
    font-size: 150px;
    }

    .glyphicon.glyphicon-edit {
    font-size: 150px;
    }
    .glyphicon.glyphicon-bullhorn {
    font-size: 150px;
    }
  </style>
<?php require 'navbar.php' ?>

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
</div><br><br>
<div class="container-fluid bg-3 text-center">

  <h2><i class="fas fa-ticket-alt"></i>&nbsp;Ticket Window&nbsp;<i class="fas fa-ticket-alt"></i></h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>Book Ticket</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="bookTicket.php"><span class="glyphicon glyphicon-send"></span></a>
      </button>
      
    </div>
    <div class="col-sm-4"> 
      <h3>Modify Ticket</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
        <a href="modifyTicket.php"><span class="glyphicon glyphicon-pencil"></span></a>
      </button>
    </div>
    <div class="col-sm-4"> 
      <h3>Cancel Ticket</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="cancelTicket.php"><span class="glyphicon glyphicon-remove-circle"></span></a>
      </button>
    </div>
  </div>
</div><br><br>

<div class="container-fluid bg-3 text-center"> 
  <h2><i class="fas fa-child"></i>&nbsp;Enquiries and Everything Else&nbsp;<i class="fas fa-child"></i></h2><br>
  <div class="row">
    <div class="col-sm-3">
      <h3>Weekly Bus Schedule</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="schedule.php"><span class="glyphicon glyphicon-list-alt"></span></a>
      </button>
    </div>
    <div class="col-sm-3"> 
      <h3>Your BusKaro Profile</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="index.php"><span class="glyphicon glyphicon-user"></span></a>
      </button>
    </div>
    <div class="col-sm-3"> 
      <h3>Announcements</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="#"><span class="glyphicon glyphicon-bullhorn"></span></a>
      </button>
    </div>
    <div class="col-sm-3"> 
      <h3>Terms & Conditions</h3><br>
      <button type = "button" class = "btn btn-link btn-block">
        <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
      </button>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-right">
  <h4><b>&copy; 2018 BusKaro.</b> All Rights Reserved.</h4>
</footer>

</body>
</html>
