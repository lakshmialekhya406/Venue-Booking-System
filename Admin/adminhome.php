<?php
    session_start();
    $name = $_SESSION['username'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style1.css">  
    <style>
            .topright {
                position: absolute;
                top: 15px;
                right: 16px;
                font-size: 20px;
                }
            td{
                color: rgb(26, 2, 58);
                font-size: 25px;
            }
        </style>
</head>
<body>
<h1 style="font-size:45px">VENUE BOOKING SYSTEM</h1>
    <div class="topnav">
        <a class="active" href="home.html">Home</a>
        <a href="veuser.php">Users</a>
        <a href="vedealer.php">Dealers</a>
        <a href="Feedback.php">Feedback<a>
        <a href="admin.html">Logout</a>
    </div>
    
    <div class="bd">
        <p class="p1">Venue is the location at which an event takes place. It may refer to:<br>
        Venue (law), the place a case is heard.<br>
        Financial trading venue, a place or system where financial transactions can occur.<br>
        Music venue, place used for a concert or musical performance.<br>
        Sport venue, place used for a sporting event."</p>
    </div>
    <h1 style="margin-top:332px; font-size:45px;">Welcome</h1>
    <div class="topright">
        <table  bgcolor="orange">
            <tr>
            <td>Admin </td>
            <td> : <?php echo $name ;?></td>
            </tr>    
        </table>
    </div>
</body>
</html>