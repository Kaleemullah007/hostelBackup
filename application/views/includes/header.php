<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo site_url(); ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="theme/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="theme/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="theme/dist/css/sb-admin-2.css" rel="stylesheet" media="all">

    <!-- Custom Fonts -->
    <link href="theme/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo site_url('favicon.ico')?>" type="image/ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background:#b22d30;color:#fff !important;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>" style="color:#fff;">Hostel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="javascript:void(0)"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="alogout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Searchtheme">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="adashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- end of dashboard -->
                        <li>
                            <a href="pending-sallary"><i class="fa fa-bell fa-fw"></i>Sallary Pending Approvals</a>
                        </li>
                        <!-- end of staff pending approvals for sallary -->
                     
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>&nbsp;&nbsp;Profiles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="all-profiles">All Profiles</a>
                                </li>
                                <li>
                                    <a href="student-profiles">Student Profiles</a>
                                </li>
                                <li>
                                    <a href="staff-profiles">Staff Profiles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;Registration<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="registration-home">All Registration</a>
                                </li>
                                <li>
                                    <a href="student-registration">Student Registration</a>
                                </li>
                                <li>
                                    <a href="staff-registration">Staff Registration</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;&nbsp;Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="accounts-home">Accounts Management</a>
                                </li>
                                <li>
                                    <a href="approve-sallary">Staff Sallaries</a>
                                </li>
                                <li>
                                    <a href="generate-voucher">Voucher Generation</a>
                                </li>
                                <li>
                                    <a href="fee-payment">Fee Payment</a>
                                </li>
                                <li>
                                    <a href="income-statement">Income Statement</a>
                                </li>
                                <li>
                                    <a href="balance-sheet">Balance Sheet</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-eye fa-fw"></i>&nbsp;&nbsp;HR Section<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="hrportion-home">HR Management</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Staff Attendance</a>
                                </li>
                                <li>
                                    <a href="staff-sallary">Staff Sallary</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-support fa-fw"></i>&nbsp;&nbsp;Accomodation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="accomodation-home">Catagories & Rooms</a>
                                </li>
                                <li>
                                    <a href="add-catagory">Add Catagory</a>
                                </li>
                                <li>
                                    <a href="all-catagories">View All Catagory</a>
                                </li>
                                <li>
                                    <a href="add-room">Add Room</a>
                                </li>
                                <li>
                                    <a href="all-rooms">View Room Detail</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>&nbsp;&nbsp;Inventory<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="all-inventory">View Items</a>
                                </li>
                                <li>
                                    <a href="add-inventory">Add New Items</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-briefcase fa-fw"></i>&nbsp;&nbsp;Partners<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="all-partners">View Partners</a>
                                </li>
                                <li>
                                    <a href="add-partner">Add New Partners</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i>&nbsp;&nbsp;Assets<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="all-assets">View Assets</a>
                                </li>
                                <li>
                                    <a href="add-asset">Add New Asset</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i>&nbsp;&nbsp;Expenses<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                                                <li>
                                    <a href="all-expense">View Expenses</a>
                                </li>
                                <li>
                                    <a href="add-expense">Add New Expense</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>