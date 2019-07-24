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
			background-color:khaki;
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



		</style>
	</head>

	<body>

	<div style="width:100%;height:10%;margin-top:40px;">
	<marquee  behavior="slide" direction="left" hspace="-20%" vspace="3%" loop="1">
	<h1><font face="Algerian" color="red"  >You have successfully registered</font></h1>
	</marquee>
	</div>

	<div style="width:65%;height:100%;float:left;background-color:pink;">


<font style="font-size:25px; font-family:Manjari Bold" >
  <br><br><br><br>
Your Detail's are  :- <br><br><br>

<?php
$conn = mysqli_connect("localhost","root","","green");
if($conn-> connect_error){
die("connection failed  :  ".$conn->connect_error);
}

$sql= "select name,email,event,phone,address,city from register order by no desc limit 1";
$res=$conn->query($sql);
if($res-> num_rows > 0){
while($row = $res -> fetch_assoc()){

echo "Name  :  ".$row["name"]."<br><br><br>Email  :  ".$row["email"]."<br><br><br>event  :  ".$row["event"]."<br><br><br>Phone  :  ".$row["phone"]."<br><br><br>Address  :  ".$row["address"]."<br><br><br>City  :  ".$row["city"];
}
}
else{
echo "0 result";
}
$conn->close();
?>

<font>
	</div>


	<div style="width:35%;height:100%;float:right;background-color:cadetblue;">
<br><br><br>Contact These Volunteer's For Any Question  <br><br><br>
<br><br><br><br><br>
      <table border="5px">
      <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      </tr>
      <?php
      $conn = mysqli_connect("localhost","root","","green");
      if($conn-> connect_error){
      die("connection failed  :  ".$conn->connect_error);
      }

      $sql= "select city from register order by no desc limit 1";
      $ser=$conn->query($sql);

      $sql="select fname,phone,address from join11";
      $res=$conn->query($sql);

      if($res-> num_rows > 0){
      while($row = $res -> fetch_assoc()){
      echo "<tr><td>".$row["fname"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";
      }
      echo "</table>";
      }
      else{
      echo "0 result";
      }
      $conn->close();
      ?>







	</div>
	</body>
	</html>
