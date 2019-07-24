<?php
$no=0;
if(isset($_POST['insert']))
{
$s1=$_POST['sno'];
$s2=$_POST['ename'];
$s3=$_POST['place'];
$s4=$_POST['date'];
$s5=$_POST['time'];

$con=mysqli_connect('localhost','root','','green');
$query="INSERT INTO `event`VALUES ('$s1','$s2','$s3','$s4','$s5')";
mysqli_query($con,$query);
if(isset($_POST['insert'])){ echo "<script>alert('Data Inserted');</script>";}
}
if(isset($_POST['submit']))
{
$s1=$_POST['name'];
$s2=$_POST['email'];
$s3=$_POST['mssage'];

$con=mysqli_connect('localhost','root','','green');
$query="INSERT INTO `suggestion`VALUES ('$s1','$s2','$s3')";
mysqli_query($con,$query);
if(isset($_POST['submit'])){ echo "<script>alert('Thank You For Your Suggestion');</script>";}
}
if(isset($_POST['submit1']))
{
$s1=$_POST['name'];
$s2=$_POST['email'];
$s3=$_POST['event'];
$s4=$_POST['phone'];
$s5=$_POST['add'];
$s6=$_POST['city'];
$go=1;
$con=mysqli_connect('localhost','root','','green');
$query="select no from register order by no desc limit 1";
$no=mysqli_query($con,$query);
$no1 = $no -> fetch_assoc();
//echo "<p> here is no1  :  $no1["no"]</p>";
$no3=$no1["no"]+$go;
//echo "<p> here is no1  :  $no1[0]</p>";
$query="INSERT INTO `register`VALUES ('$s1','$s2','$s3','$s4','$s5','$s6',$no3)";
mysqli_query($con,$query);
header("Location: r.php");
}
if(isset($_POST['sub']))
{
$s1=$_POST['f_name'];
$s2=$_POST['l_name'];
$s3=$_POST['dob'];
$s4=$_POST['phn'];
$s5=$_POST['add'];
$s6=$_POST['qua'];
$s7=$_POST['vol'];

$con=mysqli_connect('localhost','root','','green');
$query="INSERT INTO `join11`VALUES ('$s1','$s2','$s3','$s4','$s5','$s6','$s7')";
mysqli_query($con,$query);
if(isset($_POST['sub'])){ echo "<script>alert('You Request Sent.');</script>";}
}
?>
