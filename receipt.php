<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="background-color:#CCC">
<body background="burj.jpg">
<?php
$rollno5=$_SESSION['roll'];
$con=mysql_connect();
mysql_select_db("test",$con);
$query="select name,rollno,degree,branch,batch,noofpapers,amtppaper,amttbpaid from student where rollno=$rollno5";
$result=mysql_query("$query",$con);
$row=mysql_fetch_array($result);


	$name1=$row['name'];
	$rollno2=$row['rollno'];
	$degree=$row['degree'];
	$branch=$row['branch'];
	$batch=$row['batch'];
	$noofpapers=$row['noofpapers'];
	$amtppaper=$row['amtppaper'];
	$amttbpaid=$row['amttbpaid'];
	$query="update student set amtpaid=1 where rollno=$rollno5";
	mysql_query("$query",$con);
	echo '
	<div style="float:left; margin-left:1.5cm;margin-top:0.5cm;width:100;height:100;">
	<img src="anna_university_logo.png" width="100" height="100"></img>
	</div>
	<div style="float:left; width:800px;height:150px;margin-left:2.5cm;">
	<h1 style="text-align:center; color:white;height:20px;">ADDITIONAL CONTROLLER OF EXAMINATIONS</h1>
	<h2 style="text-align:center;color:white;height:20px;">Anna University :: Chennai-25</h2>
	<h2 style="text-align:center;color:white;height:20px;">Examination Fee Payment Receipt May 2012 - Dec 2012</h2>
	
	</div>
	<div style="float:left;width:200px;height:150px;">
	<h3 align="right">
	<a href="login.php">Sign Out</a></h3>
	<br/>
	<h3 style="margin-left:2px;">  Date :'.date("d-M-Y").'</h3></div>
	<div style="margin-top:0.5cm;width:1100px;height:400px;float:left;">
<table style="font-size:26px; margin-left:300px;"  border="1" cellpadding="5" cellspacing="5" width="700">
	<tr>
	<td style="text-align:center;" width="100">Name</td>
	<td width="42" style="text-align:center;" width="600"  >'.$name1.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Roll Number</td>
	<td style="text-align:center;"   >'.$rollno2.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Degree</td>
	<td style="text-align:center;" >'.$degree.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Branch</td>
	<td style="text-align:center;"  >'.$branch.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Batch</td>
	<td style="text-align:center;"  >'.$batch.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Number Of Papers</td>
	<td style="text-align:center;"  >'.$noofpapers.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Amount per paper</td>
	<td style="text-align:center;"  > Rs: '.$amtppaper.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Total Amount Paid</td>
	<td style="text-align:center;color:red;"  > Rs: '.$amttbpaid.'</td>
	</tr>
	</table></div>
	<div style="float:left;width:200px;height:100px;margin-top:325px;">
	<h3 style="text-aligh:left;text-font:20px;"><i>Authorized Signatory</h3></i>
	</div>
	<div style="float:left;width:500px;height:100px;">
	<form method="get" action="login.php" style="margin-left:17cm;margin-top:0.25cm;">
	<input type="submit" value="OKAY" style="font-size:20px; color:maroon;">
	</form>
	</div>';
	?>
    
</body>
</html>