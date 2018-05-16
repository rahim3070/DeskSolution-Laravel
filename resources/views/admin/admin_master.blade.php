<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard - Desk Solution Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/font-awesome/4.2.0/css/font-awesome.min.css')}}" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/jquery-ui.custom.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/chosen.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/datepicker.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/bootstrap-timepicker.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/daterangepicker.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/bootstrap-datetimepicker.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/colorpicker.min.css')}}" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/fonts/fonts.googleapis.com.css')}}" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="{{URL::to('public/asset_admin/css/ace-ie.min.css')}}" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{URL::to('public/asset_admin/js/ace-extra.min.js')}}"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="{{URL::to('public/asset_admin/js/html5shiv.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/respond.min.js')}}"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
try {
    ace.settings.check('navbar', 'fixed')
} catch (e) {
}
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            Desk Solution Admin
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <!--                        <li class="grey">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="ace-icon fa fa-tasks"></i>
                                                        <span class="badge badge-grey">4</span>
                                                    </a>
                        
                                                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                                        <li class="dropdown-header">
                                                            <i class="ace-icon fa fa-check"></i>
                                                            4 Tasks to complete
                                                        </li>
                        
                                                        <li class="dropdown-content">
                                                            <ul class="dropdown-menu dropdown-navbar">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">Software Update</span>
                                                                            <span class="pull-right">65%</span>
                                                                        </div>
                        
                                                                        <div class="progress progress-mini">
                                                                            <div style="width:65%" class="progress-bar"></div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">Hardware Upgrade</span>
                                                                            <span class="pull-right">35%</span>
                                                                        </div>
                        
                                                                        <div class="progress progress-mini">
                                                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">Unit Testing</span>
                                                                            <span class="pull-right">15%</span>
                                                                        </div>
                        
                                                                        <div class="progress progress-mini">
                                                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">Bug Fixes</span>
                                                                            <span class="pull-right">90%</span>
                                                                        </div>
                        
                                                                        <div class="progress progress-mini progress-striped active">
                                                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                        
                                                        <li class="dropdown-footer">
                                                            <a href="#">
                                                                See tasks with details
                                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                        
                                                <li class="purple">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                                        <span class="badge badge-important">8</span>
                                                    </a>
                        
                                                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                                        <li class="dropdown-header">
                                                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                                                            8 Notifications
                                                        </li>
                        
                                                        <li class="dropdown-content">
                                                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">
                                                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                                                New Comments
                                                                            </span>
                                                                            <span class="pull-right badge badge-info">+12</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                                                        Bob just signed up as an editor ...
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">
                                                                                <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                                                                New Orders
                                                                            </span>
                                                                            <span class="pull-right badge badge-success">+8</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="clearfix">
                                                                            <span class="pull-left">
                                                                                <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                                                                                Followers
                                                                            </span>
                                                                            <span class="pull-right badge badge-info">+11</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                        
                                                        <li class="dropdown-footer">
                                                            <a href="#">
                                                                See all notifications
                                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                        
                                                <li class="green">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                                                        <span class="badge badge-success">5</span>
                                                    </a>
                        
                                                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                                        <li class="dropdown-header">
                                                            <i class="ace-icon fa fa-envelope-o"></i>
                                                            5 Messages
                                                        </li>
                        
                                                        <li class="dropdown-content">
                                                            <ul class="dropdown-menu dropdown-navbar">
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="{{URL::to('public/asset_admin/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar" />
                                                                        <span class="msg-body">
                                                                            <span class="msg-title">
                                                                                <span class="blue">Alex:</span>
                                                                                Ciao sociis natoque penatibus et auctor ...
                                                                            </span>
                        
                                                                            <span class="msg-time">
                                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                                <span>a moment ago</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="{{URL::to('public/asset_admin/avatars/avatar3.png')}}" class="msg-photo" alt="Susan's Avatar" />
                                                                        <span class="msg-body">
                                                                            <span class="msg-title">
                                                                                <span class="blue">Susan:</span>
                                                                                Vestibulum id ligula porta felis euismod ...
                                                                            </span>
                        
                                                                            <span class="msg-time">
                                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                                <span>20 minutes ago</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="{{URL::to('public/asset_admin/avatars/avatar4.png')}}" class="msg-photo" alt="Bob's Avatar" />
                                                                        <span class="msg-body">
                                                                            <span class="msg-title">
                                                                                <span class="blue">Bob:</span>
                                                                                Nullam quis risus eget urna mollis ornare ...
                                                                            </span>
                        
                                                                            <span class="msg-time">
                                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                                <span>3:15 pm</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="{{URL::to('public/asset_admin/avatars/avatar2.png')}}" class="msg-photo" alt="Kate's Avatar" />
                                                                        <span class="msg-body">
                                                                            <span class="msg-title">
                                                                                <span class="blue">Kate:</span>
                                                                                Ciao sociis natoque eget urna mollis ornare ...
                                                                            </span>
                        
                                                                            <span class="msg-time">
                                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                                <span>1:33 pm</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="{{URL::to('public/asset_admin/avatars/avatar5.png')}}" class="msg-photo" alt="Fred's Avatar" />
                                                                        <span class="msg-body">
                                                                            <span class="msg-title">
                                                                                <span class="blue">Fred:</span>
                                                                                Vestibulum id penatibus et auctor  ...
                                                                            </span>
                        
                                                                            <span class="msg-time">
                                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                                <span>10:09 am</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                        
                                                        <li class="dropdown-footer">
                                                            <a href="inbox.html">
                                                                See all messages
                                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="{{URL::to('public/asset_admin/avatars/noimage.jpg')}}" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small> {{Session::get('admin_name')}}
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <!--                                <li><a href="#"><i class="ace-icon fa fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="ace-icon fa fa-user"></i>Profile</a></li>-->
                                <li class="divider"></li>
                                <li><a href="{{URL::to('logout')}}"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {
                    }
                </script>

                <!--                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                                        <button class="btn btn-success">
                                            <i class="ace-icon fa fa-signal"></i>
                                        </button>
                
                                        <button class="btn btn-info">
                                            <i class="ace-icon fa fa-pencil"></i>
                                        </button>
                
                                        <button class="btn btn-warning">
                                            <i class="ace-icon fa fa-users"></i>
                                        </button>
                
                                        <button class="btn btn-danger">
                                            <i class="ace-icon fa fa-cogs"></i>
                                        </button>
                                    </div>
                
                                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                                        <span class="btn btn-success"></span>
                
                                        <span class="btn btn-info"></span>
                
                                        <span class="btn btn-warning"></span>
                
                                        <span class="btn btn-danger"></span>
                                    </div>
                                </div> /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="active"><a href="{{URL::to('/dashboard')}}"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text">Dashboard </span></a><b class="arrow"></b></li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-desktop"></i><span class="menu-text">Home Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-home-content')}}"><i class="menu-icon fa fa-caret-right"></i>Add Home Content</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-home-content')}}"><i class="menu-icon fa fa-caret-right"></i>Manage Home Content</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-list"></i><span class="menu-text">About Us Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-aboutus-content')}}"><i class="menu-icon fa fa-caret-right"></i>Add About Us Content</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-aboutus-content')}}"><i class="menu-icon fa fa-caret-right"></i>Manage About Us Content</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-heart"></i><span class="menu-text">Portfolio Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-portfolio-category')}}"><i class="menu-icon fa fa-caret-right"></i>Add Portfolio Category</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-portfolio-category')}}"><i class="menu-icon fa fa-caret-right"></i>Manage Portfolio Category</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('add-portfolio-category-details')}}"><i class="menu-icon fa fa-caret-right"></i>Add Portfolio Category Details</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-portfolio-category-details')}}"><i class="menu-icon fa fa-caret-right"></i>Manage Portfolio Category Details</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text">Team Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-team-content')}}"><i class="menu-icon fa fa-caret-right"></i>Add Team Content</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-team-content')}}"><i class="menu-icon fa fa-caret-right"></i>Manage Team Content</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-coffee"></i><span class="menu-text">Contact Us Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-contactus-content')}}"><i class="menu-icon fa fa-caret-right"></i>Add Contact Us Content</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-contactus-content')}}"><i class="menu-icon fa fa-caret-right"></i>Manage Contact Us Content</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bell-o"></i><span class="menu-text">News Letter Content</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="{{URL::to('add-newsletter-content')}}"><i class="menu-icon fa fa-caret-right"></i>Add News Letter Content</a><b class="arrow"></b></li>
                            <li class=""><a href="{{URL::to('manage-newsletter-content')}}"><i class="menu-icon fa fa-caret-right"></i>Manage News Letter Content</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <li class=""><a href="{{URL::to('manage-contactus-inbox')}}"><i class="menu-icon fa fa-inbox"></i><span class="menu-text">Manage Inbox</span></a><b class="arrow"></b></li>
                    <!--<li class=""><a href="#"><i class="menu-icon fa fa-list-alt"></i><span class="menu-text"> Widgets </span></a><b class="arrow"></b></li>-->
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {
                    }
                </script>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    @yield('admin_content')
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Desk Solution</span>
                            &copy; 2018
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="{{URL::to('public/asset_admin/js/jquery.2.1.1.min.js')}}"></script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script src="{{URL::to('public/asset_admin/js/jquery.1.11.1.min.js')}}"></script>
        <![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
                    window.jQuery || document.write("<script src='{{URL::to('public/asset_admin/js/jquery.min.js')}}'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{URL::to('public/asset_admin/js/jquery1x.min.js')}}'>"+"<"+"/script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='{{URL::to('public/asset_admin/js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
        </script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap.min.js')}}"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="{{URL::to('public/asset_admin/js/excanvas.min.js')}}"></script>
        <![endif]-->
        <script src="{{URL::to('public/asset_admin/js/jquery-ui.custom.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.ui.touch-punch.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.flot.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.flot.pie.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.flot.resize.min.js')}}"></script>
        <!--For Form Elements-->
        <script src="{{URL::to('public/asset_admin/js/chosen.jquery.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/fuelux.spinner.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/moment.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/daterangepicker.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.knob.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.autosize.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.maskedinput.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/bootstrap-tag.min.js')}}"></script>
        <!--For Data Table Elements-->
        <script src="{{URL::to('public/asset_admin/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/jquery.dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/dataTables.tableTools.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/dataTables.colVis.min.js')}}"></script>

        <!-- ace scripts -->
        <script src="{{URL::to('public/asset_admin/js/ace-elements.min.js')}}"></script>
        <script src="{{URL::to('public/asset_admin/js/ace.min.js')}}"></script>

        <!-- inline scripts related to Form Elements -->
        <script type="text/javascript">
            jQuery(function ($) {
                $('#id-disable-check').on('click', function () {
                    var inp = $('#form-input-readonly').get(0);
                    if (inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly', 'true');
                        inp.removeAttribute('disabled');
                        inp.value = "This text field is readonly!";
                    } else {
                        inp.setAttribute('disabled', 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value = "This text field is disabled!";
                    }
                });


                if (!ace.vars['touch']) {
                    $('.chosen-select').chosen({allow_single_deselect: true});
                    //resize the chosen on window resize

                    $(window)
                            .off('resize.chosen')
                            .on('resize.chosen', function () {
                                $('.chosen-select').each(function () {
                                    var $this = $(this);
                                    $this.next().css({'width': $this.parent().width()});
                                })
                            }).trigger('resize.chosen');
                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
                        if (event_name != 'sidebar_collapsed')
                            return;
                        $('.chosen-select').each(function () {
                            var $this = $(this);
                            $this.next().css({'width': $this.parent().width()});
                        })
                    });


                    $('#chosen-multiple-style .btn').on('click', function (e) {
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if (which == 2)
                            $('#form-field-select-4').addClass('tag-input-style');
                        else
                            $('#form-field-select-4').removeClass('tag-input-style');
                    });
                }


                $('[data-rel=tooltip]').tooltip({container: 'body'});
                $('[data-rel=popover]').popover({container: 'body'});

                $('textarea[class*=autosize]').autosize({append: "\n"});
                $('textarea.limited').inputlimiter({
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });

                $.mask.definitions['~'] = '[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-phone').mask('(999) 999-9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask("a*-999-a999", {placeholder: " ", completed: function () {
                        alert("You typed the following: " + this.val());
                    }});



                $("#input-size-slider").css('width', '200px').slider({
                    value: 1,
                    range: "min",
                    min: 1,
                    max: 8,
                    step: 1,
                    slide: function (event, ui) {
                        var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                        var val = parseInt(ui.value);
                        $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                    }
                });

                $("#input-span-slider").slider({
                    value: 1,
                    range: "min",
                    min: 1,
                    max: 12,
                    step: 1,
                    slide: function (event, ui) {
                        var val = parseInt(ui.value);
                        $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                    }
                });



                //"jQuery UI Slider"
                //range slider tooltip example
                $("#slider-range").css('height', '200px').slider({
                    orientation: "vertical",
                    range: true,
                    min: 0,
                    max: 100,
                    values: [17, 67],
                    slide: function (event, ui) {
                        var val = ui.values[$(ui.handle).index() - 1] + "";

                        if (!ui.handle.firstChild) {
                            $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                                    .prependTo(ui.handle);
                        }
                        $(ui.handle.firstChild).show().children().eq(1).text(val);
                    }
                }).find('span.ui-slider-handle').on('blur', function () {
                    $(this.firstChild).hide();
                });


                $("#slider-range-max").slider({
                    range: "max",
                    min: 1,
                    max: 10,
                    value: 2
                });

                $("#slider-eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                    // read initial values from markup and remove that
                    var value = parseInt($(this).text(), 10);
                    $(this).empty().slider({
                        value: value,
                        range: "min",
                        animate: true

                    });
                });

                $("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file: 'No File ...',
                    btn_choose: 'Choose',
                    btn_change: 'Change',
                    droppable: false,
                    onchange: null,
                    thumbnail: false //| true | large
                            //whitelist:'gif|png|jpg|jpeg'
                            //blacklist:'exe|php'
                            //onchange:''
                            //
                });
                //pre-show a file name, for example a previously selected file
                //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


                $('#id-input-file-3').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'small'//large | fit
                            //,icon_remove:null//set null, to hide remove/reset button
                            /**,before_change:function(files, dropped) {
                             //Check an example below
                             //or examples/file-upload.html
                             return true;
                             }*/
                            /**,before_remove : function() {
                             return true;
                             }*/
                    ,
                    preview_error: function (filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }

                }).on('change', function () {
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });


                //$('#id-input-file-3')
                //.ace_file_input('show_file_list', [
                //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
                //{type: 'file', name: 'hello.txt'}
                //]);




                //dynamically change allowed formats by changing allowExt && allowMime function
                $('#id-file-format').removeAttr('checked').on('change', function () {
                    var whitelist_ext, whitelist_mime;
                    var btn_choose
                    var no_icon
                    if (this.checked) {
                        btn_choose = "Drop images here or click to choose";
                        no_icon = "ace-icon fa fa-picture-o";

                        whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
                        whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
                    } else {
                        btn_choose = "Drop files here or click to choose";
                        no_icon = "ace-icon fa fa-cloud-upload";

                        whitelist_ext = null;//all extensions are acceptable
                        whitelist_mime = null;//all mimes are acceptable
                    }
                    var file_input = $('#id-input-file-3');
                    file_input
                            .ace_file_input('update_settings',
                                    {
                                        'btn_choose': btn_choose,
                                        'no_icon': no_icon,
                                        'allowExt': whitelist_ext,
                                        'allowMime': whitelist_mime
                                    })
                    file_input.ace_file_input('reset_input');

                    file_input
                            .off('file.error.ace')
                            .on('file.error.ace', function (e, info) {
                                //console.log(info.file_count);//number of selected files
                                //console.log(info.invalid_count);//number of invalid files
                                //console.log(info.error_list);//a list of errors in the following format

                                //info.error_count['ext']
                                //info.error_count['mime']
                                //info.error_count['size']

                                //info.error_list['ext']  = [list of file names with invalid extension]
                                //info.error_list['mime'] = [list of file names with invalid mimetype]
                                //info.error_list['size'] = [list of file names with invalid size]


                                /**
                                 if( !info.dropped ) {
                                 //perhapse reset file field if files have been selected, and there are invalid files among them
                                 //when files are dropped, only valid files will be added to our file array
                                 e.preventDefault();//it will rest input
                                 }
                                 */


                                //if files have been selected (not dropped), you can choose to reset input
                                //because browser keeps all selected files anyway and this cannot be changed
                                //we can only reset file field to become empty again
                                //on any case you still should check files with your server side script
                                //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                            });

                });

                $('#spinner1').ace_spinner({value: 0, min: 0, max: 10000000, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                        .closest('.ace-spinner')
                        .on('changed.fu.spinbox', function () {
                            //alert($('#spinner1').val())
                        });
                $('#spinner12').ace_spinner({value: 0, min: 0, max: 10000000, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                        .closest('.ace-spinner')
                        .on('changed.fu.spinbox', function () {
                            //alert($('#spinner1').val())
                        });
                $('#spinner13').ace_spinner({value: 0, min: 0, max: 10000000, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                        .closest('.ace-spinner')
                        .on('changed.fu.spinbox', function () {
                            //alert($('#spinner1').val())
                        });
                $('#spinner2').ace_spinner({value: 0, min: 0, max: 10000, step: 100, touch_spinner: true, icon_up: 'ace-icon fa fa-caret-up bigger-110', icon_down: 'ace-icon fa fa-caret-down bigger-110'});
                $('#spinner3').ace_spinner({value: 0, min: -100, max: 100, step: 10, on_sides: true, icon_up: 'ace-icon fa fa-plus bigger-110', icon_down: 'ace-icon fa fa-minus bigger-110', btn_up_class: 'btn-success', btn_down_class: 'btn-danger'});
                $('#spinner4').ace_spinner({value: 0, min: -100, max: 100, step: 10, on_sides: true, icon_up: 'ace-icon fa fa-plus', icon_down: 'ace-icon fa fa-minus', btn_up_class: 'btn-purple', btn_down_class: 'btn-purple'});

                //$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
                //or
                //$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
                //$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


                //datepicker plugin
                //link
                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                        //show datepicker when clicking on the icon
                        .next().on(ace.click_event, function () {
                    $(this).prev().focus();
                });

                //or change it into a date range picker
                $('.input-daterange').datepicker({autoclose: true});


                //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
                $('input[name=date-range-picker]').daterangepicker({
                    'applyClass': 'btn-sm btn-success',
                    'cancelClass': 'btn-sm btn-default',
                    locale: {
                        applyLabel: 'Apply',
                        cancelLabel: 'Cancel',
                    }
                })
                        .prev().on(ace.click_event, function () {
                    $(this).next().focus();
                });


                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false
                }).next().on(ace.click_event, function () {
                    $(this).prev().focus();
                });

                $('#date-timepicker1').datetimepicker().next().on(ace.click_event, function () {
                    $(this).prev().focus();
                });


                $('#colorpicker1').colorpicker();

                $('#simple-colorpicker-1').ace_colorpicker();
                //$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
                //$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
                //var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
                //picker.pick('red', true);//insert the color if it doesn't exist


                $(".knob").knob();


                var tag_input = $('#form-field-tags');
                try {
                    tag_input.tag(
                            {
                                placeholder: tag_input.attr('placeholder'),
                                //enable typeahead by specifying the source array
                                source: ace.vars['US_STATES'], //defined in ace.js >> ace.enable_search_ahead
                                /**
                                 //or fetch data from database, fetch those that match "query"
                                 source: function(query, process) {
                                 $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                                 .done(function(result_items){
                                 process(result_items);
                                 });
                                 }
                                 */
                            }
                    )

                    //programmatically add a new
                    var $tag_obj = $('#form-field-tags').data('tag');
                    $tag_obj.add('Programmatically Added');
                } catch (e) {
                    //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                    tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                    //$('#form-field-tags').autosize({append: "\n"});
                }


                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'large'
                })

                //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                //and its width cannot be determined.
                //so we set the width after modal is show
                $('#modal-form').on('shown.bs.modal', function () {
                    if (!ace.vars['touch']) {
                        $(this).find('.chosen-container').each(function () {
                            $(this).find('a:first-child').css('width', '210px');
                            $(this).find('.chosen-drop').css('width', '210px');
                            $(this).find('.chosen-search input').css('width', '200px');
                        });
                    }
                })
                /**
                 //or you can activate the chosen plugin after modal is shown
                 //this way select element becomes visible with dimensions and chosen works as expected
                 $('#modal-form').on('shown', function () {
                 $(this).find('.modal-chosen').chosen();
                 })
                 */



                $(document).one('ajaxloadstart.page', function (e) {
                    $('textarea[class*=autosize]').trigger('autosize.destroy');
                    $('.limiterBox,.autosizejs').remove();
                    $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
                });

            });
        </script>

        <!-- inline scripts related to Data Tables -->        
        <script type="text/javascript">
            jQuery(function ($) {
                //initiate dataTables plugin
                var oTable1 =
                        $('#dynamic-table')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .dataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null, null, null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50
                        });
                //oTable1.fnAdjustColumnSizing();


                //TableTools settings
                TableTools.classes.container = "btn-group btn-overlap";
                TableTools.classes.print = {
                    "body": "DTTT_Print",
                    "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
                    "message": "tableTools-print-navbar"
                }

                //initiate TableTools extension
                var tableTools_obj = new $.fn.dataTable.TableTools(oTable1, {
                    "sSwfPath": "{{URL::to('public/asset_admin/swf/copy_csv_xls_pdf.swf')}}",

                    "sRowSelector": "td:not(:last-child)",
                    "sRowSelect": "multi",
                    "fnRowSelected": function (row) {
                        //check checkbox when row is selected
                        try {
                            $(row).find('input[type=checkbox]').get(0).checked = true
                        } catch (e) {
                        }
                    },
                    "fnRowDeselected": function (row) {
                        //uncheck checkbox
                        try {
                            $(row).find('input[type=checkbox]').get(0).checked = false
                        } catch (e) {
                        }
                    },

                    "sSelectedClass": "success",
                    "aButtons": [
                        {
                            "sExtends": "copy",
                            "sToolTip": "Copy to clipboard",
                            "sButtonClass": "btn btn-white btn-primary btn-bold",
                            "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
                            "fnComplete": function () {
                                this.fnInfo('<h3 class="no-margin-top smaller">Table copied</h3>\
                                        <p>Copied ' + (oTable1.fnSettings().fnRecordsTotal()) + ' row(s) to the clipboard.</p>',
                                        1500
                                        );
                            }
                        },

                        {
                            "sExtends": "csv",
                            "sToolTip": "Export to CSV",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
                        },

                        {
                            "sExtends": "pdf",
                            "sToolTip": "Export to PDF",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
                        },

                        {
                            "sExtends": "print",
                            "sToolTip": "Print view",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

                            "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

                            "sInfo": "<h3 class='no-margin-top'>Print view</h3>\
                                <p>Please use your browser's print function to\
                                print this table.\
                                <br />Press <b>escape</b> when finished.</p>",
                        }
                    ]
                });

                //we put a container before our table and append TableTools element to it
                $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));

                //also add tooltips to table tools buttons
                //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
                //so we add tooltips to the "DIV" child after it becomes inserted
                //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
                setTimeout(function () {
                    $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function () {
                        var div = $(this).find('> div');
                        if (div.length > 0)
                            div.tooltip({container: 'body'});
                        else
                            $(this).tooltip({container: 'body'});
                    });
                }, 200);

                //ColVis extension
                var colvis = new $.fn.dataTable.ColVis(oTable1, {
                    "buttonText": "<i class='fa fa-search'></i>",
                    "aiExclude": [0, 8],
                    "bShowAll": true,
                    //"bRestore": true,
                    "sAlign": "right",
                    "fnLabel": function (i, title, th) {
                        return $(th).text();//remove icons, etc
                    }
                });

                //style it
                $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')

                //and append it to our table tools btn-group, also add tooltip
                $(colvis.button())
                        .prependTo('.tableTools-container .btn-group')
                        .attr('title', 'Show/hide columns').tooltip({container: 'body'});

                //and make the list, buttons and checkboxed Ace-like
                $(colvis.dom.collection)
                        .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
                        .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
                        .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');

                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            tableTools_obj.fnSelect(row);
                        else
                            tableTools_obj.fnDeselect(row);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (!this.checked)
                        tableTools_obj.fnSelect(row);
                    else
                        tableTools_obj.fnDeselect($(this).closest('tr').get(0));
                });

                $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });

                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });



                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }

            })
        </script>

        <!-- inline scripts related to Dashboard page -->
        <script type="text/javascript">
            jQuery(function ($) {
                $('.easy-pie-chart.percentage').each(function () {
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size / 10),
                        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                        size: size
                    });
                })

                $('.sparkline').each(function () {
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                            {
                                tagValuesAttribute: 'data-values',
                                type: 'bar',
                                barColor: barColor,
                                chartRangeMin: $(this).data('min') || 0
                            });
                });


                //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
                //but sometimes it brings up errors with normal resize event handlers
                $.resize.throttleWindow = false;

                var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
                var data = [
                    {label: "social networks", data: 38.7, color: "#68BC31"},
                    {label: "search engines", data: 24.5, color: "#2091CF"},
                    {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
                    {label: "direct traffic", data: 18.6, color: "#DA5430"},
                    {label: "other", data: 10, color: "#FEE074"}
                ]
                function drawPieChart(placeholder, data, position) {
                    $.plot(placeholder, data, {
                        series: {
                            pie: {
                                show: true,
                                tilt: 0.8,
                                highlight: {
                                    opacity: 0.25
                                },
                                stroke: {
                                    color: '#fff',
                                    width: 2
                                },
                                startAngle: 2
                            }
                        },
                        legend: {
                            show: true,
                            position: position || "ne",
                            labelBoxBorderColor: null,
                            margin: [-30, 15]
                        }
                        ,
                        grid: {
                            hoverable: true,
                            clickable: true
                        }
                    })
                }
                drawPieChart(placeholder, data);

                /**
                 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                 so that's not needed actually.
                 */
                placeholder.data('chart', data);
                placeholder.data('draw', drawPieChart);


                //pie chart tooltip example
                var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                var previousPoint = null;

                placeholder.on('plothover', function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.seriesIndex) {
                            previousPoint = item.seriesIndex;
                            var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                            $tooltip.show().children(0).text(tip);
                        }
                        $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
                    } else {
                        $tooltip.hide();
                        previousPoint = null;
                    }

                });

                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function (e) {
                    $tooltip.remove();
                });




                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }

                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }

                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }


                var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
                $.plot("#sales-charts", [
                    {label: "Domains", data: d1},
                    {label: "Hosting", data: d2},
                    {label: "Services", data: d3}
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: {show: true},
                        points: {show: true}
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: {colors: ["#fff", "#fff"]},
                        borderWidth: 1,
                        borderColor: '#555'
                    }
                });


                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }


                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });


                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                    $('#tasks').on('touchstart', function (e) {
                        var li = $(e.target).closest('#tasks li');
                        if (li.length == 0)
                            return;
                        var label = li.find('label.inline').get(0);
                        if (label == e.target || $.contains(label, e.target))
                            e.stopImmediatePropagation();
                    });

                $('#tasks').sortable({
                    opacity: 0.8,
                    revert: true,
                    forceHelperSize: true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize: true,
                    tolerance: 'pointer',
                    stop: function (event, ui) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function () {
                    if (this.checked)
                        $(this).closest('li').addClass('selected');
                    else
                        $(this).closest('li').removeClass('selected');
                });


                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function (e) {
                    var offset = $(this).offset();

                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                        $(this).addClass('dropup');
                    else
                        $(this).removeClass('dropup');
                });

            })
        </script>
    </body>
</html>
