<?php
include('insert.php');
?>

<!doctype html>
<html>
<head>
<title>sign up form</title>
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
			.form-container{
				width:350px;
				height:fit-content;
				background: rgba(255,255,255,0.7);
				text-align:center;
				margin-left:auto;
				margin-right:auto;
				border-radius:15px;
				margin-top:190px;
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



<body style="background-image:url(images/home-back.jpg);">
<!--br><br><br>
<center><font family="Courier 10 Pitch" size="50px">Welcome</font></center-->
<a href="events.php" ><button style="position:fixed;top:10px;right:10px;" >Logout</button></a>
<b>
<font family="Courier 10 Pitch" size="3px">
<div class="form-container">
<form method='POST'>
<h2>Event Details</h2>
<center>
<table>
<tr><td>Sno:</td><td><input type='text' name="sno"></td></tr>
<tr><td>Event Name:</td><td><input type='text' name="ename"></td></tr>
<tr><td>Place:</td><td><input type='place' name="place"></td></tr>
<tr><td>Date:</td><td><input type='date' name="date"></td></tr>
<tr><td>Time:</td><td><input type='text' name="time"></td></tr>
<tr><td><br><br><input type="submit" name="insert"></td></tr>
</center>
</table>
</fieldset>
</form>

</div>
</font>
</b>
</body>
</html>
