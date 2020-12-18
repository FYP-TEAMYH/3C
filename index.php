<?php
//include auth.php file on all secure pages
include("auth.php");
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
          <a class="navbar-brand logo_h" href="index.html"><img src="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" alt="3C" height="50px" width="50px">&nbsp <b>3C Online Store</b></a>
          <p>Welcome <?php echo $_SESSION['username']; ?>!</p>  
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="category.html">Category</a></li>
              <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
			  <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Login/Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php">Log Out</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a href="cart.html"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button></a> </li>
              <li class="nav-item"><a class="button button-header" href="checkout.html">Buy Now</a></li>
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
              <img src="img/iphone1.jpeg"  height="700px" width="1100px" alt="Main Page "  style="margin: 0px 0px 150px 10px">
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
              <h3>Up To 50% Off</h3>
              <h4>Winter Sale</h4>
              <a class="button button--active mt-3 mt-xl-4" href="category.html">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

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
              <a href="category.html"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                  <a href="category.html" class="title">Airpods Pro</a>
                  <div class="price">RM699.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                <a href="category.html" class="title">Airpods Pro</a>
                <div class="price">RM699.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/airpods.jpg" alt="Airpods Pro"></a>
              <div class="desc">
                <a href="category.html" class="title">Airpods Pro</a>
                <div class="price">RM699.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                  <a href="category.html" class="title">Magic Mouse</a>
                  <div class="price">RM319.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                <a href="category.html" class="title">Magic Mouse</a>
                <div class="price">RM319.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/mouse1.png" alt="Magic Mouse"></a>
              <div class="desc">
                <a href="category.html" class="title">Magic Mouse</a>
                <div class="price">RM319.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/iphone12.png" alt="Iphone 12 Pro Max"></a>
              <div class="desc">
                  <a href="category.html" class="title">Iphone 12 Pro Max</a>
                  <div class="price">RM3899.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/iphone12.png" alt="Iphone 12 Pro Max"></a>
              <div class="desc">
                <a href="category.html" class="title">Iphone 12 Pro Max</a>
                <div class="price">RM3899.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/iphone12.png" alt="GameSir T4 PC Game Controller"></a>
              <div class="desc">
                <a href="category.html" class="title">Iphone 12 Pro Max</a>
                <div class="price">RM3899.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                  <a href="category.html" class="title">Macbook Air</a>
                  <div class="price">RM2299.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                <a href="category.html" class="title">Macbook Air</a>
                <div class="price">RM2299.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="category.html"><img src="img/macbook.jpg" alt="Macbook Air"></a>
              <div class="desc">
                <a href="category.html" class="title">Macbook Air</a>
                <div class="price">RM2299.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
	<!-- ================ top product area end ================= -->

	<!-- ================ Subscribe section start ================= -->		  
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Get Update From Anywhere</h3>
        <p>Bearing Void gathering light light his eavening unto dont afraid</p>
        <div id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </section>
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
								<li><a href="index.html">Home</a></li>
								<li><a href="category.html">Shop</a></li>		
								<li><a href="compare.html">compare</a></li>				
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