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
 $conatct =$_POST['contact'];

 $q="select * from logindatabase where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
{
 	"duplicate data";
 	header('location:userreg.html');
 }
 else
 {
 	$qy="insert into logindatabase(username,email,contact,password) values('$name','$email','$conatct','$pass')";
 	mysqli_query($con,$qy);
 	echo "inserted";
 	header('location:user.html');
 }
 ?>