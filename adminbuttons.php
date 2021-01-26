<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="admincss/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="admincss/metisMenu.min.css" rel="stylesheet">

        <!-- Social Buttons CSS -->
        <link href="admincss/bootstrap-social.css" rel="stylesheet">

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
  include 'db_connect.php';
  session_start();
  $name=$_SESSION['username'];
  $query=mysqli_query($con,"SELECT * FROM admin where username='$name'")or die(mysqli_error());
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
                    <li><a href="index.php"><i class="fa fa-home fa-fw"></i> 3C Online Store [Admin]</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo $name; ?><b class="caret"></b>
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
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="adminflot.php">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="adminmorris.php">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="admintables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="adminprofile.php"><i class="fa fa-edit fa-fw"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="adminpanels-wells.php">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="adminbuttons.php">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="adminnotifications.php">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="admintypography.php">Typography</a>
                                    </li>
                                    <li>
                                        <a href="adminicons.php"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="admingrid.php">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="adminblank.php">Blank Page</a>
                                    </li>
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Buttons</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Default Buttons
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <h4>Normal Buttons</h4>
                                    <p>
                                        <button type="button" class="btn btn-default">Default</button>
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-link">Link</button>
                                    </p>
                                    <br>
                                    <h4>Disabled Buttons</h4>
                                    <p>
                                        <button type="button" class="btn btn-default disabled">Default</button>
                                        <button type="button" class="btn btn-primary disabled">Primary</button>
                                        <button type="button" class="btn btn-success disabled">Success</button>
                                        <button type="button" class="btn btn-info disabled">Info</button>
                                        <button type="button" class="btn btn-warning disabled">Warning</button>
                                        <button type="button" class="btn btn-danger disabled">Danger</button>
                                        <button type="button" class="btn btn-link disabled">Link</button>
                                    </p>
                                    <br>
                                    <h4>Button Sizes</h4>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                        <button type="button" class="btn btn-primary">Default button</button>
                                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                        <button type="button" class="btn btn-primary btn-xs">Mini button</button>
                                        <br>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                    </p>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Circle Icon Buttons with Font Awesome Icons
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <h4>Normal Circle Buttons</h4>
                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                    <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i></button>
                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i></button>
                                    <br><br>
                                    <h4>Large Circle Buttons</h4>
                                    <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i></button>
                                    <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i></button>
                                    <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i></button>
                                    <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i></button>
                                    <br><br>
                                    <h4>Extra Large Circle Buttons</h4>
                                    <button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i></button>
                                    <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i></button>
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                    <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i></button>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Outline Buttons with Smooth Transition
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <h4>Outline Buttons</h4>
                                    <p>
                                        <button type="button" class="btn btn-outline btn-default">Default</button>
                                        <button type="button" class="btn btn-outline btn-primary">Primary</button>
                                        <button type="button" class="btn btn-outline btn-success">Success</button>
                                        <button type="button" class="btn btn-outline btn-info">Info</button>
                                        <button type="button" class="btn btn-outline btn-warning">Warning</button>
                                        <button type="button" class="btn btn-outline btn-danger">Danger</button>
                                        <button type="button" class="btn btn-outline btn-link">Link</button>
                                    </p>
                                    <br>
                                    <h4>Outline Button Sizes</h4>
                                    <p>
                                        <button type="button" class="btn btn-outline btn-primary btn-lg">Large button</button>
                                        <button type="button" class="btn btn-outline btn-primary">Default button</button>
                                        <button type="button" class="btn btn-outline btn-primary btn-sm">Small button</button>
                                        <button type="button" class="btn btn-outline btn-primary btn-xs">Mini button</button>
                                        <br>
                                        <br>
                                        <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block level button</button>
                                    </p>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Social Buttons with Font Awesome Icons
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <a class="btn btn-block btn-social btn-bitbucket">
                                        <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                                    </a>
                                    <a class="btn btn-block btn-social btn-dropbox">
                                        <i class="fa fa-dropbox"></i> Sign in with Dropbox
                                    </a>
                                    <a class="btn btn-block btn-social btn-facebook">
                                        <i class="fa fa-facebook"></i> Sign in with Facebook
                                    </a>
                                    <a class="btn btn-block btn-social btn-flickr">
                                        <i class="fa fa-flickr"></i> Sign in with Flickr
                                    </a>
                                    <a class="btn btn-block btn-social btn-github">
                                        <i class="fa fa-github"></i> Sign in with GitHub
                                    </a>
                                    <a class="btn btn-block btn-social btn-google-plus">
                                        <i class="fa fa-google-plus"></i> Sign in with Google
                                    </a>
                                    <a class="btn btn-block btn-social btn-instagram">
                                        <i class="fa fa-instagram"></i> Sign in with Instagram
                                    </a>
                                    <a class="btn btn-block btn-social btn-linkedin">
                                        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                                    </a>
                                    <a class="btn btn-block btn-social btn-pinterest">
                                        <i class="fa fa-pinterest"></i> Sign in with Pinterest
                                    </a>
                                    <a class="btn btn-block btn-social btn-tumblr">
                                        <i class="fa fa-tumblr"></i> Sign in with Tumblr
                                    </a>
                                    <a class="btn btn-block btn-social btn-twitter">
                                        <i class="fa fa-twitter"></i> Sign in with Twitter
                                    </a>
                                    <a class="btn btn-block btn-social btn-vk">
                                        <i class="fa fa-vk"></i> Sign in with VK
                                    </a>

                                    <hr>

                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                                        <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                                        <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                        <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
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
