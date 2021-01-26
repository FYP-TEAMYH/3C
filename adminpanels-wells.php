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

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Panels and Wells</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Default Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Primary Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Info Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    Success Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    Warning Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Danger Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    Green Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    Yellow Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    Red Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Collapsible Accordion Panel Group
                                </div>
                                <!-- .panel-heading -->
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Tabs
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                        </li>
                                        <li><a href="#profile" data-toggle="tab">Profile</a>
                                        </li>
                                        <li><a href="#messages" data-toggle="tab">Messages</a>
                                        </li>
                                        <li><a href="#settings" data-toggle="tab">Settings</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <h4>Profile Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="messages">
                                            <h4>Messages Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <h4>Settings Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Pill Tabs
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills">
                                        <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                        </li>
                                        <li><a href="#profile-pills" data-toggle="tab">Profile</a>
                                        </li>
                                        <li><a href="#messages-pills" data-toggle="tab">Messages</a>
                                        </li>
                                        <li><a href="#settings-pills" data-toggle="tab">Settings</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home-pills">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="profile-pills">
                                            <h4>Profile Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="messages-pills">
                                            <h4>Messages Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="settings-pills">
                                            <h4>Settings Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-default">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Default</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-default-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-default-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-default-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-default-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-default-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-default-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-default-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-default-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-default-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-default-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-primary">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Primary</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-primary-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-primary-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-primary-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-primary-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-primary-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-primary-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-primary-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-primary-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-primary-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-primary-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-info">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Info</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-info-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-info-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-info-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-info-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-info-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-info-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-info-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-info-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-info-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-info-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-success">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Success</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-success-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-success-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-success-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-success-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-success-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-success-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-success-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-success-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-success-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-success-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-warning">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Warning</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-warning-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-warning-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-warning-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-warning-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-warning-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-warning-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-warning-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-warning-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-warning-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-warning-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel tabbed-panel panel-danger">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title pull-left">Tabbed Panel Danger</div>
                                    <div class="pull-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-danger-1" data-toggle="tab">Page 1</a></li>
                                            <li><a href="#tab-danger-2" data-toggle="tab">Page 2</a></li>
                                            <li><a href="#tab-danger-3" data-toggle="tab">Page 3</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-danger-4" data-toggle="tab">Page 4</a></li>
                                                    <li><a href="#tab-danger-5" data-toggle="tab">Page 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-danger-1">Page 1</div>
                                        <div class="tab-pane fade" id="tab-danger-2">Page 2</div>
                                        <div class="tab-pane fade" id="tab-danger-3">Page 3</div>
                                        <div class="tab-pane fade" id="tab-danger-4">Page 4</div>
                                        <div class="tab-pane fade" id="tab-danger-5">Page 5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="well">
                                <h4>Normal Well</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="well well-lg">
                                <h4>Large Well</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="well well-sm">
                                <h4>Small Well</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <span class="value">3</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Primary Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-star"></i>
                                </div>
                                <div class="text">
                                    <span class="value">614</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> Secondary Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-tags"></i>
                                </div>
                                <div class="text">
                                    <span class="value">73</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> Secondary Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-cog"></i>
                                </div>
                                <div class="text">
                                    <span class="value">75%</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-wrench"></i> Secondary Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="jumbotron">
                                <h1>Jumbotron</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
                                <p><a class="btn btn-primary btn-lg" role="button">Learn more</a>
                                </p>
                            </div>
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
