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
 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 $vname = $_POST['vname'];
 $dname = $_POST['dname'];
 $city = $_POST['city'];
 $cat = $_POST['catering'];
 $park=$_POST['parking'];
 $spe = $_POST['speciality'];
 $contact =$_POST['contact'];
 $add=$_POST['address'];
 $size =$_POST['capacity'];
 $din =$_POST['dining']; 
 $did=$_POST['id'];

 $q="insert into venue(id,vname,dname,city,catering,dining,parking,capacity,speciality,phoneno,address,image) values('$did','$vname','$dname','$city','$cat','$din','$park','$size','$spe','$contact','$add','$file')";
 $res=mysqli_query($con,$q);

 $_SESSION['contact']=$contact;
 if($res){
     //echo '<script type="text/javascript"> alert("Venue added") </script>';
     header('location:dealerhome.php');
 }
 else{
    echo '<script type="text/javascript"> alert("Venue not added") </script>';
    header('location:addvenue.html');
 }
?>