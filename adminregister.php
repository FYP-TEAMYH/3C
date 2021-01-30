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
		$img = "img/user2.jpg" ;



		 
		
				$query = "INSERT into `admin` (username, email, password,image)
				VALUES ('$username', '$email' , '".md5($password)."','$img')";
				$result = mysqli_query($con,$query);
				if($result){
					echo "<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
					<div class='confirmation-card' style='text-align: center'>
					<div class='container'>
					<br><br><br>
					<h3>You are registered successfully.</h3>
					<br/>Click here to <a href='adminlogin.php'>Login</a>
					<br><br><br><br></div></div></div>";
				}
		
			}else{
		

				
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


	<!-- ================ same name validation ================= -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#username').keyup(function()
        {
            $.post("adminRegister.validation.php",
            {username:$('#username').val()
            },function(response)
            {
                $('#adminUsernameResult').fadeOut();
                setTimeout("Userresult('adminUsernameResult','"+escape(response)+"')",350);
            });
            return false;

        });
    });
    function Userresult(id,response)
    {
        $('#adminUsernameLoading').hide();
        $('#'+id).html(unescape(response));
        $('#'+id).fadeIn();
    }
</script>
<!-- ================ same name validation ================= -->



	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="" method="post"  id="register_form" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"   required/>
								<span id="adminUsernameLoading"></span>
        						<span id="adminUsernameResult"></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required />
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password should contains one Upperletter and Lowerletters, minimum length is 8.">
							
			  </div>
			  
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required />
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
	
							
							
								<input type="submit" value="Register" name="loginbtn" class="button button-register w-100 " style="margin:0px 0px 50px 0px"></button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  



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
</html>