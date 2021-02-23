<?php

session_start();
include('db_connect.php');
if((!isset($_SESSION["username"])) && empty($_SESSION["username"])){
    header('location:login.php');
}
if((!isset($_SESSION["shopping_cart"])) && empty($_SESSION["shopping_cart"])){
  header('location:cart.php');
}

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th>Product Name</th>  
            <th>Quantity</th>  
            <th>Price</th>  
            <th>Total</th>  
        </tr>
';
$discount=0.00;
$message="";
if(isset($_POST['discount']))
{
            $vouchercode=$_POST['discountCode'];
            $query="SELECT * from voucher where code='$vouchercode' AND status='1'";
            $result=mysqli_query($con,$query);
            
            if($row=mysqli_fetch_assoc($result)){
                
                $discount=$row["discount"];
                $message="Voucher code is available";
            }
            else
            {
                $message="Voucher code is not available";
            }
            
            
}

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr>
   <td>'.$values["product_name"].'</td>
   <td>'.$values["product_quantity"].'</td>
   <td align="right">RM '.$values["product_price"].'</td>
   
   <td align="right">RM '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
  </tr>
  
  ';
  $total_price = ($total_price + ($values["product_quantity"] * $values["product_price"])) - $discount;

  $item_details .= $values["product_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
 $order_details .= '
 <tr>
  <td colspan="3" align="right">Discount</td>
  <td colspan="4" align="right">RM '.$discount.'</td>
  </tr>
 <tr>  
        <td colspan="3" align="right">Total</td>   
        <td align="right">RM '.number_format($total_price, 2).'</td>
    </tr>
 ';
}
$order_details .= '</table>';

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
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>

  <script src="vendors/skrollr.min.js"></script>
  
  <script src="vendors/mail-script.js"></script>
  <script src="js/jquery.creditCardValidator.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://js.stripe.com/v2/"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  
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


  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        
      
        
        <div class="billing_details">

            <div class="row">
                <div class="col-lg-6">
                <div class="col-md-12 form-group">
                <div class="cupon_area">
      <form action="" method="post">
            <div class="check_title">
                <h2><b>Have a voucher ?</b></h2>
            </div>
            
            <input type="text" id="discountCode" name="discountCode" size="15" style="margin-left:0px"placeholder="Enter voucher code">
            <button class="button button-login w-5" name="discount" id="btnDiscountAction">Apply Voucher</button>
            </div>
      </form>
      <p style="color:red"><?php echo $message ?></p>
        </div>
                    <h3>Billing Details</h3>
                    <form class="row contact_form" method="post" id="order_process_form" action="payment.php"  >
                        <div class="col-md-12 form-group p_star">
                        <input type="text" name="customer_name" id="customer_name" class="form-control" value="" placeholder="Name"  />
                        <span id="error_customer_name" class="text-danger"></span>
                        </div>
                        
                        <div class="col-md-12 form-group">
                        <input type="text" name="email_address" id="email_address" class="form-control" value="" placeholder="Email Address"  />
                        <span id="error_email_address" class="text-danger"></span>
                        </div>
                        
                        
                        
                        <div class="col-md-12 form-group p_star">
                        <textarea name="customer_address" id="customer_address" class="form-control" placeholder="Address"></textarea>
                         <span id="error_customer_address" class="text-danger"></span>
                        </div>
                       
                        <div class="col-md-12 form-group p_star">
                        <input type="text" name="customer_city" id="customer_city" class="form-control" value="" placeholder="City" />
                        <span id="error_customer_city" class="text-danger"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                        <input type="text" name="customer_pin" id="customer_pin" class="form-control" value="" placeholder="Postcode/ZIP" />
                        <span id="error_customer_pin" class="text-danger"></span>
                        </div>
                        <div class="col-md-12 form-group">
                        <input type="text" name="customer_state" id="customer_state" class="form-control" value=""  placeholder="State"/>
                        <span id="error_customer_state" class="text-danger"></span>
                        </div>
                        <div class="col-md-12 form-group">
                        
                        <input type="text" name="customer_country" id="customer_country" class="form-control" placeholder="Country" />
                        <span id="error_customer_country" class="text-danger"></span>
                        </div>
                       
                        <div class="col-md-12 form-group ">
                            <div class="creat_account">
                                <h3>Payment Details</h3>
                                
                            </div>
                            
                            <label>Card Number</label>
                            
                            <div class="col-md-12 form-group">
                            <input type="text" name="card_holder_number" id="card_holder_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="" />
                             <span id="error_card_number" class="text-danger" placeholder="State"></span>
                        </div>
                        

                        <div class="col-md-5 form-group">
                        <label>Expiry Month</label>
                        <input type="text" name="card_expiry_month" id="card_expiry_month" class="form-control" placeholder="MM" maxlength="2" onkeypress="return only_number(event);" />
                        <span id="error_card_expiry_month" class="text-danger"></span>
                        </div>
                        <div class="col-md-5 form-group">
                        <label>Expiry Year</label>
                        <input type="text" name="card_expiry_year" id="card_expiry_year" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return only_number(event);" />
                        <span id="error_card_expiry_year" class="text-danger"></span>
                        </div>
                        <div class="col-md-5 form-group">
                        <label>CVC</label>
                        <input type="text" name="card_cvc" id="card_cvc" class="form-control" placeholder="123" maxlength="4" onkeypress="return only_number(event);" />
                        <span id="error_card_cvc" class="text-danger"></span>
                        </div>
                        <div class="col-md-5 form-group">
                        <div align="center">
                        <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
                        <input type="hidden" name="discount" value="<?php echo $discount; ?>" />
                        <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
                        <input type="button" name="" id="" class="button button-login w-15" onclick="validate_form()" value="Pay Now" />
                        </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-lg-6">
                    <div class="order_box">
                        <h2>Your Order</h2>
                       <?php echo $order_details; ?>
                    </div>
                </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->



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


