<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin login</title>
</head>
<body style="background-color:blue;">
<body background="CEG LOGO.jpg">

<h1 style="text-align:center; color:black;"><i>WELCOME ADMIN</i></h1>
	    <div style="float:left;height:200px;width:250px;margin-left:80px;">
<br/>
<br/><br/><br/><br/>
<h2 style="margin-left:0.75cm;">Enter Roll Number: </h2><br/>
<form action="payment.php" method="get" style="color:grey;font-size:16px;">
<b>Roll no. : </b><input style="margin-left:25px;" type="text" name="rollno"  ><br/><br/>
<input style="margin-left:2cm;" type="submit" name="studrollno" value="PAY FEE" size="40">
</form>
<h3 style="margin-left:50px;color:red;">Fee Paid Already</h3>
</div>
<div style="float:left; height:600px;width:600px;">
<img style="opacity:0.4; float:left;"  width="500" height="500"  hspace="90" />
</div>
<div style="height:200px;width:300px;margin-left:40px;float:left">
<br/><br/><br/><br/><br/><br/>
<h2 style="margin-left:0.5cm;">View names of the students who dint pay the fee yet:</h2>
<form action="viewstud.php" method="get" style="color:gray;font-size:16px;">
<input style="margin-left:1cm;" type="submit" name="studlist" value="Get Names">
</form>
</div>
</body>
</html>
