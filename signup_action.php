<?php
	include("db.php");
	
	$f_name=$_POST['f_name'];
	$aadhar=$_POST['aadhar'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_pass=$_POST['confirm_pass'];

echo "$f_name  <br> $aadhar <br>  $mobile <br>  $gender <br>  $email <br>  $password <br>  $confirm_pass";



	$qry="INSERT INTO `login` (`s_no.`, `Full_Name`, `Aadhar_Number`, `Mobile_Number`, `Gender`, `Email`, `Password`) VALUES (NULL, '$f_name', '$aadhar', '$mobile', '$gender', '$email', '$password')";
mysqli_query($conn,$qry);



?>