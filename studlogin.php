<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logstud</title>
</head>

<body style="background-color:">
<body background="love.jpg">

	<div style="width:900px;height:50px;float:left;"><h1 style=" color:white;text-align:center;margin-left:12cm;">ENTER BANK DETAILS</h1></div>
	<div style="float:right;width:100px;height:50px;">
<a href="login.php" style="text-align:right;margin-top:0px;">Sign Out</a></div>
<div style="margin-left:2cm;float:left;height:400px;width:600px;"><br/><br/>
<form method="post" action="receipt1.php" name="bank"><br/><br/>
<table style="font-size:30px;margin-top:1cm;" align="center" cellpadding="10" cellspacing="1">
	<tr>
	<td style="text-align:center;">Account Number </td>
	<td style="text-align:center;"><input type="text" name="acno"></td>
	</tr>
	<tr>
	<td style="text-align:center;">Password</td>
	<td style="text-align:center;"><input type="password" name="pass"></td>
	</tr>
	<tr>
	<td style="text-align:center;">CVV Code</td>
	<td style="text-align:center;"><input type="text" name="cvv"></td>
	</tr>
    <tr><td></td><td></td></tr>
	<tr>
	<td style="text-align:center;"><input style="font-size:20px;" type="submit" value="PAY FEE" name="pay" /></td></form>
	<td style="text-align:center;"><form method="get" action="login.php" name="cance">
<input style="font-size:20px;" type="submit" value="CANCEL" name="cancel" /></td>
	</tr>
</form>
</table>
</div>
	<div style="float:left; height:500px;width:500px;"><br/><br/>
<img style="opacity:0.4; float:left;"  width="500" height="500"  hspace="50" />
</div>
</body>
</html>