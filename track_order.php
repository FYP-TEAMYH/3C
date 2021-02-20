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

                   if(isset($_GET['type']) && $_GET['type']!=''){
                    $type=$_GET['type'];
                    if($type=='status'){
                      $operation=$_GET['operation'];
                      $id=$_GET['id'];
                      if($operation=='active'){
                        $status='1';
                        echo "<script type='text/javascript'>alert('Thank you for supporting us !');</script>";
                      }else{
                        $status='0';
                      }
                      $update_status_sql="update order_table set status='$status' where order_id='$id'";
                      mysqli_query($con,$update_status_sql);
                    }
                  }
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
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Your Order</h1>
					
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  <?php 
  $query=mysqli_query($con,"select * from register where username='$username'");
  if($row=mysqli_fetch_array($query)){  
  $id=$row["id"]; }
  ?>
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
              
                                        <table class="table table-striped table-bordered table-hover" id="">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">Status</th>
                                                    <th>Number</th>
                                                    
                                                    <th>Transaction ID</th>
                                                    <th>Total Amount</th>
                                                    <th style="text-align:center;">View</th>
                                                    <th style="text-align:center;">Order Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            
                                            $query=mysqli_query($con,"select * from order_table where user_id='$id' ORDER BY order_status DESC");
                                            while($row=mysqli_fetch_array($query)){
                                                if(!empty($query)){
                                                ?>
                                                <tr>
                                                    <td><?php 

                                                            if($row['order_status']==1){
                                                              echo "
                                                              <h4 style='color:#DAA520;text-align:center;'><i class='fa fa-circle' style='color:#DAA520;font-size:13px'>Pending</i></h4>";
                                                            }
                                                            else if($row['order_status']==2){
                                                              echo "
                                                                    <h4 style='color:red;text-align:center;'><i class='fa fa-circle' style='color:red;font-size:13px'>Decline</i></h4>";
                                                            }
                                                            else if($row['order_status']==3){
                                                              echo "
                                                                    <h4 style='color:green;text-align:center;'><i class='fa fa-circle' style='color:green;font-size:13px'>&nbspApprove</i></h4>";
                                                            }
                                                    
                                                    ?></td>
                                                    <td><?php echo $row['order_number']; ?></td>
                                                    <td><?php echo $row['transaction_id']; ?></td>
                                                    <td><?php echo $row['order_total_amount']; ?></td>
                                                    
                                                    <td style="text-align:center;">
                                                    <a href="order_detail.php?id=<?php echo $row["order_id"]; ?>">
                                                    <input type="submit" value="view"id="submit" class="button button-login w-10" ></a></td>
                                                    <td style="text-align:center;">
                                                    <?php
                                                    if($row['order_status']==1){
                                                      echo "
                                                      <h4 style='color:#DAA520'>-</h4>";
                                                    }
                                                    else if($row['order_status']==2){
                                                      echo "
                                                            <h4 style='color:red'>-</h4>";
                                                    }
                                                    else if($row['order_status']==3){
                                                        if($row['status']==1){
                                                            echo "
                                                            <h4 style='color:green'>Received</h4>";
                                                            
                                                        }else{

                                                            echo "<span class='badge badge-danger' style='color:black;text-align: center;background-color:#FF8C00;'>
                                                            
                                                            <h4><a href='?type=status&operation=active&id=".$row['order_id']."'>Delivering</a></h4></span>";
                                                        }
                                                    }
                                                      
                                                    ?></td>
                                                </tr>

                                               

                                                <?php }}?>  
                                            </tbody>
                                        </table>
                                   
                  
                  <br><br>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->



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