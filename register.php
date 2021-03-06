

<!DOCTYPE html>
<html lang="en">
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
<body>
<?php 
		require('db_connect.php');
		$errors = array();
		if (isset($_REQUEST['username'])){
				// removes backslashes
		 $username = stripslashes($_REQUEST['username']);
				//escapes special characters in a string
		 $username = mysqli_real_escape_string($con,$username); 
		 $email = stripslashes($_REQUEST['email']);
		 $email = mysqli_real_escape_string($con,$email);
		 $password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$img = "img/user2.jpg";
		
		$sql = "SELECT * FROM register WHERE username='$username'";
		$res = mysqli_query($con, $sql);
		$sql2 = "SELECT * FROM register WHERE email='$email'";
		$res2 = mysqli_query($con, $sql2);
		if (mysqli_num_rows($res) > 0) {?>
			<script>
			alert("Sorry... username already taken"); 
            window.location = "register.php";
			</script>
		<?php }
		else if (mysqli_num_rows($res2) > 0) {?>
			<script>
			alert("Sorry... E-mail already taken"); 
			window.location = "register.php";
			</script>
		<?php }
			else{

				$query = "INSERT into `register` (username, email, password, image)
				VALUES ('$username', '$email' , '".md5($password)."','$img')";
				$result = mysqli_query($con,$query);
				if($result){
					
					echo "<script>
					alert('You are registered successfully.'); 
					window.location = 'login.php';
					</script>";
				}}
		
			}else{
		

				
?>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" alt="3C" height="50px" width="50px">&nbsp <b>3C Online Store</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="category.php">Category</a></li>
              <li class="nav-item"><a class="nav-link" href="compare.php">Compare</a></li>
			  <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Login/Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a href="cart.php" id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart"><button><i class="ti-shopping-cart"></i>
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="nav-shop__circle"></span>
              </button></a> </li>
              <li class="nav-item"><a class="button button-header" href="checkout.php">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Login / Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
	
	<!-- ================ same name validation ================= -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#username').keyup(function()
        {
            $.post("register.test.php",
            {username:$('#username').val()
            },function(response)
            {
                $('#usernameResult').fadeOut();
                setTimeout("Userresult('usernameResult','"+escape(response)+"')",350);
            });
            return false;

        });
    });
    function Userresult(id,response)
    {
        $('#usernameLoading').hide();
        $('#'+id).html(unescape(response));
        $('#'+id).fadeIn();
    }
</script>
<!-- ================ same name validation ================= -->

  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Already have an account?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="" method="post"  id="register_form" >
							<div class="col-md-12 form-group">
							
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required />
								
								<span id="usernameLoading"></span>
        						<span id="usernameResult"></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required />
              </div>
			  
              <div class="col-md-12 form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password should contains one Upperletter and Lowerletters, minimum length is 8" >
				
			  </div>

              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required />
							</div>
			  <div class="col-md-12 form-group" style="margin-top:-15px">
			  	<div class="creat_account">
				  &nbsp &nbsp<input type="checkbox" onclick="showpassword()">
					<label for="f-option2">Show Password</label>
				</div>
			</div>				
							<script>
                    function showpassword()
                    {
                        var x=document.getElementById("password");
						var y=document.getElementById("confirmPassword");
                        if(x.type=="password" || y.type=="confirmPassword")
                        {
                            x.type="text";
							y.type="text";
                        }else{
                            x.type="password";
							y.type="password";
                        }
                    }
                    </script>

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
	
							
							
								<input type="submit" value="Register" name="loginbtn" class="button button-register w-100"></button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								Our online shop has provided the best interface platform for customer to purchase and compare about each Multimedia Accessories.
							</p>
							<p>
								Quality Assurance | Efficient 
								
							</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<ul class="list">
								<li><a href="index.php">Home</a></li>
								<li><a href="category.php">Shop</a></li>		
								<li><a href="compare.php">compare</a></li>				
							</ul>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						
					</div>
					<div class="offset-lg-0 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
								threeC_onlinestore@hotmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			
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

<?php } ?>
</body>
<script>
load_cart_data();
function load_cart_data()
 {
  $.ajax({
   url:"fetch_cart.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    $('#cart_details').html(data.cart_details);
    $('.total_price').text(data.total_price);
    $('.nav-shop__circle').text(data.total_item);
   }
  })
 }
 </script>
</html>