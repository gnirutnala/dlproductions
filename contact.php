<!DOCTYPE html>
<html lang="en">
<head>
    <title>DL Productions | Contact Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="dlstyle.css" type="text./css">

<style>
    .form-control { /*remove rounded corners on input fields*/
      border-radius: 0;
    }
    @media screen and (min-width: 400px;)/*?*/
    {
      #envelope {display: inline;}
    }
    @media screen and (max-width: 480px)/* If screen is less than 480px*/
    {
      #banner {display:none;}
      .container {margin-top: 40%;}
      .contact {text-align: right;}
    }
    @media screen and (min-width: 481px)/*if screen > 481 px*/
    {
      .container {padding: 80px 120px; margin-top: 0%;}
    }
    #googleMap {
      width: 100%;
      height: 300px;
    }
    h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
    }
    textarea { /* disable ability to resize text areas */
      /*resize: none;*/
    }
    @media screen  and (max-width: 900px) {
      #navlogo {height: 100px;}
    }
    @media screen and (min-width: 901px) {
      #navlogo {height: 200px;}
      .container {margin-top: 5%;}
    }
</style>
</head>

<body> <!-- TODO: figure our why this nav displays better than home -->
  <nav class="navbar navbar-default navbar-fixed-top w3-card-4">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img class="w3-card-4" img id="navlogo" src="logo.jpg" alt="DL Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" style="text-align:right;"><!-- sm screen nav-->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Music</a></li>
          <li><a href="#">Film/Video</a></li>
          <li><a href="#">Stagecraft Carpentry</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">More
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Merchandise</a></li>
              <li><a href="#"></a>Extras</li>
              <li><a href="#"></a>Media</li>
            </ul>
          </li>
          <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
  <div id="myPage" class="container">
    <h3 id="banner" class="text-center">Contact Us</h3>
    <hr id="banner">
    <!-- <p class="text-center"><em>We love our fans!</em></p> -->
    <div class="row test">
      <div class="col-md-4"> <!-- contact info -->
        <p class="contact hidden-xs">Feel free to call or email.</p>
        <p class="contact"><span class="glyphicon glyphicon-map-marker"></span>Brooklyn, NY</p>
        <p class="contact"><span class="glyphicon glyphicon-phone"></span>Phone:(845-645-8251)</p>
        <p class="contact"><span id="envelope" class="glyphicon glyphicon-envelope"></span>  laforge@dlproductions.biz</p>
      </div>

    <form method="POST" action="mailer.php">
      <div class="col-md-8">
        <div class="row">                      <!-- forms -->
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>

          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="text" required>
          </div>

          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5">
          </textarea>

          <div class="row">
            <div class="col-md-12 form-group">
              <!-- <button class="btn pull-right" type="submit">Send</button> -->
              <input class="btn pull-right" type="submit" value="Send" name="submit">
            </div>
          </div>
        </form>

        </div> <!-- closes row -->
      </div> <!-- closes col-md-8 -->
    </div> <!-- closes row-test -->
  </div> <!-- closes container -->

  <div id="googleMap"></div>

  <footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>&copy DL Productions 2015</p>
  </footer>

<script>
$(document).ready(function(){
  //initialize tooltip
  $('[data-toggle="tooltip"]').tooltip();
})
</script>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<!-- Add Google Maps, jQuery, and BSJS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
var myCenter = new google.maps.LatLng(40.654869, -73.950163);

function initialize()
{ // gMap script
   var mapProp = {
       center:myCenter,
       zoom:12,
       scrollwheel:false,
       draggable:false,
       mapTypeId:google.maps.MapTypeId.ROADMAP
   };
   var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

   var marker = new google.maps.Marker({position:myCenter,});

   marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

//smooth scroll script
$(document).ready(function() //I'm not a fan of JS brace placement
{    //initialize tooltip
   $('[data-toggle="tooltip"]').tooltip();
   // Add smooth scrolling to footer link
   $("footer a[href='#myPage']").on('click', function(event)
   {
       event.preventDefault();
       var hash = this.hash; // Store hash
       // jQuery's animate() method for smooth page scroll
       // (900) specifies the number of milliseconds it takes to scroll
       $('html, body').animate(
       {
           scrollTop: $(hash).offset().top
       }, 900, function()
           { // Add pound (#) to URL when done scrolling (default click behavior)
               window.location.hash = hash;
       });
   });
})
</script>
</body>
</html>