function validate_form(event)
{
  

 var valid_card = 0;
 var valid = false;
 var card_cvc = $('#card_cvc').val();
 var card_expiry_month = $('#card_expiry_month').val();
 var card_expiry_year = $('#card_expiry_year').val();
 var card_holder_number = $('#card_holder_number').val();
 var email_address = $('#email_address').val();
 var customer_name = $('#customer_name').val();
 var customer_address = $('#customer_address').val();
 var customer_city = $('#customer_city').val();
 var customer_pin = $('#customer_pin').val();
 var customer_state = $('#customer_state').val();
 var customer_country = $('#customer_country').val();
 var name_expression = /^[a-z ,.'-]+$/i;
 var email_expression = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
 var month_expression = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
 var year_expression = /^2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031|2032|2033|2034|2035$/;
 var cvv_expression = /^[0-9]{3,3}$/;

 $('#card_holder_number').validateCreditCard(function(result){
  if(result.valid)
  {
   $('#card_holder_number').removeClass('require');
   $('#error_card_number').text('');
   valid_card = 1;
  }
  else
  {
   $('#card_holder_number').addClass('require');
   $('#error_card_number').text('Invalid Card Number');
   valid_card = 0;
  }

  

 });

 
if (valid_card==1)
 {
  if(!month_expression.test(card_expiry_month))
  {
   $('#card_expiry_month').addClass('require');
   $('#error_card_expiry_month').text('Invalid Data');
   valid8 = false;
  }
  else
  { 
   $('#card_expiry_month').removeClass('require');
   $('#error_card_expiry_month').text('');
   valid8 = true;
  }

  if(!year_expression.test(card_expiry_year))
  {
   $('#card_expiry_year').addClass('require');
   $('#error_card_expiry_year').text('Invalid Data');
   valid9 = false;
  }
  else
  {
   $('#card_expiry_year').removeClass('require');
   $('#error_card_expiry_year').text('');
   valid9 = true;
  }

  if(!cvv_expression.test(card_cvc))
  {
   $('#card_cvc').addClass('require');
   $('#error_card_cvc').text('Invalid Data');
   valid10 = false;
  }
  else
  {
   $('#card_cvc').removeClass('require');
   $('#error_card_cvc').text('');
   valid10 = true;
  }
}
  
  if(!name_expression.test(customer_name))
  {
   $('#customer_name').addClass('require');
   $('#error_customer_name').text('Invalid Name');
   valid1=false;
  }
  else
  {
   $('#customer_name').removeClass('require');
   $('#error_customer_name').text('');
   valid1=true;
  }
  if(!email_expression.test(email_address))
  {
   $('#email_address').addClass('require');
   $('#error_email_address').text('Invalid Email Address');
   valid2=false;
  }
  else
  {
   $('#email_address').removeClass('require');
   $('#error_email_address').text('');
   valid2=true;
  }

  if(customer_address == '')
  {
   $('#customer_address').addClass('require');
   $('#error_customer_address').text('Enter Address Detail');
   valid3=false;
  }
  else
  {
   $('#customer_address').removeClass('require');
   $('#error_customer_address').text('');
   valid3=true;
   
  }

  if(customer_city == '')
  {
   $('#customer_city').addClass('require');
   $('#error_customer_city').text('Enter City');
   valid4= false;
   
  }
  else
  {
   $('#customer_city').removeClass('require');
   $('#error_customer_city').text('');
   valid4 =true;
   
  }

  if(customer_pin == '')
  {
   $('#customer_pin').addClass('require');
   $('#error_customer_pin').text('Enter Zip code');
   valid5 =false;
   
  }
  else
  {
   $('#customer_pin').removeClass('require');
   $('#error_customer_pin').text('');
   valid5 =true;
   
  }

  if(customer_state == '')
  {
   $('#customer_state').addClass('require');
   $('#error_customer_state').text('Enter State');
   valid6 = false;
   
  }
  else
  {
   $('#customer_state').removeClass('require');
   $('#error_customer_state').text('');
   valid6=true;
   
  }

  if(customer_country == '')
  {
   $('#customer_country').addClass('require');
   $('#error_customer_country').text('Enter Country');
   valid7= false;
  }
  else
  {
   $('#customer_country').removeClass('require');
   $('#error_customer_country').text('');
   valid7=true;
   
  }

 
 
  if(valid1==true &&valid2==true &&valid3==true &&valid4==true &&valid5==true &&valid6==true &&valid7==true &&valid8==true &&valid9==true &&valid10==true)
  {
    
      $('#order_process_form').submit();
   }
  
}





function only_number(event)
{
 var charCode = (event.which) ? event.which : event.keyCode;
 if (charCode != 32 && charCode > 31 && (charCode < 48 || charCode > 57))
 {
  return false;
 }
 return true;
}

</script>
</html>