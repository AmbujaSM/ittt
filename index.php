<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to Buying and selling of books</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body background="book5.png">
<?php
include("header.php");
$cn=mysqli_connect("localhost","root","root","mysql") or die("Could not Connect MySql");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($cn,"select * from registration where username='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION[login]))
{?>
<?php
include 'connect.php';
$query = "select *from books";
$result = mysqli_query($cn,$query);

echo "<h1 class='style8' align=center>Welcome to buying and selling of books</h1>";
echo '<table width="80%"  border="1" align="center"><th>BOOKS</th>
<th>DESCRIPTION</th>
<th>PRICE</th>';?>
<?php while($row = mysqli_fetch_array($result)){?>
	<tr border="1px solid">
			
		<td align="center" width="50%" > 
		<div class="lol">
			<?php $image= $row['userfile'] ;
			 $img="uploads/".$image;
			 echo'<img src="'.$img.'" width="20%" height="20%">';?>  </div></td>
			 
		<td> <?php echo $row['description'] ?></td>
		<td> <?php echo $row['price']?></td><td> <a href="remove.php?remove_userfile=<?php echo $row['userfile'] ?>">DELETE</a> </td> <?php } 
 


echo '</table>';
 echo '</br>'; echo '</br>';
echo '<center>';
    echo '<td width="93%" valign="bottom" bordercolor="#000000"> <a href="upload.html" class="style4">sell your books here</a></td>';
 echo '</center>';
   
		exit;
		

}

?>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#000000"><span class="style6"></span></td>
    <td width="29%" bgcolor="#000000"><div align="center" class="style1"></div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to PRESIDENCY UNIVERSITY buying and selling of books</h1>
      <span class="style5"><img src="book.jpeg" width="800" height="350">        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#000000">
<p align="left" class="style5">&nbsp;</p>
      
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Username</span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#000000"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="book.jpeg" width="500" height="200">          </p>
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
