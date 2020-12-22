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
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
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
                <a class="nav-link active" href="adminproducts.php">
                  <i class="fas fa-shopping-cart"></i> Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminmember.php">
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
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" method="post" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      value="Airpods Pro with Charging Case"
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea                    
                      class="form-control validate tm-small"
                      rows="5"
                      required
                    >With optimal talk time and breakthrough technology, and complete with Charging Case, 
					AirPods deliver an unparalleled wireless headphone experience. They’re ready to use with all your 
					devices.2 Put them in your ears and they connect immediately, immersing you in rich, high-fidelity sound. Just like magic.

						Key feature bullets
						• Universal fit that’s comfortable all day
						• Automatically on, automatically connected
						• Easy setup for all your Apple devices2
						• Control your music and calls from your AirPods
						• Seamless switching between devices2
						• The charging case delivers more than 24 hours of battery life1

						Legal
						1Battery life varies by use and configuration. See apple.com/batteries for details.
						2Requires an iCloud account and macOS 10.14.4, iOS 12.2, iPadOS, watchOS 5.2 or tvOS 13.2, or later.</textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option>Select category</option>
                      <option value="1">Mouse</option>
                      <option value="2">Keyboard</option>
                      <option value="3">Laptop</option>
					  <option value="4">Smart Phone</option>
					  <option value="5">Earphones</option>
                    </select>
                  </div>
                  <div class="row">
                      
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Units In Stock
                          </label>
                          <input
                            id="stock"
                            name="stock"
                            type="text"
                            value="600"
                            class="form-control validate"
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="img/airpods.jpg" alt="GameSir T4 PC Game Controller" class="img-fluid d-block mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="CHANGE IMAGE NOW"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
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
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>