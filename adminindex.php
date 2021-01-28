<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>3C Dashboard</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">

        <!-- Bootstrap Core CSS -->
        <link href="admincss/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="admincss/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="admincss/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="admincss/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="admincss/morris.css" rel="stylesheet">

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
  include 'db_connect.php';
  session_start();
  $name=$_SESSION['username'];
  $query=mysqli_query($con,"SELECT * FROM admin where username='$name'")or die(mysqli_error());
  $result = mysqli_query($con,"SELECT * FROM order_item ORDER BY order_id DESC LIMIT 1");
    $data = mysqli_fetch_array($result);
  ?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                            <i class="fa fa-user fa-fw"></i><?php "" ?><b class="caret"></b>
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
                                <a href="adminindex.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</span></a>
                                
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="adminorder.php"><i class="fa fa-cube fa-fw"></i> Order</a>
                            </li>
                            <li>
                                <a href="adminvoucher.php" ><i class="fa fa-barcode fa-fw"></i> Voucher</a>
                            </li>
                            <li>
                                <a href="admintables.php"><i class="fa fa-table fa-fw"></i> Product</a>
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
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php
                                                $query = "SELECT COUNT(*) totalOrders FROM order_item;";
                                                    $result = mysqli_query( $con, $query );
                                                    $totalAdmins = mysqli_fetch_assoc( $result );
                                                    echo $totalAdmins['totalOrders'];
                                            ?>
                                            </div>
                                            <div>Pending Orders</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://localhost/3C/adminorder.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-money fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php $query = "SELECT SUM(order_total_amount) totalRevenue FROM order_table ;";
                                                    $result = mysqli_query( $con, $query );
                                                    $totalAdmins = mysqli_fetch_assoc( $result );
                                                    echo $totalAdmins['totalRevenue'];
                                            ?>        
                                            </div>
                                            <div>Revenue</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">0</div>
                                            <div>Voucher been used</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php
                                                $query = "SELECT COUNT(*) totalAdmins FROM admin;";
                                                    $result = mysqli_query( $con, $query );
                                                    $totalAdmins = mysqli_fetch_assoc( $result );
                                                    echo $totalAdmins['totalAdmins'];
                                            ?>
                                            </div>
                                            <div>Admin in charge</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://localhost/3C/adminprofile.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    <?php //-------------------------------------------Pie Chart ------------------------------?>
                        <div class="col-lg-12">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Pie Chart
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Others
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Other</a>
                                                <li class="divider"></li>
                                                <li><a href="https://localhost/3C/adminorder.php">Order</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                
<div class="panel-body">                              
<html>
<head>
 <meta charset="utf-8">
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

['Order Item','Order quantity'],
 <?php 
			$query = "SELECT * from order_item";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['order_item_name']."',".$row['order_item_quantity']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Order Details ',
          is3D: true,
          
 };
 var chart = new google.visualization.PieChart(document.getElementById("piechart_3d"));
 chart.draw(data,options);
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
 </div>

</body>
</html>

<?php //-------------------------------------------Bar Chart ------------------------------?>
                                

                                
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Actions
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Other</a>
                                                <li class="divider"></li>
                                                <li><a href="https://localhost/3C/adminorder.php">Order</a>
                                                </li>
                                            </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>  
                                <div class="panel-body">  
                                </div>
                                <html>
<head>
 <meta charset="utf-8">
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

['Order Item','Order quantity'],
 <?php 
			$query = "SELECT * from order_item";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['order_item_name']."',".$row['order_item_quantity']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Order Details ',
          is3D: true,
 };
 var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
 chart.draw(data,options);
 }
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="barchart_values" style="width: 900px; height: 300px;"></div>
 </div>

</body>
</html>
                                
                            </div>
                             <!-- Map-panel-body -->     
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Store Location
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">

                                                    
                                                Actions
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                        
                                    </div>
                                </div>  
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.743684917664!2d102.27392491525369!3d2.2494988586498943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e56b9710cf4b%3A0x66b6b12b75469278!2sMultimedia%20University!5e0!3m2!1szh-CN!2smy!4v1611774585729!5m2!1szh-CN!2smy" 
                                            width="1020" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>      
                            <!-- /.Map-panel-body --> 

                            <!-- panel-body -->            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-chart"></div>
                                    <a href="#" class="btn btn-default btn-block">View Details</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                                
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="adminjs/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="adminjs/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="adminjs/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="adminjs/raphael.min.js"></script>
        <script src="adminjs/morris.min.js"></script>
        <script src="adminjs/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="adminjs/startmin.js"></script>

    </body>
</html>


