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
              <li class="nav-item active"><a class="nav-link" href="compare.php">Compare</a></li>
			  <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Login/Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a href="cart.php"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button></a> </li>
              <li class="nav-item"><a class="button button-header" href="checkout.php">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <section>

				
				<div class="col-sm-9">
					<div class="features_items">
						<h2 class="title" style="margin: 50px 0px 0px 700px"><b>Comparison </b></h2>
						<h2 class="title text-center" style="margin-left:300px"></h2>
					<br>
					<style>
					table, th, td {
					  border: 1px solid black;
					  border-collapse: collapse;
					}
					th, td {
					  padding: 15px;
					}
					</style>
					</head>
					<body>
					
					<div class="gallery"> 
					
					
        
    </div> 
	<table style='width:100%;border:1px solid black;margin:50px 0px 0px 180px;'>
	
						<tr>
							<th></th>
							<td style='text-align: center'>
							<?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
							  while($row = mysqli_fetch_assoc($result)){ ?> <img src="<?php echo $row["photo"];?>" height="250px" width="250px" alt="Image" title="Image"> <?php } ?>
							</td>
							<td style='text-align: center'>
							<?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
							  while($row = mysqli_fetch_assoc($result)){ ?> <img src="<?php echo $row["photo"];?>" height="250px" width="250px" alt="Image" title="Image"> <?php } ?>
							</td>
						</tr>
						<tr>
							<th class="align-center">Name</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["name"];} ?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["name"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Performance</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["performance"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["performance"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Storage</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["storage"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["storage"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Camera</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["camera"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["camera"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Battery</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["battery"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["battery"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Display</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["display"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["display"]; }?></td>
						</tr>
						<tr>
							<th class="align-center">Ram</th>
							<td><?php require('db_connect.php'); $P=$_POST["select1"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){  echo $row["ram"]; }?></td>
							<td><?php require('db_connect.php'); $P=$_POST["select2"]; $result = mysqli_query($con,"SELECT * FROM compare where id='$P'"); $count = mysqli_num_rows($result);
								while($row = mysqli_fetch_assoc($result)){ echo $row["ram"]; }?></td>
						</tr>
							
							
						</table>
						







					<br><br><br><br>
											
											
											
										</div>
									</div>
								</div>
							</div>
						</section>
  
  


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
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 3C Online Store
</p>
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