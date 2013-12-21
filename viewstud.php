<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Student</title>
</head>
<body style="background-color:">
<body background="pro.jpg">
<div style="width:900px;height:50px;float:left;"><h1 style=" color:white;text-align:right;">STUDENTS NOT PAID FEE</h1></div>
	<div style="float:right;width:100px;height:50px;">
<a href="login.php" style="text-align:right;margin-top:0px;">Sign Out</a></div>
<br/><br/>
<br />
<br/>
<table width="700" border="1"  align="center" cellpadding="4" cellspacing="2" style="font-size:30px;">
<tr>
<th width="140">NAME</th><th width="140">Roll No.</th><th width="140">Degree</th><th width="140">Branch</th><th width="140">Batch</th>
</tr>
<?php
$con=mysql_connect();
mysql_select_db("test",$con);
$query="select name,rollno,degree,branch,batch from student where amtpaid=0";
$result=mysql_query("$query",$con);

while($row=mysql_fetch_array($result))
{
	echo '
	<tr><td style="text-align:center;">'.$row['name'].'</td><td style="text-align:center;">'.$row['rollno'].'</td><td style="text-align:center;">'.$row['degree'].'</td><td style="text-align:center;">'.$row['branch'].'</td><td style="text-align:center;">'.$row['batch'].'</td></tr>';

}
echo '
<table align="center">
<tr><td>
<form action="login.php" method="get">
<br/><br/>
<input style="font-size:20px;" type="submit" value="OK" name="submit" size="100">
</form></td></tr></table>
';
?>
</table>
</body>
</html>