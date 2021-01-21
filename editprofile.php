

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3C Online Store</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
</head>
  <?php
  include 'db_connect.php';
  session_start();
  $name=$_SESSION['username'];
  $query=mysqli_query($con,"SELECT * FROM register where username='$name'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
  <h1>Update Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <h5>
            <?php echo $name; ?></h5>
		</div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required />
        </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required />
		</div>
          <div class="form-group">
            <label>Comfirm Password</label>
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
      
          <div class="form-group">
          
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
        
          </div>
        </form>
        <a href="index.php"><input style="margin-left:15px" type="submit" value="                           Back                      " id="submit" class="button button-register w-100"></a>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      $query = "UPDATE register SET 
                      email = '$email', password = '".md5($password)."'
                      WHERE username = '$name'";
                    $result = mysqli_query($con, $query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }              
?>