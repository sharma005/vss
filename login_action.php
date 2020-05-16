<?php

include("db.php");

$user_id=$_POST['user_id'];
$password=$_POST['password'];

echo "$user_id   <br>   $password";

$qry="SELECT * FROM `login` WHERE Email='$user_id' AND Password='$password'";

$res=mysqli_query($conn,$qry);

if (mysqli_num_rows($res)==1) {
	# code...
	echo "<br><br>login sucessful <br><br>";
}
else
{
	echo "<br> <br>not <br><br>";
}
?>