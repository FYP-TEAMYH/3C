<!--================Sending Verification email =================-->
<?php
									use PHPMailer\PHPMailer\PHPMailer;
									use PHPMailer\PHPMailer\SMTP;
									use PHPMailer\PHPMailer\Exception;

									require_once "autoload.php";

									$mail = new PHPMailer(true);
									$mail->isSMTP();            
									                     
									$mail->Host = "smtp.outlook.com";
									$mail->SMTPAuth = true;    
									//这个是我们的email
									$mail->Username = "threeC_onlinestore@hotmail.com";                 
									$mail->Password = "jianpinglovexia1314";
									$mail->SMTPSecure = "tls";
									$mail->Port = 587;                                   
									$mail->From = "threeC_onlinestore@hotmail.com";
									$mail->FromName = "3C Online Store";
									//这个是send去的email，要改
									$mail->addAddress("ewekengy@gmail.com", "Mr Ewe");
									$mail->isHTML(true);
									$mail->Subject = "Forget Password";
									$mail->Body = "<p><b>Welcome to 3C Online Store </b></p>";
									try {
										$mail->send();
										echo "Message has been sent successfully";
									} catch (Exception $e) {
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									?>