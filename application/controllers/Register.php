<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function submit()
    {
        $conn=mysqli_connect('127.0.0.1','root','hello mysql.','cv_builder');
    	if(!$conn){
    		die('Conection failed');
    	}
    	//echo "Connection established";
    	$firstname= $_POST['firstname'];
    	$lastname=$_POST['lastname'];
    	$username=$_POST['username'];
    	$email= $_POST['email'];
    	$password= $_POST['password'];
    	$phone=$_POST['phone'];
    	$gender=$_POST['optradio'];
    	$sql="INSERT INTO users (firstname,lastname,username,email,password,phone,gender) VALUES('$firstname','$lastname','$username','$email','$password','$phone','$gender')";
    	//echo $sql;//this is just to debug
    	if(mysqli_query($conn,$sql))
    	{
    		$this->load->view('dashboard');
    	}
    	else
    		echo "email or phone already exist";
    	mysqli_close($conn);
    }
}
