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
$vname=$_POST['vname'];
$feed =$_POST['feedback'];

$q="insert into feedback(vname,feedback) values('$vname','$feed')";
$res=mysqli_query($con,$q);
if($res){
    header('location:userhome.php?Successfull');
}
else{
    header('location:add feedback.html?SomeErrorOccured');
}