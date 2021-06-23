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
 //$email=$_POST['email'];

 $q="select * from logindatabase where username= '$name' && password= '$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {

  	if ($res['username']=='admin') 
  	{
  		header("location:home.html");
  	}
  	else
  	{

 	$_SESSION['username']=$name;
	 $_SESSION['sno']=$res['sno'];
 	header('location:userhome.php');
 	}
 }
 else
 {
 	$_SESSION['error']="error";
 	header('location:user.html?Invaliddetails');
 }
 ?>