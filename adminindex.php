
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
	
	if (isset($_POST['loginbtn'])){               
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);

		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);


		$query = "SELECT * FROM `adminlogin` WHERE User='$username' 
		AND Pass='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
			session_start();
			$_SESSION['username'] = $username;                
			header("Location: admindashboard.php");
		}
		else{
<<<<<<< HEAD
		echo "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
		<div class='confirmation-card' style='text-align: center'>
		<div class='container'>
		<br><br><br>
		<h3>Username/password is incorrect.</h3></div>

		<br><br><br>Click here to <a href='login.php'>Login</a>
		<br><br><br></div></div>";
		}
=======
			echo "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
			<div class='confirmation-card' style='text-align: center'>
			<div class='container'>
			<br><br><br>
			<h3>Username/password is incorrect.</h3></div>
	
			<br><br><br>Click here to <a href='adminindex.php'>Login</a>
			<br><br><br></div></div>";
			}
>>>>>>> e6ceee54216880811e486d6e4bd35a3d2a8ff173
	}
	else{
	?>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="adminindex.php"><img src="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" alt="3C" height="50px" width="50px">&nbsp <b>3C Online Store  [ Admin ]</b></a>
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
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="submit" value="Login" name="loginbtn" class="button button-login w-100" ></input>
								<a href="#">Welcome Back!</a>

								
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
		

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 3C Online Store
</p><br><br><br><br>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

<?php
    }
?>
