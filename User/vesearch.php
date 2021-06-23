<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style2.css">
    <style>
        button{
            width: 150px;
            height: 40px;
            background-color: #000000;
            color: #ffffff;
        }
        #img_div{
            width: 70%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid black;
            display:flex;
        }
        #pda{
            font-size: 25px;
            padding: 10px;
            color :rgb(26, 2, 58);
        }
        #a{
            margin-top: 50px;
            padding:30px;
            font-size: 25px;
        }
    </style>
</head>
<body>
<?php
session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'testdb');
 $city = $_POST['city'];
 $cat = $_POST['catering'];
 $spe = $_POST['speciality'];
 $size =$_POST['capacity'];
 $park=$_POST['parking'];
 $din =$_POST['dining'];

 $q="select * from venue where city='$city' and capacity>='$size' and speciality='$spe' and catering='$cat' and parking='$park' and dining='$din'";
 $res=mysqli_query($con,$q);
 while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){
    
    echo "<div id=img_div >";
    echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width:300px ;height:200px;">';
    echo "<p id=pda>".$row['vname']."<br>".$row['dname']."<br>".$row['address']."<br>"."Mobile no : ".$row['phoneno']."</p>";
    echo "<a id=a href='book.php?rn=$row[id]'><font color='red'><b>BOOK</b></a>";
    echo "</div><br>";
 }
?>
</body>
</html>