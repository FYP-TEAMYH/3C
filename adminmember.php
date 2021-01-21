<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>3C Online Store [Admin]</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
  <?php
  include 'db_connect.php';
  session_start();
  $name=$_SESSION['username'];
  $query=mysqli_query($con,"SELECT * FROM admin where username='$name'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
  <body id="reportsPage">
    <div class="" id="home">
     <!--================ Start Header Menu Area =================-->
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="admindashboard.php">
            <h1 class="tm-site-title mb-0">Administrator Page</h1>
          </a>
          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
              
			  <li class="nav-item">
                <a class="nav-link" href="admindashboard.php">
                  <i class="fas fa-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminproducts.php">
                  <i class="fas fa-shopping-cart"></i> Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="adminmember.php">
                  <i class="far fa-user"></i> Accounts
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="adminorder.php">
                  <i class="far fa-file-alt"></i> Order
                </a>
              </li>
              
            </ul>
			<ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="adminindex.php">
                                 <b>Logout</b>
                            </a>
                        </li>
                    </ul>
          </div>
        </div>
      </nav>
    </div>
		<!--================ End Header Menu Area =================-->
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">Our Member</h2>
              <h5>
            <?php echo $name; ?></h5>
            </div>
          </div>
        </div>
        <!-- row -->
        
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">Change Avatar</h2>
              <div class="tm-avatar-container">
                <img
                  src="img/user2.jpg"
                  alt="Avatar"
                  class="tm-avatar img-fluid mb-4"
                />
                <a href="#" class="tm-avatar-delete-link">
                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                </a>
              </div>
              <button class="btn btn-primary btn-block text-uppercase">
                Upload New Photo
              </button>
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
              <form method="post" action="#" >
                
                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required />
        
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required />
		
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Re-enter Password</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required />
		
                </div>
                <script>
				                    var password=document.getElementById("password"),confirmPassword=document.getElementById("confirmPassword");
				                    function validatePassword()
				                    {
				                        if(password.value!=confirmPassword.value){
				                            confirmPassword.setCustomValidity("Passwords Don't Match!");
				                        }
				                        else{
				                            confirmPassword.setCustomValidity("");
				                        }
				                    }
				                    password.onchange=validatePassword;
				                    confirmPassword.onkeyup=validatePassword;
			          </script>
                
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
                   
                  </button>
                </div>
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
	    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
 
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>

<?php
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      $query = "UPDATE admin SET
                      email = '$email', password = '".md5($password)."'
                      WHERE username = '$name'";
                    $result = mysqli_query($con, $query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "admindashboard.php";
        </script>
        <?php
             }              
?>
