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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	
	<?php require('db_connect.php');
					
					$id=$_GET['id'];
					 
					$sql = "SELECT * FROM product where id='$id'";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);
					while($row = mysqli_fetch_assoc($result))
					{
							$id = $row["id"];
							$price = $row["price"];
							$name = $row["name"];
							$photo = $row["image"];
							$category = $row["category"];
							$desc = $row["description"];
							$desc2 = $row["description2"];
							$brandname = $row["brand"];
							$color= $row["color"];
							$check = $row["quality"];
					}
					
				?>

  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo $photo?>" alt="GameSir T4 PC Game Controller">
						</div>
						
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
					
						<h3><?php echo $name; ?></h3>
						<h2>RM<?php echo  $price; ?></h2>
						<ul class="list">
							<li><span>category</span> &nbsp :  &nbsp<a class="active" href="#"> <?php echo  $category; ?></a></li>
							
						</ul>
						<p><?php echo $desc; ?></p>
            <div>
           <?php $sql = "SELECT * FROM product where id='$id'";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);
					while($row = mysqli_fetch_assoc($result))
					{ 
          echo '
          <input type="text" name="quantity" id="quantity'.$row["id"].'" class="form-control" value="1" />
          <input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
          <input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
          <input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
         '; } ?>
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
					<p><?php echo $desc2; ?></p>
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
										<h5><?php echo $brandname ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Color Family</h5>
									</td>
									<td>
										<h5><?php echo $color ?></h5>
									</td>
								</tr>
									
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5><?php echo $check ?></h5>
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
$(document).ready(function(){

 

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



 $(document).on('click', '.add_to_cart', function(){
  var product_id = $(this).attr('id');
  var product_name = $('#name'+product_id+'').val();
  var product_price = $('#price'+product_id+'').val();
  var product_quantity = $('#quantity'+product_id).val();
  var product_image = $('#image'+product_id).val();
  var action = 'add';
  if(product_quantity > 0)
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
    success:function(data)
    {
     load_cart_data();
     alert("Item has been Added into Cart");
    }
   })
  }
  else
  {
   alert("Please Enter Number of Quantity");
  }
 });

});
 </script>

</html>