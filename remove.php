<?php
include('connect.php');
if(isset($_GET['remove_userfile']))
{
	$res=mysqli_query($con,"SELECT * FROM books WHERE price=".$_GET['remove_userfile']);
	$row=mysqli_fetch_array($res);
	mysqli_query($con,"DELETE FROM books WHERE userfile=".$_GET['remove_userfile']);
	unlink("uploads/".$row['userfile']);
	header("Location:index.php");
	echo "deleted sucessfully";
}
?>
