@extends('admin.admin_master')
@section('admin_content')
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try {
            ace.settings.check('breadcrumbs', 'fixed')
        } catch (e) {
        }
    </script>

    <ul class="breadcrumb">
        <li><i class="ace-icon fa fa-tachometer home-icon"></i><a href="{{URL::to('/dashboard')}}">Dashboard</a></li>
        <!--<li class="active">Dashboard</li>-->
    </ul><!-- /.breadcrumb -->

<!--    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
        </form>
    </div> /.nav-search -->
</div>
<!--<div class="page-content">
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div> /.pull-left 

            <div class="pull-left width-50">
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                </div>
            </div> /.pull-left 
        </div> /.ace-settings-box 
    </div> /.ace-settings-container 

    <div class="page-header">
        <h1>
            Dashboard
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                overview &amp; stats
            </small>
        </h1>
    </div> /.page-header 

    <div class="row">
        <div class="col-xs-12">
             PAGE CONTENT BEGINS 
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>

                <i class="ace-icon fa fa-check green"></i>

                Welcome to
                <strong class="green">
                    Ace
                    <small>(v1.3.3)</small>
                </strong>,
                легкий, много-функциональный и простой в использовании шаблон для админки на bootstrap 3.3. Загрузить исходники с <a href="https://github.com/bopoda/ace">github</a> (with minified ace js files).
            </div>

            <div class="row">
                <div class="space-6"></div>

                <div class="col-sm-7 infobox-container">
                    <div class="infobox infobox-green">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-comments"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">32</span>
                            <div class="infobox-content">comments + 2 reviews</div>
                        </div>

                        <div class="stat stat-success">8%</div>
                    </div>

                    <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-twitter"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">11</span>
                            <div class="infobox-content">new followers</div>
                        </div>

                        <div class="badge badge-success">
                            +32%
                            <i class="ace-icon fa fa-arrow-up"></i>
                        </div>
                    </div>

                    <div class="infobox infobox-pink">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-shopping-cart"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">8</span>
                            <div class="infobox-content">new orders</div>
                        </div>
                        <div class="stat stat-important">4%</div>
                    </div>

                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-flask"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">7</span>
                            <div class="infobox-content">experiments</div>
                        </div>
                    </div>

                    <div class="infobox infobox-orange2">
                        <div class="infobox-chart">
                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">6,251</span>
                            <div class="infobox-content">pageviews</div>
                        </div>

                        <div class="badge badge-success">
                            7.2%
                            <i class="ace-icon fa fa-arrow-up"></i>
                        </div>
                    </div>

                    <div class="infobox infobox-blue2">
                        <div class="infobox-progress">
                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                <span class="percent">42</span>%
                            </div>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-text">traffic used</span>

                            <div class="infobox-content">
                                <span class="bigger-110">~</span>
                                58GB remaining
                            </div>
                        </div>
                    </div>

                    <div class="space-6"></div>

                    <div class="infobox infobox-green infobox-small infobox-dark">
                        <div class="infobox-progress">
                            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                <span class="percent">61</span>%
                            </div>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">Task</div>
                            <div class="infobox-content">Completion</div>
                        </div>
                    </div>

                    <div class="infobox infobox-blue infobox-small infobox-dark">
                        <div class="infobox-chart">
                            <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">Earnings</div>
                            <div class="infobox-content">$32,000</div>
                        </div>
                    </div>

                    <div class="infobox infobox-grey infobox-small infobox-dark">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-download"></i>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">Downloads</div>
                            <div class="infobox-content">1,205</div>
                        </div>
                    </div>
                </div>

                <div class="vspace-12-sm"></div>

                <div class="col-sm-5">
                    <div class="widget-box">
                        <div class="widget-header widget-header-flat widget-header-small">
                            <h5 class="widget-title">
                                <i class="ace-icon fa fa-signal"></i>
                                Traffic Sources
                            </h5>

                            <div class="widget-toolbar no-border">
                                <div class="inline dropdown-hover">
                                    <button class="btn btn-minier btn-primary">
                                        This Week
                                        <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                        <li class="active">
                                            <a href="#" class="blue">
                                                <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                This Week
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                Last Week
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                This Month
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                Last Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div id="piechart-placeholder"></div>

                                <div class="hr hr8 hr-double"></div>

                                <div class="clearfix">
                                    <div class="grid3">
                                        <span class="grey">
                                            <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                                            &nbsp; likes
                                        </span>
                                        <h4 class="bigger pull-right">1,255</h4>
                                    </div>

                                    <div class="grid3">
                                        <span class="grey">
                                            <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                                            &nbsp; tweets
                                        </span>
                                        <h4 class="bigger pull-right">941</h4>
                                    </div>

                                    <div class="grid3">
                                        <span class="grey">
                                            <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                                            &nbsp; pins
                                        </span>
                                        <h4 class="bigger pull-right">1,050</h4>
                                    </div>
                                </div>
                            </div> /.widget-main 
                        </div> /.widget-body 
                    </div> /.widget-box 
                </div> /.col 
            </div> /.row 

            <div class="hr hr32 hr-dotted"></div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
                                <i class="ace-icon fa fa-star orange"></i>
                                Popular Domains
                            </h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr>
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>name
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>price
                                            </th>

                                            <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>status
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>internet.com</td>

                                            <td>
                                                <small>
                                                    <s class="red">$29.99</s>
                                                </small>
                                                <b class="green">$19.99</b>
                                            </td>

                                            <td class="hidden-480">
                                                <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>online.com</td>

                                            <td>
                                                <b class="blue">$16.45</b>
                                            </td>

                                            <td class="hidden-480">
                                                <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>newnet.com</td>

                                            <td>
                                                <b class="blue">$15.00</b>
                                            </td>

                                            <td class="hidden-480">
                                                <span class="label label-danger arrowed">pending</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>web.com</td>

                                            <td>
                                                <small>
                                                    <s class="red">$24.99</s>
                                                </small>
                                                <b class="green">$19.95</b>
                                            </td>

                                            <td class="hidden-480">
                                                <span class="label arrowed">
                                                    <s>out of stock</s>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>domain.com</td>

                                            <td>
                                                <b class="blue">$12.00</b>
                                            </td>

                                            <td class="hidden-480">
                                                <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> /.widget-main 
                        </div> /.widget-body 
                    </div> /.widget-box 
                </div> /.col 

                <div class="col-sm-7">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
                                <i class="ace-icon fa fa-signal"></i>
                                Sale Stats
                            </h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-4">
                                <div id="sales-charts"></div>
                            </div> /.widget-main 
                        </div> /.widget-body 
                    </div> /.widget-box 
                </div> /.col 
            </div> /.row 

            <div class="hr hr32 hr-dotted"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="widget-box transparent" id="recent-box">
                        <div class="widget-header">
                            <h4 class="widget-title lighter smaller">
                                <i class="ace-icon fa fa-rss orange"></i>RECENT
                            </h4>

                            <div class="widget-toolbar no-border">
                                <ul class="nav nav-tabs" id="recent-tab">
                                    <li class="active">
                                        <a data-toggle="tab" href="#task-tab">Tasks</a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#member-tab">Members</a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#comment-tab">Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-4">
                                <div class="tab-content padding-8">
                                    <div id="task-tab" class="tab-pane active">
                                        <h4 class="smaller lighter green">
                                            <i class="ace-icon fa fa-list"></i>
                                            Sortable Lists
                                        </h4>

                                        <ul id="tasks" class="item-list">
                                            <li class="item-orange clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Answering customer questions</span>
                                                </label>

                                                <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                    <span class="percent">42</span>%
                                                </div>
                                            </li>

                                            <li class="item-red clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Fixing bugs</span>
                                                </label>

                                                <div class="pull-right action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <span class="vbar"></span>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>

                                                    <span class="vbar"></span>

                                                    <a href="#" class="green">
                                                        <i class="ace-icon fa fa-flag bigger-130"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="item-default clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Adding new features</span>
                                                </label>

                                                <div class="inline pull-right position-relative dropdown-hover">
                                                    <button class="btn btn-minier bigger btn-primary">
                                                        <i class="ace-icon fa fa-cog icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
                                                                <span class="green">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                    <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="item-blue clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Upgrading scripts used in template</span>
                                                </label>
                                            </li>

                                            <li class="item-grey clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Adding new skins</span>
                                                </label>
                                            </li>

                                            <li class="item-green clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Updating server software up</span>
                                                </label>
                                            </li>

                                            <li class="item-pink clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Cleaning up</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="member-tab" class="tab-pane">
                                        <div class="clearfix">
                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's avatar" src="{{URL::to('public/asset_admin/avatars/user.jpg')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">20 min</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Joe Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar2.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Joe Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">1 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Jim Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Jim Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">2 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Alex Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar5.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Alex Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">3 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-danger label-sm">blocked</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar2.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">6 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Susan's avatar" src="{{URL::to('public/asset_admin/avatars/avatar3.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Susan</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">yesterday</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Phil Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar4.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Phil Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">2 days ago</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Alexa Doe's avatar" src="{{URL::to('public/asset_admin/avatars/avatar1.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Alexa Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">3 days ago</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="center">
                                            <i class="ace-icon fa fa-users fa-2x green middle"></i>

                                            &nbsp;
                                            <a href="#" class="btn btn-sm btn-white btn-info">
                                                See all members &nbsp;
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="hr hr-double hr8"></div>
                                    </div> /.#member-tab 

                                    <div id="comment-tab" class="tab-pane">
                                        <div class="comments">
                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">6 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                    <span class="orange">
                                                                        <i class="ace-icon fa fa-times bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Jennifer's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar1.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Jennifer</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="blue">15 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Joe's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar2.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Joe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="orange">22 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Rita's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar3.png')}}" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Rita</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="red">50 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr8"></div>

                                        <div class="center">
                                            <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                                            &nbsp;
                                            <a href="#" class="btn btn-sm btn-white btn-info">
                                                See all comments &nbsp;
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="hr hr-double hr8"></div>
                                    </div>
                                </div>
                            </div> /.widget-main 
                        </div> /.widget-body 
                    </div> /.widget-box 
                </div> /.col 

                <div class="col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title lighter smaller">
                                <i class="ace-icon fa fa-comment blue"></i>
                                Conversation
                            </h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <div class="dialogs">
                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="Alexa's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar1.png')}}" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span class="green">4 sec</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Alexa</a>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only ace-icon fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="John's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar.png')}}" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span class="blue">38 sec</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">John</a>
                                            </div>
                                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only ace-icon fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="Bob's Avatar" src="{{URL::to('public/asset_admin/avatars/user.jpg')}}" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span class="orange">2 min</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Bob</a>
                                                <span class="label label-info arrowed arrowed-in-right">admin</span>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only ace-icon fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="Jim's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar4.png')}}" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span class="grey">3 min</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Jim</a>
                                            </div>
                                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only ace-icon fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="Alexa's Avatar" src="{{URL::to('public/asset_admin/avatars/avatar1.png')}}" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span class="green">4 min</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Alexa</a>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only ace-icon fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form>
                                    <div class="form-actions">
                                        <div class="input-group">
                                            <input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-sm btn-info no-radius" type="button">
                                                    <i class="ace-icon fa fa-share"></i>
                                                    Send
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div> /.widget-main 
                        </div> /.widget-body 
                    </div> /.widget-box 
                </div> /.col 
            </div> /.row 

             PAGE CONTENT ENDS 
        </div> /.col 
    </div> /.row  

    <div class="page-header">
        <h1>
            Form Elements
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Common form elements and layouts
            </small>
        </h1>
    </div> /.page-header 
    <div class="row">
        <div class="col-xs-12">
             PAGE CONTENT BEGINS 
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

                    <div class="col-sm-9">
                        <input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
                        <span class="help-inline col-xs-12 col-sm-7">
                            <span class="middle">Inline help text</span>
                        </span>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

                    <div class="col-sm-9">
                        <input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
                        <span class="help-inline col-xs-12 col-sm-7">
                            <label class="middle">
                                <input class="ace" type="checkbox" id="id-disable-check" />
                                <span class="lbl"> Disable it!</span>
                            </label>
                        </span>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

                    <div class="col-sm-9">
                        <input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm" />
                        <div class="space-2"></div>

                        <div class="help-block" id="input-size-slider"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

                    <div class="col-sm-9">
                        <div class="clearfix">
                            <input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1" />
                        </div>

                        <div class="space-2"></div>

                        <div class="help-block" id="input-span-slider"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

                    <div class="col-sm-9">
                        <span class="input-icon">
                            <input type="text" id="form-field-icon-1" />
                            <i class="ace-icon fa fa-leaf blue"></i>
                        </span>

                        <span class="input-icon input-icon-right">
                            <input type="text" id="form-field-icon-2" />
                            <i class="ace-icon fa fa-leaf green"></i>
                        </span>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

                    <div class="col-sm-9">
                        <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
                        <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

                    <div class="col-sm-9">
                        <div class="inline">
                            <input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
                        </div>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="button">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>

                <div class="hr hr-24"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Text Area</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div>
                                        <label for="form-field-8">Default</label>

                                        <textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
                                    </div>

                                    <hr />

                                    <div>
                                        <label for="form-field-9">With Character Limit</label>

                                        <textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
                                    </div>

                                    <hr />

                                    <div>
                                        <label for="form-field-11">Autosize</label>

                                        <textarea id="form-field-11" class="autosize-transition form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> /.span 

                    <div class="col-xs-12 col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Masked Input</h4>

                                <span class="widget-toolbar">
                                    <a href="#" data-action="settings">
                                        <i class="ace-icon fa fa-cog"></i>
                                    </a>

                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div>
                                        <label for="form-field-mask-1">
                                            Date
                                            <small class="text-success">99/99/9999</small>
                                        </label>

                                        <div class="input-group">
                                            <input class="form-control input-mask-date" type="text" id="form-field-mask-1" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-sm btn-default" type="button">
                                                    <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                    Go!
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <hr />
                                    <div>
                                        <label for="form-field-mask-2">
                                            Phone
                                            <small class="text-warning">(999) 999-9999</small>
                                        </label>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-phone"></i>
                                            </span>

                                            <input class="form-control input-mask-phone" type="text" id="form-field-mask-2" />
                                        </div>
                                    </div>

                                    <hr />
                                    <div>
                                        <label for="form-field-mask-3">
                                            Product Key
                                            <small class="text-error">a*-999-a999</small>
                                        </label>

                                        <div class="input-group">
                                            <input class="form-control input-mask-product" type="text" id="form-field-mask-3" />
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-key"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <hr />
                                    <div>
                                        <label for="form-field-mask-4">
                                            Eye Script
                                            <small class="text-info">~9.99 ~9.99 999</small>
                                        </label>

                                        <div>
                                            <input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> /.span 

                    <div class="col-xs-12 col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Select Box</h4>

                                <span class="widget-toolbar">
                                    <a href="#" data-action="settings">
                                        <i class="ace-icon fa fa-cog"></i>
                                    </a>

                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div>
                                        <label for="form-field-select-1">Default</label>

                                        <select class="form-control" id="form-field-select-1">
                                            <option value=""></option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>

                                    <hr />
                                    <div>
                                        <label for="form-field-select-2">Multiple</label>

                                        <select class="form-control" id="form-field-select-2" multiple="multiple">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>

                                    <hr />

                                    <div>
                                        <label for="form-field-select-3">Chosen</label>
                                        <br />
                                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
                                            <option value="">  </option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>

                                    <hr />
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span class="bigger-110">Multiple</span>
                                            </div> /.span 

                                            <div class="col-sm-6">
                                                <span class="pull-right inline">
                                                    <span class="grey">style:</span>

                                                    <span class="btn-toolbar inline middle no-margin">
                                                        <span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">
                                                            <label class="btn btn-xs btn-yellow active">
                                                                1
                                                                <input type="radio" value="1" />
                                                            </label>

                                                            <label class="btn btn-xs btn-yellow">
                                                                2
                                                                <input type="radio" value="2" />
                                                            </label>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div> /.span 
                                        </div>

                                        <div class="space-2"></div>

                                        <select multiple="" class="chosen-select form-control" id="form-field-select-4" data-placeholder="Choose a State...">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> /.span 
                </div> /.row 

                <div class="space-24"></div>

                <h3 class="header smaller lighter blue">
                    Checkboxes & Radio
                    <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
                </h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="control-group">
                            <label class="control-label bolder blue">Checkbox</label>

                            <div class="checkbox">
                                <label>
                                    <input name="form-field-checkbox" type="checkbox" class="ace" />
                                    <span class="lbl"> choice 1</span>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input name="form-field-checkbox" type="checkbox" class="ace" />
                                    <span class="lbl"> choice 2</span>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
                                    <span class="lbl"> choice 3</span>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label class="block">
                                    <input name="form-field-checkbox" disabled="" type="checkbox" class="ace" />
                                    <span class="lbl"> disabled</span>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label class="block">
                                    <input name="form-field-checkbox" type="checkbox" class="ace input-lg" />
                                    <span class="lbl bigger-120"> large checkbox</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="control-group">
                            <label class="control-label bolder blue">Radio</label>

                            <div class="radio">
                                <label>
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl"> radio option 1</span>
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl"> radio option 2</span>
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl"> radio option 3</span>
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input disabled="" name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl"> disabled</span>
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input name="form-field-radio" type="radio" class="ace input-lg" />
                                    <span class="lbl bigger-120"> large radio</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> /.row 

                <hr />
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

                    <div class="controls col-xs-12 col-sm-9">
                        <div class="row">
                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch" type="checkbox" />
                                    <span class="lbl" data-lbl="CUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOM"></span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch btn-rotate" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>

                            <div class="col-xs-3">
                                <label>
                                    <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Custom File Input</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="file" id="id-input-file-2" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input multiple="" type="file" id="id-input-file-3" />
                                        </div>
                                    </div>

                                    <label>
                                        <input type="checkbox" name="file-format" id="id-file-format" class="ace" />
                                        <span class="lbl"> Allow only images</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">jQuery UI Sliders</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="row">
                                        <div class="col-xs-3 col-md-2">
                                            <div id="slider-range"></div>
                                        </div>

                                        <div class="col-xs-9 col-md-10">
                                            <div id="slider-eq">
                                                <span class="ui-slider-green ui-slider-small">77</span>
                                                <span class="ui-slider-red">55</span>
                                                <span class="ui-slider-purple" data-rel="tooltip" title="Disabled!">33</span>
                                                <span class="ui-slider-simple ui-slider-orange">40</span>
                                                <span class="ui-slider-simple ui-slider-dark">88</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Spinners</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <input type="text" id="spinner1" />
                                    <div class="space-6"></div>

                                    <input type="text" class="input-sm" id="spinner2" />
                                    <div class="space-6"></div>

                                    <input type="text" id="spinner3" />
                                    <div class="space-6"></div>

                                    <input type="text" class="input-lg" id="spinner4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">Date Picker</h4>

                                <span class="widget-toolbar">
                                    <a href="#" data-action="settings">
                                        <i class="ace-icon fa fa-cog"></i>
                                    </a>

                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <label for="id-date-picker-1">Date Picker</label>

                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar bigger-110"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space space-8"></div>
                                    <label>Range Picker</label>

                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-daterange input-group">
                                                <input type="text" class="input-sm form-control" name="start" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-exchange"></i>
                                                </span>

                                                <input type="text" class="input-sm form-control" name="end" />
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <label for="id-date-range-picker-1">Date Range Picker</label>

                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar bigger-110"></i>
                                                </span>

                                                <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <label for="timepicker1">Time Picker</label>

                                    <div class="input-group bootstrap-timepicker">
                                        <input id="timepicker1" type="text" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o bigger-110"></i>
                                        </span>
                                    </div>

                                    <hr />
                                    <label for="date-timepicker1">Date/Time Picker</label>

                                    <div class="input-group">
                                        <input id="date-timepicker1" type="text" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o bigger-110"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">
                                    <i class="ace-icon fa fa-tint"></i>
                                    Color Picker
                                </h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="clearfix">
                                        <label for="colorpicker1">Color Picker</label>
                                    </div>

                                    <div class="control-group">
                                        <div class="bootstrap-colorpicker">
                                            <input id="colorpicker1" type="text" class="input-small" />
                                        </div>
                                    </div>

                                    <hr />

                                    <div>
                                        <label for="simple-colorpicker-1">Custom Color Picker</label>

                                        <select id="simple-colorpicker-1" class="hide">
                                            <option value="#ac725e">#ac725e</option>
                                            <option value="#d06b64">#d06b64</option>
                                            <option value="#f83a22">#f83a22</option>
                                            <option value="#fa573c">#fa573c</option>
                                            <option value="#ff7537">#ff7537</option>
                                            <option value="#ffad46" selected="">#ffad46</option>
                                            <option value="#42d692">#42d692</option>
                                            <option value="#16a765">#16a765</option>
                                            <option value="#7bd148">#7bd148</option>
                                            <option value="#b3dc6c">#b3dc6c</option>
                                            <option value="#fbe983">#fbe983</option>
                                            <option value="#fad165">#fad165</option>
                                            <option value="#92e1c0">#92e1c0</option>
                                            <option value="#9fe1e7">#9fe1e7</option>
                                            <option value="#9fc6e7">#9fc6e7</option>
                                            <option value="#4986e7">#4986e7</option>
                                            <option value="#9a9cff">#9a9cff</option>
                                            <option value="#b99aff">#b99aff</option>
                                            <option value="#c2c2c2">#c2c2c2</option>
                                            <option value="#cabdbf">#cabdbf</option>
                                            <option value="#cca6ac">#cca6ac</option>
                                            <option value="#f691b2">#f691b2</option>
                                            <option value="#cd74e6">#cd74e6</option>
                                            <option value="#a47ae2">#a47ae2</option>
                                            <option value="#555">#555</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget-box">
                            <div class="widget-header">
                                <h4 class="widget-title">
                                    <i class="ace-icon fa fa-tachometer"></i>
                                    Knob Input
                                </h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="control-group">
                                        <div class="row">
                                            <div class="col-xs-6 center">
                                                <div class="knob-container inline">
                                                    <input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />
                                                </div>
                                            </div>

                                            <div class="col-xs-6  center">
                                                <div class="knob-container inline">
                                                    <input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 center">
                                                <div class="knob-container inline">
                                                    <input type="text" class="input-small knob" value="1" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#B8877F" data-angleoffset="90" data-cursor="true" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="hr hr-18 dotted hr-double"></div>

            <h4 class="pink">
                <i class="ace-icon fa fa-hand-o-right green"></i>
                <a href="#modal-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
            </h4>

            <div class="hr hr-18 dotted hr-double"></div>
            <h4 class="header green">Form Layouts</h4>

            <div class="row">
                <div class="col-sm-5">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">Default</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <form>
                                     <legend>Form</legend> 
                                    <fieldset>
                                        <label>Label name</label>

                                        <input type="text" placeholder="Type something&hellip;" />
                                        <span class="help-block">Example block-level help text here.</span>

                                        <label class="pull-right">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"> check me out</span>
                                        </label>
                                    </fieldset>

                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-sm btn-success">
                                            Submit
                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">Inline Forms</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline">
                                    <input type="text" class="input-small" placeholder="Username" />
                                    <input type="password" class="input-small" placeholder="Password" />
                                    <label class="inline">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"> remember me</span>
                                    </label>

                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="ace-icon fa fa-key bigger-110"></i>Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="space-6"></div>

                    <div class="widget-box">
                        <div class="widget-header widget-header-small">
                            <h5 class="widget-title lighter">Search Form</h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-search">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="ace-icon fa fa-check"></i>
                                                </span>

                                                <input type="text" class="form-control search-query" placeholder="Type your query" />
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-purple btn-sm">
                                                        <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                        Search
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">Please fill the following form fields</h4>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <div class="space"></div>

                                    <input type="file" />
                                </div>

                                <div class="col-xs-12 col-sm-7">
                                    <div class="form-group">
                                        <label for="form-field-select-3">Location</label>

                                        <div>
                                            <select class="chosen-select" data-placeholder="Choose a Country...">
                                                <option value="">&nbsp;</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label for="form-field-username">Username</label>

                                        <div>
                                            <input type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label for="form-field-first">Name</label>

                                        <div>
                                            <input type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                                            <input type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-sm" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Cancel
                            </button>

                            <button class="btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-check"></i>
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div> PAGE CONTENT ENDS 
        </div> /.col 
    </div> /.row 

    <div class="page-header">
        <h1>
            Tables
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Static &amp; Dynamic Tables
            </small>
        </h1>
    </div> /.page-header 
    <div class="row">
        <div class="col-xs-12">
             PAGE CONTENT BEGINS 
            <div class="row">
                <div class="col-xs-12">
                    <table id="simple-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Domain</th>
                                <th>Price</th>
                                <th class="hidden-480">Clicks</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Update
                                </th>
                                <th class="hidden-480">Status</th>

                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">ace.com</a>
                                </td>
                                <td>$45</td>
                                <td class="hidden-480">3,330</td>
                                <td>Feb 12</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">Expiring</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">base.com</a>
                                </td>
                                <td>$35</td>
                                <td class="hidden-480">2,595</td>
                                <td>Feb 18</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-success">Registered</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">max.com</a>
                                </td>
                                <td>$60</td>
                                <td class="hidden-480">4,400</td>
                                <td>Mar 11</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">Expiring</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">best.com</a>
                                </td>
                                <td>$75</td>
                                <td class="hidden-480">6,500</td>
                                <td>Apr 03</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">pro.com</a>
                                </td>
                                <td>$55</td>
                                <td class="hidden-480">4,250</td>
                                <td>Jan 21</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-success">Registered</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> /.span 
            </div> /.row 

            <div class="hr hr-18 dotted hr-double"></div>

            <h4 class="pink">
                <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
            </h4>

            <div class="hr hr-18 dotted hr-double"></div>

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">jQuery dataTables</h3>

                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <div>
                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
                                    <th>Domain</th>
                                    <th>Price</th>
                                    <th class="hidden-480">Clicks</th>

                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Update
                                    </th>
                                    <th class="hidden-480">Status</th>

                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">app.com</a>
                                    </td>
                                    <td>$45</td>
                                    <td class="hidden-480">3,330</td>
                                    <td>Feb 12</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">base.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td class="hidden-480">2,595</td>
                                    <td>Feb 18</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">max.com</a>
                                    </td>
                                    <td>$60</td>
                                    <td class="hidden-480">4,400</td>
                                    <td>Mar 11</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">best.com</a>
                                    </td>
                                    <td>$75</td>
                                    <td class="hidden-480">6,500</td>
                                    <td>Apr 03</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">pro.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td class="hidden-480">4,250</td>
                                    <td>Jan 21</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">team.com</a>
                                    </td>
                                    <td>$40</td>
                                    <td class="hidden-480">3,200</td>
                                    <td>Feb 09</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">up.com</a>
                                    </td>
                                    <td>$95</td>
                                    <td class="hidden-480">8,520</td>
                                    <td>Feb 22</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">view.com</a>
                                    </td>
                                    <td>$45</td>
                                    <td class="hidden-480">4,100</td>
                                    <td>Mar 12</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">nice.com</a>
                                    </td>
                                    <td>$38</td>
                                    <td class="hidden-480">3,940</td>
                                    <td>Feb 12</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">fine.com</a>
                                    </td>
                                    <td>$25</td>
                                    <td class="hidden-480">2,983</td>
                                    <td>Apr 01</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">good.com</a>
                                    </td>
                                    <td>$50</td>
                                    <td class="hidden-480">6,500</td>
                                    <td>Feb 02</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">great.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td class="hidden-480">6,400</td>
                                    <td>Feb 24</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">shine.com</a>
                                    </td>
                                    <td>$25</td>
                                    <td class="hidden-480">2,200</td>
                                    <td>Apr 01</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">rise.com</a>
                                    </td>
                                    <td>$42</td>
                                    <td class="hidden-480">3,900</td>
                                    <td>Feb 01</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">above.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td class="hidden-480">3,420</td>
                                    <td>Mar 12</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">share.com</a>
                                    </td>
                                    <td>$30</td>
                                    <td class="hidden-480">3,200</td>
                                    <td>Feb 11</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">fair.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td class="hidden-480">3,900</td>
                                    <td>Mar 26</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">year.com</a>
                                    </td>
                                    <td>$48</td>
                                    <td class="hidden-480">3,990</td>
                                    <td>Feb 15</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">day.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td class="hidden-480">5,600</td>
                                    <td>Jan 29</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">light.com</a>
                                    </td>
                                    <td>$40</td>
                                    <td class="hidden-480">3,100</td>
                                    <td>Feb 17</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">sight.com</a>
                                    </td>
                                    <td>$58</td>
                                    <td class="hidden-480">6,100</td>
                                    <td>Feb 19</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">right.com</a>
                                    </td>
                                    <td>$50</td>
                                    <td class="hidden-480">4,400</td>
                                    <td>Apr 01</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">once.com</a>
                                    </td>
                                    <td>$20</td>
                                    <td class="hidden-480">1,400</td>
                                    <td>Apr 04</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="modal-table" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                Results for "Latest Registered Domains
                            </div>
                        </div>

                        <div class="modal-body no-padding">
                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                <thead>
                                    <tr>
                                        <th>Domain</th>
                                        <th>Price</th>
                                        <th>Clicks</th>

                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                            Update
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">ace.com</a>
                                        </td>
                                        <td>$45</td>
                                        <td>3,330</td>
                                        <td>Feb 12</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">base.com</a>
                                        </td>
                                        <td>$35</td>
                                        <td>2,595</td>
                                        <td>Feb 18</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">max.com</a>
                                        </td>
                                        <td>$60</td>
                                        <td>4,400</td>
                                        <td>Mar 11</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">best.com</a>
                                        </td>
                                        <td>$75</td>
                                        <td>6,500</td>
                                        <td>Apr 03</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">pro.com</a>
                                        </td>
                                        <td>$55</td>
                                        <td>4,250</td>
                                        <td>Jan 21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal-footer no-margin-top">
                            <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Close
                            </button>

                            <ul class="pagination pull-right no-margin">
                                <li class="prev disabled">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-left"></i>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="#">1</a>
                                </li>

                                <li>
                                    <a href="#">2</a>
                                </li>

                                <li>
                                    <a href="#">3</a>
                                </li>

                                <li class="next">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> /.modal-content 
                </div> /.modal-dialog 
            </div> PAGE CONTENT ENDS 
        </div> /.col 
    </div> /.row 
</div> /.page-content -->
@endsection