<?php
session_start();

$name=$_POST['username'];
$pass=$_POST['password'];

if($name=="Alekhya" && $pass==5555|| $name=="Renuka" && $pass==5555|| $name=="Pavani" && $pass==5555|| $name=="Manasa" && $pass==5555){
    $_SESSION['username']=$name;
    header('location:adminhome.php');
}else{
    header('location:admin.html?Invaliddetails');
}

?>