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
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
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
	
	


  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/airpods.jpg" alt="GameSir T4 PC Game Controller">
						</div>
						<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>Airpods Pro with Charging Case</h3>
						<h2>RM699.00</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Household</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>Universal fit that’s comfortable all day<br>
							Automatically on, automatically connected<br>
							Easy setup for all your Apple devices2<br>
							Control your music and calls from your AirPods<br>
							Seamless switching between devices2<br>
							The charging case delivers more than 24 hours of battery life1</p>
						<div class="product_count">
              <label for="qty">Quantity:</label>

							<input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<a class="button primary-btn" href="#">Add to Cart</a>               
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>With optimal talk time and breakthrough technology, and complete with Charging Case, 
					AirPods deliver an unparalleled wireless headphone experience. They’re ready to use with all your 
					devices.2 Put them in your ears and they connect immediately, immersing you in rich, high-fidelity sound. Just like magic.<br>

						Key feature bullets<br>
						• Universal fit that’s comfortable all day<br>
						• Automatically on, automatically connected<br>
						• Easy setup for all your Apple devices2<br>
						• Control your music and calls from your AirPods<br>
						• Seamless switching between devices2<br>
						• The charging case delivers more than 24 hours of battery life1<br>

						Legal<br>
						1Battery life varies by use and configuration. See apple.com/batteries for details.<br>
						2Requires an iCloud account and macOS 10.14.4, iOS 12.2, iPadOS, watchOS 5.2 or tvOS 13.2, or later.</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Brand Name</h5>
									</td>
									<td>
										<h5>Apple</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Color Family</h5>
									</td>
									<td>
										<h5>White</h5>
									</td>
								</tr>
									
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- ================ top product area start ================= -->	
	<section class="related-product-area">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Best <span class="section-intro__style">Seller</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                  <a href="category.php" class="title">Airpods Pro</a>
                  <div class="price">RM699.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                <a href="category.php" class="title">Airpods Pro</a>
                <div class="price">RM699.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                <a href="category.php" class="title">Airpods Pro</a>
                <div class="price">RM699.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                  <a href="category.php" class="title">Magic Mouse</a>
                  <div class="price">RM319.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                <a href="category.php" class="title">Magic Mouse</a>
                <div class="price">RM319.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                <a href="category.php" class="title">Magic Mouse</a>
                <div class="price">RM319.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/iphone12.png" alt="Iphone 12 Pro Max"></a>
              <div class="desc">
                  <a href="category.php" class="title">Iphone 12 Pro Max</a>
                  <div class="price">RM3899.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/iphone12.png" alt="Iphone 12 Pro Max"></a>
              <div class="desc">
                <a href="category.php" class="title">Iphone 12 Pro Max</a>
                <div class="price">RM3899.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/iphone12.png" alt="GameSir T4 PC Game Controller"></a>
              <div class="desc">
                <a href="category.php" class="title">Iphone 12 Pro Max</a>
                <div class="price">RM3899.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                  <a href="category.php" class="title">Macbook Air</a>
                  <div class="price">RM2299.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                <a href="category.php" class="title">Macbook Air</a>
                <div class="price">RM2299.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.php"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                <a href="category.php" class="title">Macbook Air</a>
                <div class="price">RM2299.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
	<!-- ================ top product area end ================= -->	

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