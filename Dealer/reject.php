<?php
require '../PHPMailer/PHPMailerAutoload.php';

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
 $from=$_SESSION['email'];
 $frpass=$_SESSION['password'];
 
 $to=$_GET['to'];
 
 //$data=mysqli_query($con,$q);

 $mail = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $from;                 // SMTP username
$mail->Password = $frpass;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($from, 'Dealer');
$mail->addAddress($to);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($from, 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Rejected';
$mail->Body    = '<h1>Your request rejected</h1>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    $q="DELETE FROM bookdb WHERE email='$to' and dno='$id'";
    $data=mysqli_query($con,$q);
    header('location:dealerhome.php?Message Sent');
}
?>