<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body background="">
<?php
	include("header.php");
	$imagename=($_FILES['myimage']['name']); 
	echo $imagename;
//	$imagetmp=addslashes(file_get_contents($_FILES["myimage"]["tmp_name"]));
//echo $imagetmp;
include("upload.html");
extract($_POST);
$cn=mysqli_connect("localhost","root","root","mysql");
$query="insert into image_table ('imagetmp','imagename') values ('$imagetmp','$imagename')";
$rs=mysqli_query($cn,$query)or die ("Could Not Perform the Query");
?>
</body>
</html>


