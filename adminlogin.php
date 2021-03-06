
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3C Online Store[Admin]</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php	
	require('db_connect.php');
	
	if (isset($_POST['username'])){               
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);

		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);


		$query = "SELECT * FROM `admin` WHERE username='$username' 
		AND password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
			session_start();
			$_SESSION['username'] = $username;                
			header("Location: adminindex.php");
		}
		else{
			echo "<script>
			alert('Username/Password is incorrect'); 
			window.location = 'adminlogin.php';
			</script>";
			}
}
	?>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" alt="3C" height="50px" width="50px">&nbsp <b>3C Online Store  [ Admin ]</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
  
  
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Welcome to Administrator Page, Login</h3>
						<form class="row login_form" action="" method="post" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>

							<div class="col-md-12 form-group" style="margin-top:-5px">
			  	<div class="creat_account">
				  &nbsp &nbsp<input type="checkbox" onclick="showpassword()">
					<label for="f-option2">Show Password</label>
				</div>
			</div>				
							<script>
                    function showpassword()
                    {
                        var x=document.getElementById("password");
					
                        if(x.type=="password")
                        {
                            x.type="text";
							
                        }else{
                            x.type="password";
							
                        }
                    }
                    </script>
							
							
								<input type="submit" value="Login" name="loginbtn" class="button button-login w-100" ></input>
								<div class="col-md-12 form-group">
								<a href="adminregister.php">Create an Account?</a>

								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer class="footer">
		

		
	</footer>
	<!--================ End footer Area  =================-->



</body>
</html>


