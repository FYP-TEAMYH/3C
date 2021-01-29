
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
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="category.php">Category</a></li>
              <li class="nav-item"><a class="nav-link" href="compare.php">Compare</a></li>
			  <li class="nav-item submenu dropdown">
               
                  <?php
                  require('db_connect.php');
                  session_start();
                  if(isset($_SESSION["username"])){?>
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                 <li class="nav-item"><a class="nav-link"><?php echo $_SESSION['username']; ?> </a></li>
                 <?php 
                 $query=mysqli_query($con,"select * from register ");
                 if($row=mysqli_fetch_array($query)){  
                   $username=$_SESSION["username"];
                   ?>
                 
                  
                 <li class="nav-item"><a class="nav-link" href="profile.php">User Profile</a></li>
                 
                  <?php } ?>
                  <li class="nav-item"><a class="nav-link" href="track_order.php">Track Order</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                  </ul>
                  <?php }else if(!isset($_SESSION["username"]))
                  {?>
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Login/Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" id="login" href="login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                </ul>
                <?php }?>
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
    

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
   
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img src="img/iphone1.jpg"  height="700px" width="1100px" alt="Main Page "  style="margin: 0px 0px 150px 10px">
            </div>
          </div>
          
        </div>
      </div>
   
    <!--================ Hero banner start =================-->

   


    <!-- ================ offer section start ================= --> 
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>Jian Ping Events!</h3>
              <h4>come get his panties</h4>
              <a class="button button--active mt-3 mt-xl-4" href="category.php">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

    
	
  <!-- ================ Welcome Email section start ================= -->
  
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
    

</div></div></section>

<!-- ================ Email section end ================= -->
<!-- ================ Subscribe section start ================= -->		  
<section class="subscribe-position">
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
  </section>
  <?php } ?>
	<!-- ================ Subscribe section end ================= -->
    

   

  </main>


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
									3c_online@hotmail.com
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
<?php 
		 if(isset($_POST['submit'])){
        
      $email = $_POST['subsemail'];
    
      $query = "INSERT into `subscibe` (email)
      VALUES ('$email')";
      $result = mysqli_query($con, $query);
    //move uploaded img into folder : img 
    
               
  ?>
      
      <script type="text/javascript">
          alert("Update Successfull.");
          window.location = "subscibe.php?email=<?php echo $email ?>";
      </script>
      <?php
           } 
                  			
?>