<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body background="">
<?php
include("signup.php");
extract($_POST);
$cn=mysqli_connect("localhost","root","root","mysql");
$query="insert into registration (username,pass,confirm_pass) values ('$lid','$pass','$cpass')";
$rs=mysqli_query($cn,$query)or die ("Could Not Perform the Query");


?>
</body>
</html>

