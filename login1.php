<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>
<body style="background-color:#CCC">
<body background="vb.jpg">
<?php
echo '
<h1 style="text-align:center; color:#99ccff;"><i>COLLEGE OF ENGINEERING,GUINDY</h1></i>
<h2 style="text-align:center; color:#99ccff;"><i>ANNA UNIV,CHENNAI-25.</h2></i>
<h1 style="text-align:center; color:#3399cc;"><i><marquee>EXAMINATION FEE MANAGEMENT SYSTEM</marquee></h1></i>
<div style="float:left;height:200px;width:250px;margin-left:80px;">
<br/>
<br/><br/><br/><br/>
<h2 style="margin-left:0.75cm;color:#99ccff;">ADMIN LOGIN </h2><br/>
<form action="adminlogin.php" method="post" style="color:#99ccff;font-size:16px;">
Name : <input style="margin-left:25px;" type="text" name="adminname"  ><br/><br/>
Password : <input type="password" name="adminpassword"><br/><br/>
<input style="margin-left:4cm;" type="submit" name="login1" value="LOGIN"><br/><br/>
<i style="margin-left:0.7cm; color:red;">Enter Valid Login Detail !</i>
</form>
</div>
<div style="float:left; height:600px;width:600px;">
<img style="opacity:0.4; float:left;" src="coll logo.png" width="500" height="500"  hspace="90" />
</div>
<div style="float:left;width:320px;height:200px;">
<br/><br/><br/><br/><br/><br/>
<h2 style="margin-left:2cm;color:#99ccff;"> STUDENT LOGIN </h2>
<form action="payment1.php" method="get" style="color:#99ccff;font-size:16px;margin-left:1.5cm;">
Roll Number :<input style="margin-left:0.30cm;" type="text" name="rollno"><br/>
<br/>
<input style="margin-left:5.0cm;" type="submit" value="LOGIN" name="login2">
</form>
</div>
';
?>
</body>
</html>
