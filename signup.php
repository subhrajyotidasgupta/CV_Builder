<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
	$conn=mysqli_connect('127.0.0.1','root','2105','CV_BUILDER');
	if(!$conn){
		die('Conection failed');
	}
	//echo "Connection established";
	$firstname= $_POST['firstname'];
	$secondname=$_POST['secondname'];
	$username=$_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$phone=$_POST['phone'];
	$gender=$_POST['optradio'];
	$sql="INSERT INTO signup (firstname,secondname,username,email,password,phone,gender) VALUES('$firstname','$secondname','$username','$email','$password','$phone','$gender')";
	//echo $sql;//this is just to debug
	if(mysqli_query($conn,$sql))
	{
		echo "Registration Successful ";
		echo "\n";
		echo "\nWelcome ";
		echo $firstname;
		echo " ";
		echo $secondname;
	}
	else
		echo "email or password already exist";
	mysqli_close($conn);

?>
