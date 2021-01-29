<?php
include('db.php');
$error = "";
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `register` WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
   <div class='confirmation-card' style='text-align: center'>
   
   <h5>No user is registered with this email address!</h5>
   </div></div>";
   }
  }
   if($error!=""){
   echo "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
   <div class='confirmation-card' style='text-align: center'>
   <div class='error'>".$error."</div>
   <br /><h5><a href='javascript:history.go(-1)'>Go Back</a></h5>
   </div></div>";
   }else{
// Insert Subscribe Table
mysqli_query($con,
"INSERT INTO `subscribe` (`email`)
VALUES ('".$email."');");
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://localhost/3C/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">https://localhost/3C/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>threeC Team</p>';
$body = $output; 
$subject = "Subcription Activated";
 
$email_to = $email;
$fromserver = "threeC_onlinestore@hotmail.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.outlook.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "threeC_onlinestore@hotmail.com"; // Enter your email here
$mail->Password = "Xiajianping520"; //Enter your password here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "threeC_onlinestore@hotmail.com";
$mail->FromName = "threeC Team";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
   echo '<script type="text/javascript">
   alert("Verification email has been sent successfully")
   </script>';
 }
   }
}else{
?>
<section class="checkout_area section-margin--small">
    
<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
		<div class='confirmation-card' style='text-align: center'>
		
<form method="post" action="" name="reset"><br /><br />
<h5><label><strong>Enter Your Email Address:</strong></label></h5><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" class="button button-login w-10" value="Reset Password"/>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div></div></section>
<?php } ?>