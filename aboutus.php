<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>BusKaro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: #333;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #428bce;
      font-size: 50px;
  }
  .logo {
      color: #428bce;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #428bce;
  }
  .carousel-indicators li {
      border-color: #428bce;
  }
  .carousel-indicators li.active {
      background-color: #428bce;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #428bce;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #428bce;
      background-color: #fff !important;
      color: #428bce;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #428bce !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #428bce;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #333;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #428bce !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #428bce;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BusKaro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="passenger/bookTicket.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Get Onboard!</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>About BusKaro</h1>
  <p>Local Bus Booking App for Institutions and Societies</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h2>What is Buskaro?</h2>
      <h4>BusKaro is an online bus ticket booking platform. At its initial stage, BusKaro is designed and optimised for use in PDPM IIITDM Jabalpur, Madhya Pradesh, India.</h4>
      <h4>BusKaro aims to make the long wait in queues obsolete. Tickets of all buses at all the time slots are
		  made available for a comfortable booking experience, from anywhere. BusKaro provides the users the choice and comfort to plan their travel and evening get-outs from the comfort of their hostels and houses.</h4>
	   <h4>The buses are not owned or operated by BusKaro. The tickets for the same are available on BusKaro and are also available with the respective bus contractors.</h4>
    </div>
    <div class="col-sm-3">
      <center>
      <h4><span style="font-size: 200px; color: #428bce;">
        <i class="fas fa-bus"></i>
      </span></h4>
    </center>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <center>
      <h4><span style="font-size: 200px; color: #428bce;">
        <i class="fas fa-gem"></i>
      </span></h4>
    </center>
    </div>
    <div class="col-sm-8">
      <h2>The Motivation</h2>
      <h4>BusKaro was conceived as a part of the end semester project for Course CS201 - Database Management Systems. The primary motivation however was to get rid of the hassle of engaging in queues for booking bus tickets for self and sometimes for seniors. </h4>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-send logo-small"></span>
      <h4>BOOK TICKET</h4>
      <p>Book Your Ticket</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-qrcode logo-small"></span>
      <h4>VIEW TICKET</h4>
      <p>View Your Ticket</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-remove-circle logo-small"></span>
      <h4>ANNOUNCEMENTS</h4>
      <p>Remain Updated With Recent Announcements</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-bullhorn logo-small"></span>
      <h4>CANCEL TICKET</h4>
      <p>Cancel Ticket</p>
    </div>
  </div>
  <br><br>
</div>


<!-- Container (Portfolio Section) -->
<!--<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div>--><br>


  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  	<h2>The Team</h2>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4><strong>Ajwad Shaikh</strong></h4>
        <div class="container"><h4>The bare instinct of survival is what he’s good at. Over the years, the instinct has assimilated into his work ethos, his passion for development, and his professional commitments — they simply won’t die out. The need to break out of the ordinary has led him to explore 		  pathways before coming of age. A coder at heart, hands and mind, from commented messages in code inspections, foo.bar links, access to what was denied, to the overwhelming joy of an AC(100), the adrenaline gushes each time he runs a code unit with or without changes (because hope is a good thing).
        </h4></div>
      </div>
      <div class="item">
        <h4><strong>Kaushal Kishor Sharma</strong></h4><div class="container"><h4>"The dedication to his work and finding the best solutions for different problems is what makes him a hard worker. He is a great supporter of others around him. The way he takes up a task and makes it his shown shows his dedication to learn, strive and be better than he is has made him into one of the fast learning minds and a backbone to any team he works in."</h4></div>
      </div>
      <div class="item">
       <h4><strong>Arnav Deep</strong></h4><div class="container"><h4>"He likes to learn about new things and laze around in his own time zone. His sense of humour in serious situations has always gotten the best out of him. An eager to understand how things work, he takes interest in every thing he can learn. His ability to not give up is quite tenacious and admiring. He is a human who changes most of the ways things work and make them their own."</h4></div>
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
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<?php require('passenger/footer.php') ?>
</body>
</html>
