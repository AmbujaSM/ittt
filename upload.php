<?php
session_start(); // Starting Session
include("header.php");
include 'connect.php';
$msg="";
$desc=$_POST['desc'];
$price=$_POST['price'];
$name=$_SESSION['login'];
if(isset($_POST['upload'])){
  $target="uploads/".basename($_FILES['userfile']['name']);

  $pdf=$_FILES['userfile']['name'];
  $error=$_FILES['userfile']['error'];
  


 $sql="INSERT INTO books(userfile,description,price,username) VALUES('$pdf','$desc','$price','$name')";
 mysqli_query($cn,$sql) or die('sorry'.mysqli_error($cn));

 if(move_uploaded_file($_FILES['userfile']['tmp_name'],$target)){

  $msg="file uploaded succesfully";
  echo "<script>
  alert('successfully uploaded');
        window.location.href='upload.html';
        </script>";
}
else{
$msg="Failed to upload a file";
   echo "<script>
  alert('error uploading image');
        window.location.href='upload.php';
        </script>";
}
}

?>
