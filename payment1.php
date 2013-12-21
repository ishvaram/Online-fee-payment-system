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
<body background="blue.jpg">
</body>
<?php
$rollno1=$_GET['rollno'];
$con=mysql_connect();
mysql_select_db("test",$con);
$query="select name,rollno,degree,branch,batch,noofpapers,amtppaper,amttbpaid,amtpaid from student where rollno=$rollno1";
$result=mysql_query("$query",$con);
$row=mysql_fetch_array($result);

if($rollno1!='' and $row['rollno']!=0 and $row['rollno']!=NULL and $row['rollno']!='' and $row['amtpaid']!=1)
{
	$name1=$row['name'];
	$rollno2=$row['rollno'];
	$_SESSION['roll']=$rollno2;
	$degree=$row['degree'];
	$branch=$row['branch'];
	$batch=$row['batch'];
	$noofpapers=$row['noofpapers'];
	$amtppaper=$row['amtppaper'];
	$amttbpaid=$row['amttbpaid'];
	echo '
	<div style="width:900px;height:50px;float:left;"><h1 style=" color:white;text-align:right;">STUDENT INFORMATION</h1></div>
	<div style="float:right;width:100px;height:50px;">
<a href="login.php" style="text-align:right;margin-top:0px;">Sign Out</a></div>
	<div style="margin-left:2cm;float:left;height:400px;width:600px;"><br/><br/>
<table style="font-size:30px;" align="center" border="1" cellpadding="5" cellspacing="1">
	<tr>
	<td style="text-align:center;">Name</td>
	<td style="text-align:center;">'.$name1.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Roll Number</td>
	<td style="text-align:center;">'.$rollno2.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Degree</td>
	<td style="text-align:center;">'.$degree.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Branch</td>
	<td style="text-align:center;">'.$branch.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Batch</td>
	<td style="text-align:center;">'.$batch.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Number Of Papers</td>
	<td style="text-align:center;">'.$noofpapers.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Amount per paper</td>
	<td style="text-align:center;"> Rs: '.$amtppaper.'</td>
	</tr>
	<tr>
	<td style="text-align:center;">Total Amount To Be Paid</td>
	<td style="text-align:center;color:red;"> Rs: '.$amttbpaid.'</td>
	</tr>
	</table><br/><br/>
	<table hspace="75" cellspacing="20" border="0">
	<tr><td>
	<form action="studlogin.php" method="get">
	<input style="font-size:25px;margin-left:2cm;" type="submit" value="PAY FEE"  name="pay">
	</form></td>
	<td>
	<form action="login.php" method="get">
	<input style="font-size:25px;" type="submit" value="CANCEL"  name="cancel">
	</form>
	</td></tr>
	</table>
	</div>
	<div style="float:left; height:500px;width:500px;"><br/><br/>
<img style="opacity:0.4; float:left;" src="co.jpg" width="500" height="500"  hspace="50" />
</div>';
	
}
else if($row['amtpaid']==1)
{
	mysql_close($con);
	header("location:login2.php");
}
else
{
	mysql_close($con);
	header("location:login2.php");
}

?>
</body>
</body>
</html>