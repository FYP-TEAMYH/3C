<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>3C Online Store[Admin]</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">

        <!-- Bootstrap Core CSS -->
        <link href="admincss/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="admincss/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="admincss/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="admincss/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php 
        require('db_connect.php');
        session_start();
        if((!isset($_SESSION["username"])) && empty($_SESSION["username"])){
            header('location:adminlogin.php');
            }
            $username=$_SESSION["username"];
		$errors = array();
		if (isset($_REQUEST['name'])){
				// removes backslashes
                $name = stripslashes($_REQUEST['name']);
				//escapes special characters in a string
		        $name = mysqli_real_escape_string($con,$name); 
		        $performance = stripslashes($_REQUEST['performance']);
		        $performance = mysqli_real_escape_string($con,$performance);
		        $storage = stripslashes($_REQUEST['storage']);
                $storage = mysqli_real_escape_string($con,$storage);
                $camera = stripslashes($_REQUEST['camera']);
                $camera = mysqli_real_escape_string($con,$camera);
                $display = stripslashes($_REQUEST['display']);
                $display = mysqli_real_escape_string($con,$display);
                $ram = stripslashes($_REQUEST['ram']);
                $ram = mysqli_real_escape_string($con,$ram);
                $brand = stripslashes($_REQUEST['brand']);
                $brand = mysqli_real_escape_string($con,$brand);
                $fileInfo = PATHINFO($_FILES["image"]["name"]);

                if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png" OR $fileInfo['extension'] == "PNG" OR $fileInfo['extension'] == "JPG" OR $fileInfo['extension'] == "jpeg" OR $fileInfo['extension'] == "JPEG") {
                        $target = "img/".basename($_FILES['image']['name']);
                
                        $image="img/".$_FILES['image']['name'];

                        $query = "INSERT into `compare` (name, performance, image, storage, camera, display, ram, brand)
                        VALUES ('$name', '$performance' , '$image','$storage', '$camera', '$display','$ram', '$brand')";
                        $result = mysqli_query($con,$query);
                        
                        ?>
                <script>
                    window.alert('Compare added successfully!');
                    window.location = 'admincompare.php';
                </script>
                <?php
                }
                else{
                    $location=$row['image'];
                    ?>
                        <script>
                            window.alert('Please try again. Upload JPG or PNG or JPEG photo only!');
                            window.location = 'adminaddcompare.php';
                        </script>
                    <?php
                } }?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="adminindex.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="30" height="30"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f1c40f"><path d="M86,17.19328c-7.18734,0 -14.47496,3.78935 -18.28844,11.08594v-0.01344l-63.87516,121.49516c-0.55945,1.06601 -0.52097,2.34691 0.10146,3.37742c0.62243,1.03051 1.73824,1.66069 2.94214,1.66165h20.64c1.28836,-0.00108 2.46814,-0.72191 3.05703,-1.86781c0,0 43.40121,-84.24307 55.42297,-107.58062c12.01876,23.33842 55.42297,107.58062 55.42297,107.58062c0.58889,1.1459 1.76867,1.86673 3.05703,1.86781h20.64c1.20389,-0.00095 2.31971,-0.63114 2.94214,-1.66165c0.62243,-1.03051 0.66091,-2.31141 0.10146,-3.37742l-63.87516,-121.49516v0.01344c-3.81347,-7.2966 -11.1011,-11.08594 -18.28844,-11.08594zM86,24.07328c4.8389,0 9.57521,2.37889 12.19453,7.39063c0,0.00224 0,0.00448 0,0.00672l61.23469,116.44937h-12.85297c-1.45877,-2.83167 -42.67216,-82.83909 -54.4689,-105.7464c-2.46158,-4.77137 -9.751,-4.77524 -12.20797,0c-11.80056,22.90817 -53.0169,102.91482 -54.47562,105.7464h-12.85297l61.23469,-116.44937c0,-0.00224 0,-0.00448 0,-0.00672c2.61933,-5.01174 7.35563,-7.39062 12.19453,-7.39062zM86.08735,75.68c-1.3578,-0.03334 -2.60813,0.73528 -3.19141,1.96187l-34.4,72.24c-0.50679,1.06545 -0.43227,2.31627 0.19745,3.31401c0.62972,0.99773 1.72678,1.60319 2.90662,1.60412h34.4h34.4c1.17984,-0.00093 2.2769,-0.60639 2.90662,-1.60412c0.62972,-0.99773 0.70424,-2.24856 0.19745,-3.31401l-34.4,-72.24c-0.55613,-1.16966 -1.72203,-1.92788 -3.01672,-1.96187zM86,87.11531l28.9511,60.80469h-28.9511h-28.9511z"></path></g></g></svg></a>
                </div>

    

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="adminindex.php"><i class="fa fa-home fa-fw"></i> 3C Online Store [Admin]</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    </li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo $username; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="adminprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            <li class="divider"></li>
                            <li><a href="adminlogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="adminindex.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                           
                            <li>
                                <a href="adminorder.php"><i class="fa fa-cube fa-fw"></i> Order</a>
                            </li>
                            <li>
                                <a href="admintables.php"><i class="fa fa-table fa-fw"></i> Product</a>
                            </li>
                            <li>
                                <a href="adminvoucher.php" ><i class="fa fa-edit fa-fw"></i> Voucher</a>
                            </li>
                            <li>
                                <a href="admincompare.php" class="active"><i class="fa fa-compress fa-fw"></i> Compare</a>
                            </li>
                            <li>
                                <a href="adminprofile.php"><i class="fa fa-edit fa-fw"></i> Profile</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Product Details
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <form method="post" action="#" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" name="image" id="image" value="<?php echo $image; ?>" width="150px" height="100px" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your compare product name" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Performance</label>
                                                    <input type="text" class="form-control" id="performance" name="performance" placeholder="Your compare product performance" required />
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label>Storage</label>
                                                    <input type="text" class="form-control" id="storage" name="storage" placeholder="Your compare product storage" required />
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Camera</label>
                                                    <input type="text" class="form-control" id="camera" name="camera" placeholder="Your compare product camera" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>display</label>
                                                    <input type="text" class="form-control" id="display" name="display" placeholder="Your compare product display" required />
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Ram</label>
                                                    <input type="text" class="form-control" id="ram" name="ram" placeholder="Your compare product ram" required />
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Your compare product brand" required />
                                                    
                                                </div>

                                                
                                                
                                                <input type="submit" value="Submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
                                                
                                            </form>
                                            <a href="admincompare.php"><input type="submit" value="Cancel" name="submit" class="btn btn-primary" style="background-color:red;width:20em; margin:0;"></a>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                            
                                            
                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="adminjs/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="adminjs/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="adminjs/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="adminjs/startmin.js"></script>
        
    </body>
</html>