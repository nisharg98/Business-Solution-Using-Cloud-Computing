<?php
include("include/config.php");
if(isset($_REQUEST['action']) == 'logout')
{
	session_destroy();
	header("Location:login.php");
}
if(!isset($_SESSION['user_id']))
{
	header("Location:login.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
	<!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
	<!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
						<li><a title="Dashboard v.1" href="index.php"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-cube sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Product</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
								<li><a title="Product List" href="product-list.php"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product List</span></a></li>
                                <li><a title="Product Edit" href="product-edit.php"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product Add</span></a></li>
                            </ul>
                        </li>
						<li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Employee</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="employee-list.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Employee List</span></a></li>
                                <li><a title="Data Table" href="employee-edit.php"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Employee Add</span></a></li>
                            </ul>
                        </li>
						<li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-sort-amount-desc sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Sales</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="sales-list.php"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product List</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-bar-chart-o icon-wrap"></i> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.php"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.php"><i class="fa fa-signal sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Rounded Charts</span></a></li>
                            </ul>
                        </li>
						<li><a title="File Manager" href="file-manager.php"><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Manager</span></a></li>
					</ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro"style="height:60px;">
                        <a href="index.php"><img class="main-logo" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
												<i class="fa fa-bars"></i>
											</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a data-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">
														<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
														<span class="admin-name">Welcome, <?php echo $_SESSION['name']; ?></span>
														<a href="?action=logout"><span class="admin-name">Logout</span></a>
													</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard</a></li>
                                                <li><a href="product-list.php">Product List</a></li>
                                                <li><a href="product-edit.php">Product Edit</a></li>
                                                <li><a href="product-detail.php">Product Detail</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.php">File Manager</a></li>
												<li><a href="pdf-viewer.php">Pdf Viewer</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.php">Bar Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.php">Rounded Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>