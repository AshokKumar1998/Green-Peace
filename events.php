<?php
include('insert.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/leaf.png"/>
        <title>events</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>

<style>
body{
    background: url("images/hm.jpg") fixed no-repeat;
	background-size:cover;
}
table{
width: 100%;
text-align:center;
background-color:snow;


}
th{
font-size: 32px;
	font-family:Algerian;
	border:solid;
text-align:center;	
width:15%;
height:32px;

}
tr{
	padding-left:5px;
	font-family:Comic Sans MS;
font-size: 20px;
text-align:center;
	
}
td{
	border : solid;
height:32px;
	}
button{
	color:red;
	background-color:cyan;
	width:70%;
	height:80%;
}
button:hover{
	background-color:#f67483;
}
.rad{
border-radius:5px;
height:35px;
width:50%;
}
.btn{
border-radius:5px;
height:35px;
width:100px;
background-color: lightblue;
margin-top:3px;
margin-bottom:3px;

}
.btn:hover{
	background-color:#f67483;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 20; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: grey; /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    top: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {top: -300px; opacity: 0} 
    to {top: 0; opacity: 1}
}

@keyframes slideIn {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}
</style>


    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6"><div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div></div>
                    </div>
                </div>
            </div>
            <!--header--->
               <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="home.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="home.html"><span>green</span>Peace</a>
                                </div>                       
                            </div>
                            <!--div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div-->
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space" style="width:900px;">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" href="home.html"><span>Home</span></a></li>
                                            <li><a data-hover="About"  href="about.html"><span>About Us</span></a></li>
                                            <li><a data-hover="Gallery"  href="gallery.html"><span>Gallery</span></a></li>
                                            <li><a data-hover="Events"  class="active"><span>Events</span></a></li>
                                            <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact.php"><span>contact Us</span></a></li>
                                          <li><a data-hover="Join Us" href="join.php"><span>Join Us</span></a></li>
										  </ul>

                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </header>



            <!--end-->
           
<br><br><br>

   <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
					<li data-target="#myCarousel1" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                   
				   <div class="item active"> <img src="images/p0.jpg" style="width:100%; height: 500px" alt="First slide">
                    </div>
                    
					<div class="item"> <img src="images/p1.jpg" style="width:100%; height: 500px" alt="Second slide">
                    </div>
                    
					<div class="item"> <img src="images/p2.jpg" style="width:100%; height: 500px" alt="Third slide">
                    </div>
					
					<div class="item"> <img src="images/p3.jpg" style="width:100%; height: 500px" alt="Fourth slide">
                    </div>

					<div class="item"> <img src="images/p4.jpg" style="width:100%; height: 500px" alt="Fourth slide">
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

          <br><br><br>
            <div class="clearfix"></div>
<center><pre>                                       </pre><a href="login.php" ><input type="button" value="Login" style="font-family:Arial Black; font-size:15px; border-radious:8px; height:35px; width:65px; background-color:pink;"></a></center>
<hr>


<table border="5px">
<tr>
<th>Sno</th>
<th>Event Name</th>
<th>Place</th>
<th>Date</th>
<th>Time</th>
<th>Register</th>
</tr> 
<?php
$conn = mysqli_connect("localhost","root","","green");
if($conn-> connect_error){
die("connection failed  :  ".$conn->connect_error);
}
$sql= "select sno,event,place,date,time from event";
$res=$conn->query($sql);
if($res-> num_rows > 0){
while($row = $res -> fetch_assoc()){
//echo "<tr><td>".$row["sno"]."</td><td>".$row["event"]."</td><td>".$row["place"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
echo "<tr><td>".$row["sno"]."</td><td>".$row["event"]."</td><td>".$row["place"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td><button id='myBtn' >Register Here</button></td></tr>";
}
echo "</table>";
}
else{
echo "0 result";
}
$conn->close();
?>

<hr>
            <!---footer--->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>Get in touch</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>Poornima University, P.O. Vidhani Vatika Ext., Jaipur-303 905(Rajasthan)</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+91-141-6500250"> +91-141-6500250</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:info@poornima.edu.in"> info@poornima.edu.in</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>                           
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>explore</h4>
                                <ul class="list-unstyled footer-links">
                                    <li href="home.html"><a>Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="events.php">Events</a></li>
                                    <li> <a href="news.html">News</a></li>
                                    <li> <a href="contact.php">Contact Us</a></li>
									 <li> <a href="join.php">Join Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="footer-details">
                                <h4>Now On Instagram</h4>
                                <div class="row">
                                    <div class="instagram-images">
                                        <div id="instafeed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                        &copy; 2018 All right reserved. Designed by <font color="red">Squad :The Creators.</font>
                    </div>

                </div>
            </footer>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
		<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2><center>Register Here !!</center></h2>
    </div>
    <div class="modal-body">
			<center>
			<form method="POST">
         <input type="text" class="rad" name="name" placeholder="Name" required=""><br><br>
         <input type="email" class="rad" name="email" placeholder="Email" required=""><br><br>
         <input type="text" class="rad" name="event" placeholder="Event Name" required=""><br><br>
         <input type="text" class="rad" name="phone" placeholder="Phone Number" required=""><br><br>
		 <input type="text" class="rad" name="add" placeholder="Address" required=""><br><br>
         <input type="text" class="rad" name="city" placeholder="City" required=""><br><br>
             </center>               
                           
                           
     
     
     
    </div>
    <div class="modal-footer">
      <center>
	  <!--h3>Thank's For Register</h3-->
	  <input type="submit" class="btn" name="submit1" value="Register">
      </center>
	  </form>
      
    </div>
  </div>

</div>

		
		
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		
    </body>
</html>
