<?php
    session_start();
    $name = $_SESSION['username'];
    $id =$_SESSION['dno'];
    
    $msg='';
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
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
            }
        </style>
    </head>
    <body>
        <h1 style="font-size:45px">VENUE BOOKING SYSTEM</h1>
    </body>
    <div class="topnav">
        <a class="active" href="../home.html">Home</a>
        <a href="addvenue.html">Add Venue</a>
        <a href="verequest.php">View Request</a>
        <a href="dealer.html">Logout</a>
    </div>
    <div class="bd">
        <p class="p1">Venue is the location at which an event takes place. It may refer to:<br>
        Venue (law), the place a case is heard.<br>
        Financial trading venue, a place or system where financial transactions can occur.<br>
        Music venue, place used for a concert or musical performance.<br>
        Sport venue, place used for a sporting event."</p>
    </div>
    <h1 style="margin-top:300px; font-size:45px;">Welcome</h1>
    <div class="topright">
        <table  bgcolor="orange">
            <tr>
            <td>Name </td>
            <td> : <?php echo $name ;?></td>
            </tr>
            <tr>
                <td>Id </td>
                <td> : <?php echo $id;?></td></tr>
        </table>
        
    </div>
</html>