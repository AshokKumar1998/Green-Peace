<!--Team Name: Squad:The Creators
File Name: home.html
Author Name: GreenPeace
-->
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
        <title>GreenPeace</title>

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
		<style>
			body{
		background: url("images/bg.jpg") fixed no-repeat;
		background-size:cover;
}
			.form-container{
				width:400px;
				height:fit-content;
				background: rgba(210,210,210,0.8);
				text-align:center;
				margin-left:auto;
				margin-right:auto;
				border-radius:15px;
				margin-top:100px;
			}
			.form-container input{
				padding:10px;
				border:none;
				border-radius:5px;
				margin-top:3px;
				margin-bottom:3px;
			}
		</style>

    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!--                            <a href="#"> </a>
                                                        <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                        </div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
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
                                            <li><a data-hover="Events"  href="events.php"><span>Events</span></a></li>
                                            <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact.php"><span>contact Us</span></a></li>
                                            <li><a data-hover="Join Us" class="active"><span>Join Us</span></a></li>
											</ul>

                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </header>


			
            <!--end-->

			<div class="form-container">
<form method='POST'>
<b>
<h2>Join Us Here</h2><br/>
<center>
<table>
<tr><td>First Name:</td><td><input type='text' name="f_name"></td></tr>
<tr><td>Last Name:</td><td><input type='text' name="l_name"></td></tr>
<tr><td>DOB:</td><td><input type='date' name="dob"></td></tr>
<tr><td>Phone Number:</td><td><input type='number' name="phn"></td></tr>
<tr><td>Address:</td><td><input type='text' name="add"></td></tr>
<tr><td>Qualification:</td><td><input type='text' name="qua"></td></tr>
<tr><td>Work As:</td><td><input type='text' name="vol"></td></tr>

<tr><td><br><br><input type="submit" name="sub" style="margin-left:120px;"></td></tr>
</center>
</table>
</fieldset>
</b>
</form>

</div>

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
    </body>
</html>
