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
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<?php
  include 'db_connect.php';
  session_start();
  $name=$_SESSION['username'];
  $query=mysqli_query($con,"SELECT * FROM register where username='$name'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  $image = $row["image"];
  $email = $row["email"];
  $gender = $row["gender"];
  $phone = $row["phone"];
  ?>
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
	
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Profile</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">User Information</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<section class="checkout_area section-margin--small">
    <div class="container">

        
        <div class="billing_details" >
            <div class="row">
                <div class="col-lg-8">
               
                <form method="post" action="#" enctype="multipart/form-data"> 

                <div class="col-md-12 form-group">
                        <b><label>Profile Picture</label></b>
                        <input type="file" name="image" id="image" value="<?php echo $image; ?>" width="150px" height="100px" class="form-control" >
                        </div> 
                  
                        
						<div class="col-md-12 form-group">
                        <b><label>User Name</label></b>
                        <p class="form-control-static"><?php echo $name; ?></p>
                        </div>
						<div class="col-md-12 form-group">
                        <b><label>Gender</label></b>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender ?>" required />
                        </div>
                        <div class="col-md-12 form-group">
                        <b><label>Your Email</label></b>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" required />
                        </div>
                        <div class="col-md-12 form-group">
                        <b><label>Phone Number</label></b>
                        <input type="tel"  class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}||[0-9]{3}-[0-9]{8}" value="<?php echo $phone ?>"required />
                        <medium>Format: 012-3456789</medium>
                        </div>
                         
                        
						
								
                        <input type="submit" value="Comfirm" name="submit" id="submit" class="btn btn-primary" style="width:20em; margin:0;">

    
                                                
                    </form>
                    <br>
                    <a href="profile.php"><input type="submit" value="Cancel" name="Edit" class="btn btn-primary" style="width:20em; margin:0;background-color:red" ></a><br><br>
                </div>
                
            </div>
        </div>
    </div>
  </section>
		<br><br><br><br><br>
		


  

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
</body>

<?php
      if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $fileInfo = PATHINFO($_FILES["image"]["name"]);

        //the path to store the uploaded image
        if (empty($_FILES["image"]["name"])){
		      $location=$image;
	      }
	      else{
		    if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png" OR $fileInfo['extension'] == "PNG" OR $fileInfo['extension'] == "JPG" OR $fileInfo['extension'] == "jpeg" OR $fileInfo['extension'] == "JPEG") {
			      $newFilename = $fileInfo['filename'] . $fileInfo['extension'];
			      move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $newFilename);
			      $location = "img/" . $newFilename;
            }
        }

      $query = "UPDATE register SET
                      email = '$email', image='$location', gender='$gender', phone='$phone'
                      WHERE username = '$name'";
                    $result = mysqli_query($con, $query);
      ?>
        
        <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile.php";
        </script>
        <?php }     ?>

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

