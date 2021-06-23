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
        table,th,td{
            border: 1px solid black;
        }
        th,td{
            padding:10px;
            font-size:20px;
            text-align:center;
        }
        table{
            width: 70%;
        }
        
    </style>
</head>
<body>
    <div class="topnav">
        <a href="adminhome.html">Home</a>
        <a href="veuser.php">Users</a>
        <a class="active" href="vedealer.php">Dealers</a>
        <a href="Feedback.php">Feedback<a>
        <a href="admin.html">Logout</a>
    </div>
    <div class="bd">
        <img src="../Styles/p5.jpg" width=400 height=200>
        <p class="p1">Venue is the location at which an event takes place. It may refer to:<br>
        Venue (law), the place a case is heard.<br>
        Financial trading venue, a place or system where financial transactions can occur.<br>
        Music venue, place used for a concert or musical performance.<br>
        Sport venue, place used for a sporting event."</p>
    </div>
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
        $q="SELECT dno,username,venue.vname,email,contact from venue,dealerdb where dealerdb.username=venue.dname";
        $p=1;
        $result=mysqli_query($con,$q);
        echo "<table align=center>";
        echo "<tr><th><font color='rgb(26, 2, 58)'>Id</th><th><font color='rgb(26, 2, 58)'>Dealer Name</th><th><font color='rgb(26, 2, 58)'>Venue Name</th><th><font color='rgb(26, 2, 58)'>Email ID</th><th><font color='rgb(26, 2, 58)'>Mobile No</th><th><font color='rgb(26, 2, 58)'>Operation</th></tr>";
        
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<tr><td><font color='rgb(26, 2, 58)'>";
            echo $p;
            $p=$p+1;
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['username'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['vname'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['email'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo $row['contact'];
            echo "</td><td><font color='rgb(26, 2, 58)'>";
            echo "<a href='dedealer.php?rn=$row[dno]'><font color='red'>DELETE</a>";
            
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>