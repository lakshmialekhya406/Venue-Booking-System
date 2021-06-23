<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="../Styles/style2.css">
    <style>
        button{
            width: 150px;
            height: 40px;
            background-color: #000000;
            color: #ffffff;
        }
        table,th,td{
            border: 1px solid black;
        }
        th,td{
            padding:10px;
            font-size:20px;
            text-align:center;
        }
        table{
            width: 60%;

            margin-top: 30px;
        } 
    </style>
</head>
<body>
    <div class="topnav">
        <a href="../home.html">Home</a>
        <a href="addvenue.html">Add Venue</a>
        <a class="active" href="verequest.html">View Request</a>
        <a href="dealer.html">Logout</a>
    </div>
    <?php
        session_start();
        $id=$_SESSION['dno'];
        $from=$_SESSION['email'];
        $frpass=$_SESSION['password'];

        
        $con=mysqli_connect('localhost','root');
        if ($con) 
        {
                
        }
        
        else
            {
                echo "no connection";
            }

        mysqli_select_db($con,'testdb');
        $q="select * from bookdb where dno='$id'";
        $p=1;
        $result=mysqli_query($con,$q);
        echo "<table align=center>";
        echo "<tr><th><font color='rgb(26, 2, 58)'>UId</th><th><font color='rgb(26, 2, 58)'>Name</th><th><font color='rgb(26, 2, 58)'>Date</th><th><font color='rgb(26, 2, 58)'>Days</th><th><font color='rgb(26, 2, 58)'>Email</th><th><font color='rgb(26, 2, 58)'>Operation</th></tr>";
        //echo "<tr><th><font color='white'>_______</th><th><font color='white'>_______________</th><th><font color='white'>___________</th></tr>";
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<tr><td><font color='rgb(26, 2, 58)'>";
            echo $p;
            $p=$p+1;
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['name'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['date'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['days'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['email'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo "<a href='accept.php?to=$row[email]'><font color='red'>ACCEPT</a> / <a href='reject.php?to=$row[email]'><font color='red'>REJECT</a> ";
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>