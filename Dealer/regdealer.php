<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'testdb');
 $name=$_POST['username'];
 $pass=$_POST['password'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];

 $q="select * from dealerdb where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
{
 	"duplicate data";
 	header('location:dealerreg.html');
 }
 else
 {
 	$qy="insert into dealerdb(username,contact,email,password) values('$name','$contact','$email','$pass')";
 	mysqli_query($con,$qy);
 	echo "inserted";
 	header('location:dealer.html');
 }
 ?>