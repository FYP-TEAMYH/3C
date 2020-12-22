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
              <li class="nav-item active"><a class="nav-link" href="category.php">Category</a></li>
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

	<!-- ================ start banner area ================= -->	
	<section class="offer" id="poster" data-anchor-target="#parallax-1">
		<div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>Up To 50% Off</h3>
              <h4>Winter Sale</h4>
            </div>
          </div>
        </div>
      </div>
	</section>
	<!-- ================ end banner area ================= -->


	<!-- ================ category section start ================= -->		  
  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="#">
                  <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="mouse" name="brand"><label for="mouse">Mouse<span> (100)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="Keyboard" name="brand"><label for="Keyboard">Keyboard<span> (100)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="Monitor" name="brand"><label for="Monitor">Laptop<span> (100)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="Gaming Chair" name="brand"><label for="Gaming Chair">Smart Phone<span> (100)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="Earphones" name="brand"><label for="Earphones">Earphones<span> (100)</span></label></li>
                  </ul>
                </form>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select>
                <option value="1">Default sorting</option>
                <option value="1">Sort By Price</option>
                <option value="1">Best Seller</option>
              </select>
            </div>
          
            <div>
              <div class="input-group filter-bar-search">
                <input type="text" placeholder="Search">
                <div class="input-group-append">
                  <button type="button"><i class="ti-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/mouse3.jpg" height="250" width="250" alt="Razer DeathAdder Essential">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Mouse</p>
                    <h4 class="card-product__title"><a href="single-product.php">Razer DeathAdder Essential</a></h4>
                    <p class="card-product__price">RM280.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/iphone12.png" height="250" width="250" alt="Racing Video Chair">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Smart Phone</p>
                    <h4 class="card-product__title"><a href="single-product.php">Iphone 12 Pro Max</a></h4>
                    <p class="card-product__price">RM3899.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/keyboard.jpg" height="250" width="250" alt="E-BLUE Gaming Keyboard">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Keyboard</p>
                    <h4 class="card-product__title"><a href="single-product.php">E-BLUE Gaming Keyboard</a></h4>
                    <p class="card-product__price">RM 200.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/earphone.jpg" height="250" width="250" alt="Razer Hammerhead Bt Wireless Gaming Earphones">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Earphones</p>
                    <h4 class="card-product__title"><a href="single-product.php">Razer Hammerhead Bt Wireless Gaming Earphones</a></h4>
                    <p class="card-product__price">RM150.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/macbook.jpg" height="250" width="250" alt="Macbook Air" >
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Laptop</p>
                    <h4 class="card-product__title"><a href="single-product.php">Macbook Air</a></h4>
                    <p class="card-product__price">RM2299.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/airpods.jpg" height="250" width="250" alt="Airpods Pro">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Earphones</p>
                    <h4 class="card-product__title"><a href="single-product.php">Airpods Pro</a></h4>
                    <p class="card-product__price">RM699.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/mouse4.jpg" height="250" width="250" alt="SteelSeries Rival 710">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Mouse</p>
                    <h4 class="card-product__title"><a href="single-product.php">SteelSeries Rival 710</a></h4>
                    <p class="card-product__price">RM350.00</p>
                  </div> 
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/keyboard2.jpg" height="250" width="250" alt="SteelSeries Apex Pro">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Keyboard</p>
                    <h4 class="card-product__title"><a href="single-product.php">SteelSeries Apex Pro</a></h4>
                    <p class="card-product__price">RM800.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <a href="single-product.php"><img src="img/mouse1.png" height="250" width="250" alt="Magic Mouse">
                    <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-search"></i></button></li>
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p>Mouse</p>
                    <h4 class="card-product__title"><a href="single-product.php">Magic Mouse</a></h4>
                    <p class="card-product__price">RM319.00</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->		  

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
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>