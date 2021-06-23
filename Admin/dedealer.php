<?php
$con=mysqli_connect('localhost','root');

if ($con) 
  {

  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'testdb');
 $roll=$_GET['rn'];
 $q="DELETE FROM dealerdb WHERE dno='$roll'";
 $data=mysqli_query($con,$q);
 if($data){
     echo "<font color='white'>User deleted";
     header('location:vedealer.php');
 }
 else{
     echo "<font color='white'>Failed to delete";
 }
 ?>