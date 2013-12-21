<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin login</title>
</head>
<body style="background-color:blue;">
<body background="sky.jpg">
<?php
$name= $_POST['adminname'];
$password=$_POST['adminpassword']; 
$con=mysql_connect();
mysql_select_db("test",$con);
$quer="select password from admin where aname='$name'";
$result=mysql_query("$quer",$con);
$row = mysql_fetch_array($result);  
if(!strcmp($row['password'],$password) && $password!='' && $name!='')
{
	echo '<div style="width:900px;height:50px;margin-left:550px;float:left;"><h1 style=" color:black;"><i>WELCOME ADMIN</h1></i></div>
	<div style="float:right;width:100px;height:50px;">
<a href="login.php" style="text-align:right;margin-top:0px;">Sign Out</a></div>
	    <div style="float:left;height:200px;width:250px;margin-left:80px;">
<br/>
<br/><br/><br/><br/>
<h2 style="margin-left:0.75cm;margin-top:2cm;"><h style=" color:black;">Enter Roll Number: </h></h2><br/>
<form action="payment.php" method="get" style="color:black;font-size:16px;">
<b>ROLL NO: </b><input style="margin-left:20px;" type="text" name="rollno" ><br/><br/>
<input style="margin-left:4.0cm;" type="submit" name="studrollno" value="PAY FEE" size="40">
</form>
</div>
<div style="float:left; height:600px;width:600px;">
<img style="opacity:0.4; float:left;margin-top:25px;"  width="500" height="500"  hspace="90" />
</div>
<div style="height:200px;width:300px;margin-left:40px;float:left">
<br/><br/><br/><br/><br/><br/>
<h2 style="margin-left:-2cm;"><h style=" color:black;">View names of the students who dint pay the fee yet:</h></h2>
<form action="viewstud.php" method="get" style="color:blue;font-size:16px;">
<input style="margin-left:4.8cm;" type="submit" name="studlist" value="Get Names">
</form>
</div>';
}
else
{
mysql_close($con);
header("location:login1.php");
}
?>
</body>
</html>