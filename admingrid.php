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
                                <a href=""><i class="fa fa-cube fa-fw"></i> Order</a>
                            </li>
                            <li>
                                <a href="admintables.php"><i class="fa fa-table fa-fw"></i> Product</a>
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
                            <h1 class="page-header">Grid</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Grid options</h3>
                                    <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        Extra small devices
                                                        <small>Phones (&lt;768px)</small>
                                                    </th>
                                                    <th>
                                                        Small devices
                                                        <small>Tablets (&ge;768px)</small>
                                                    </th>
                                                    <th>
                                                        Medium devices
                                                        <small>Desktops (&ge;992px)</small>
                                                    </th>
                                                    <th>
                                                        Large devices
                                                        <small>Desktops (&ge;1200px)</small>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Grid behavior</th>
                                                    <td>Horizontal at all times</td>
                                                    <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                                                </tr>
                                                <tr>
                                                    <th>Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>750px</td>
                                                    <td>970px</td>
                                                    <td>1170px</td>
                                                </tr>
                                                <tr>
                                                    <th>Class prefix</th>
                                                    <td>
                                                        <code>.col-xs-</code>
                                                    </td>
                                                    <td>
                                                        <code>.col-sm-</code>
                                                    </td>
                                                    <td>
                                                        <code>.col-md-</code>
                                                    </td>
                                                    <td>
                                                        <code>.col-lg-</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th># of columns</th>
                                                    <td colspan="4">12</td>
                                                </tr>
                                                <tr>
                                                    <th>Max column width</th>
                                                    <td class="text-muted">Auto</td>
                                                    <td>60px</td>
                                                    <td>78px</td>
                                                    <td>95px</td>
                                                </tr>
                                                <tr>
                                                    <th>Gutter width</th>
                                                    <td colspan="4">30px (15px on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th>Nestable</th>
                                                    <td colspan="4">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th>Offsets</th>
                                                    <td colspan="4">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th>Column ordering</th>
                                                    <td colspan="4">Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any
                                        <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a
                                        <code>.col-lg-</code> class is not present.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Example: Stacked-to-horizontal</h3>
                                    <p>Using a single set of
                                        <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any
                                        <code>.row</code>.</p>
                                    <div class="row show-grid">
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                        <div class="col-md-1">.col-md-1</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-md-8">.col-md-8</div>
                                        <div class="col-md-4">.col-md-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-md-4">.col-md-4</div>
                                        <div class="col-md-4">.col-md-4</div>
                                        <div class="col-md-4">.col-md-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-md-6">.col-md-6</div>
                                        <div class="col-md-6">.col-md-6</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Example: Mobile and desktop</h3>
                                    <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding
                                        <code>.col-xs-*</code>
                                        <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                                    <div class="row show-grid">
                                        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-xs-6">.col-xs-6</div>
                                        <div class="col-xs-6">.col-xs-6</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Example: Mobile, tablet, desktops</h3>
                                    <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet
                                        <code>.col-sm-*</code> classes.</p>
                                    <div class="row show-grid">
                                        <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                        <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                        <div class="clearfix visible-xs"></div>
                                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 id="grid-responsive-resets">Responsive column resets</h3>
                                    <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a
                                        <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
                                    <div class="row show-grid">
                                        <div class="col-xs-6 col-sm-3">
                                            .col-xs-6 .col-sm-3
                                            <br>Resize your viewport or check it out on your phone for an example.
                                        </div>
                                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

                                        <!-- Add the extra clearfix for only the required viewport -->
                                        <div class="clearfix visible-xs"></div>

                                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 id="grid-offsetting">Offsetting columns</h3>
                                    <p>Move columns to the right using
                                        <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by
                                        <code>*</code> columns. For example,
                                        <code>.col-md-offset-4</code> moves
                                        <code>.col-md-4</code> over four columns.</p>
                                    <div class="row show-grid">
                                        <div class="col-md-4">.col-md-4</div>
                                        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                    </div>
                                    <div class="row show-grid">
                                        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 id="grid-nesting">Nesting columns</h3>
                                    <p>To nest your content with the default grid, add a new
                                        <code>.row</code> and set of
                                        <code>.col-md-*</code> columns within an existing
                                        <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
                                    <div class="row show-grid">
                                        <div class="col-md-9">
                                            Level 1: .col-md-9
                                            <div class="row show-grid">
                                                <div class="col-md-6">
                                                    Level 2: .col-md-6
                                                </div>
                                                <div class="col-md-6">
                                                    Level 2: .col-md-6
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 id="grid-column-ordering">Column ordering</h3>
                                    <p>Easily change the order of our built-in grid columns with
                                        <code>.col-md-push-*</code> and
                                        <code>.col-md-pull-*</code> modifier classes.</p>
                                    <div class="row show-grid">
                                        <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                                        <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
                                    </div>
                                </div>
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

