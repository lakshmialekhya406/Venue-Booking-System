<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style2.css">
    <style>
        .fei{
            margin: 10px auto;
            text-align: center;
            box-shadow: 0 0 10px #666;
            width: 200px;
            height: 25px;
            background-color: #f2f2f2;
        }
        td{
            font-size: 25px;
            color: rgb(26, 2, 58);
        }
        button{
            width: 200px;
            height: 40px;
            background-color: rgb(26, 2, 58);
            color: #ffffff;
        }
        
        table{
            margin-top:200px;
        }
    </style>
</head>
<body>
    <form action="" method="POST" align="center">
        <table align="center">
            <tr>
                <td>Username :</td>
                <td><input type = "text" name = "name" class="fei" placeholder="Username"></td>
            </tr> 
            <tr>
                <td>Date :</td>
                <td><input type="date" name = "date" class="fei" placeholder="dd/mm/yyyy"></td>
            </tr>
            <tr>
                <td>No of Days :</td>
                <td><input type = "number" name = "days" class="fei" placeholder="enter days"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type = "text" name = "email" class="fei" placeholder="Email id"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type = "submit" name="submit">BOOK  NOW</button></td>
            </tr>
        </table>
    </form>
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
        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $days = $_POST['days'];
        $email = $_POST['email'];
        $did=$_GET['rn'];
        $q="insert into bookdb(name,date,days,email,dno) values('$name','$date','$days','$email','$did')";
        $res=mysqli_query($con,$q);
        if($res){
            $_SESSION['id']=$res['id'];
            header('location:userhome.php?RequestSent');
        }
        else{
            header('location:book.php?SomeErrorOccured');
        }
        }
    ?>
</body>
</html>