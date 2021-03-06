<?php 
session_start();
if((!isset($_SESSION["username"])) && empty($_SESSION["username"])){
    header('location:index.php');
}


?>

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
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="category.php">Category</a></li>
              <li class="nav-item"><a class="nav-link" href="compare.php">Compare</a></li>
              <li class="nav-item submenu dropdown">
               
               <?php
               require('db_connect.php');
               
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
  <?php $id=$_GET['id'];
        
          $sql = "SELECT * FROM order_table where order_id='$id'";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_assoc($result))
					{
            $tran_id= $row["transaction_id"];
            $order_num = $row["order_number"];
            $total= $row["order_total_amount"];
            $street= $row["customer_address"];
            $city= $row["customer_city"];
            $state= $row["customer_state"];
            $country= $row["customer_country"];
            $postcode= $row["customer_pin"];
            $discount= $row["discount"];
          }
          
          ?>

  
  <!--================Order Details Area =================-->
  <section class="order_details section-margin--small">
    <div class="container">
      <p class="text-center billing-alert">Thank you. Your order has been received.</p>
      <div class="row mb-5">
      <div class="col-md-8 col-xl-6 mb-6 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Order Info</h3>
            <table class="order-rable">
              <tr>
                <td>Order number</td>
                <td>: <?php echo $order_num ?></td>
              </tr>
              <tr>
                <td>Transaction ID</td>
                <td>: <?php echo $tran_id ?></td>
              </tr>
              <tr>
                <td>Total</td>
                <td>: MYR <?php echo $total ?></td>
              </tr>
              <br>
              
            </table>
            <br>
          </div>
        </div>
        <div class="col-md-8 col-xl-6 mb-6 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Billing Address</h3>
            <table class="order-rable">
              <tr>
                <td>Street</td>
                <td>: <?php echo $street ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td>: <?php echo $city ?></td>
              </tr>
              <tr>
                <td>State</td>
                <td>: <?php echo $state ?></td>
              </tr>
              <tr>
                <td>Country</td>
                <td>: <?php echo $country?></td>
              </tr>
              <tr>
                <td>Postcode</td>
                <td>: <?php echo $postcode ?></td>
              </tr>
            </table>
          </div>
        </div>
        
        
      </div>
      <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
           <?php $sql2 = "SELECT * FROM order_item where order_id='$id'";
          $result2 = mysqli_query($con,$sql2);
          while($row = mysqli_fetch_assoc($result2))
          {
            $product= $row["order_item_name"];
            $quantity= $row["order_item_quantity"];
            $price= $row["order_item_price"];
           ?>
              <tr>
                <td>
                  <p><?php echo $product ?></p>
                </td>
                <td>
                  <h5> <?php echo $quantity ?></h5>
                </td>
                <td>
                  <p>RM <?php echo $price ?></p>
                </td>
              </tr>
             <?php } ?>
              
              <tr>
              <td>
                  <h4>Discount</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p>RM <?php echo $discount ?>.00</p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Total</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <h4>RM<?php echo $total ?></h4>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        
      </div>
      
    </div>
  </section>
  <!--================End Order Details Area =================-->



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