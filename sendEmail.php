<?php
$status = "";
$subject = "Sending Email Using PHP Mailer";
$body ='<p>Congratulations!</p>';
$body .='<p>You have successfully received an email from
<a href="https://www.allphptricks.com/">AllPHPTricks.com</a>.</p>';
$body .='<p>Watch TV Abroad via Best VPNs Guide Visit: <a href="https://www.bestvpnsguide.com/">BestVPNsGuide.com</a>.</p>';
// Enter Your Email Address Here To Receive Email
$email_to = "ewekengy@gmail.com";

$email_from = "threeC_onlinestore@hotmail.com"; // Enter Sender Email
$sender_name = "threeC Team"; // Enter Sender Name
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.outlook.com"; // Enter Your Host/Server
$mail->SMTPAuth = true;
$mail->Username = "threeC_onlinestore@hotmail.com"; // Enter Sender Email
$mail->Password = "Xiajianping520";
//If SMTP requires TLS encryption then remove comment from it
//$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = $sender_name;
$mail->Sender = $email_from; // indicates ReturnPath header
$mail->AddReplyTo($email_from, "No Reply"); // indicates ReplyTo headers
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
// If you know receiver name using following
//$mail->AddAddress($email_to, "Recepient Name");
// To send CC remove comment from below
//$mail->AddCC('username@email.com', "Recepient Name");
// To send attachment remove comment from below
//$mail->AddAttachment('files/readme.txt');
/*
Please note file must be available on your
host to be attached with this email.
*/

if (!$mail->Send()){
	$status = "Mailer Error: " . $mail->ErrorInfo;
	}else{
	$status = "<div style='color:#FF0000; font-size:20px; font-weight:bold;'>
	An email has been sent to your email address.</div>";
	echo '<script type="text/javascript">
										alert("Message has been sent successfully")
										</script>';
}
?>

<html>
<head>
<title>Send Email in PHP Using PHPMailer - AllPHPTricks.com</title>
</head>
<body>
<?php echo $status; ?>
<br /><br />
<a href="https://www.allphptricks.com/send-email-in-php-using-phpmailer/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
<br /><br />Watch TV Abroad via Best VPNs Guide Visit: <a href="https://www.bestvpnsguide.com/">BestVPNsGuide.com</a>
</body>
</html>