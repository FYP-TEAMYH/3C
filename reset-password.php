<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3C Online Store</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<?php
include('db.php');
$error='';
if (isset($_GET["key"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error.= '<div class="col-md-14 col-xl-12 mb-12 mb-xl-0">
            <div class="confirmation-card" style="text-align: center">
            <h2>Invalid Link</h2>
            <p>The link is invalid/expired. Either you did not copy the correct link
            from the email, or you have already used the key in which case it is 
            deactivated.</p>
            <p><a href="https://localhost/3C/reset-password.php">
            Click here</a> to reset password.</p></div></div>';
  }else{
    $row = mysqli_fetch_assoc($query);
    $expDate = $row['expDate'];
    if ($expDate >= $curDate){
    ?>
    <br />
    <div class='col-md-8 col-xl-9 '>
		<div class='confirmation-card' style='margin:120px 20px 20px 420px'>
    <form method="post" action="" name="update">
    <input type="hidden" name="action" value="update" />
    <br /><br />
    <div class="col-md-11  form-group" >
    <h5><center> &nbsp &nbsp &nbsp &nbsp &nbspPlease reset your password</center></h5>
    <br>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password should contains one Upperletter and Lowerletters, minimum length is 8">
			  </div>
			  
              <div class="col-md-11 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required />
							</div>
							<script>
				                    var password=document.getElementById("password"),confirmPassword=document.getElementById("confirmPassword");
				                    function validatePassword()
				                    {
				                        if(password.value!=confirmPassword.value){
				                            confirmPassword.setCustomValidity("Passwords Don't Match!");
				                        }
				                        else{
				                            confirmPassword.setCustomValidity("");
				                        }
				                    }
				                    password.onchange=validatePassword;
				                    confirmPassword.onkeyup=validatePassword;
			</script>


    <input type="hidden" name="email" value="<?php echo $email;?>"/>
    <br><center><input type="submit" class="button button-login w-10" value="Reset Password"  /></center>
    </form>
    </div></div>
<?php
}else{
$error.= "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
          <div class='confirmation-card' style='text-align: center'>
          <h2>Link Expired</h2>
          <p>The link is expired. You are trying to use the expired link which 
          as valid only 24 hours (1 days after request).<br /><br /></p></div></div>";
     }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  } 
}

else{
  echo("error");
}
// isset email key validate end
if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["password"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");

 if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($con,
"UPDATE `register` SET `password`='".$pass1."'WHERE `email`='".$email."';"
);
 
mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
 
echo '
<div class="col-md-14 col-xl-12 mb-12 mb-xl-0">
		<div class="confirmation-card" style="text-align: center">
<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="https://localhost/3C/login.php">
Click here</a> to Login.</p></div></div></div><br />';
   } 
}

?>

   

   