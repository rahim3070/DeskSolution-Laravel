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
        <li><a href="{{URL::to('manage-contactus-inbox')}}">Manage Inbox</a></li>
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
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12 widget-container-col">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h5 class="widget-title">Manage Inbox ...</h5>
                            <div class="widget-toolbar">
                                <a href="#" data-action="fullscreen" class="orange2"><i class="ace-icon fa fa-expand"></i></a>
                                <a href="#" data-action="reload"><i class="ace-icon fa fa-refresh"></i></a>
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                                <a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center hidden">
                                                            <label class="pos-rel">
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </th>
                                                        <th class="hidden">Inbox ID</th>
                                                        <th>Name</th>
                                                        <th class="hidden-480">Email Address</th>
                                                        <th class="hidden-480">Subject</th>
                                                        <th class="hidden-480">Message</th>
                                                        <th class="hidden-480">Seen</th>
                                                        <th class="hidden-480">Reply</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    foreach ($all_inbox_info as $v_info) {
                                                        ?>
                                                        <tr>
                                                            <td class="center hidden"><label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label></td>
                                                            <td class="hidden"><?php echo $v_info->inbox_id ?></td>
                                                            <td><?php echo $v_info->name ?></td>
                                                            <td class="hidden-480"><?php echo $v_info->email_address ?></td>
                                                            <td class="hidden-480"><?php echo $v_info->subject ?></td>
                                                            <td class="hidden-480"><?php echo $v_info->message ?></td>
                                                            <td class="hidden-480">
                                                                <?php
                                                                if ($v_info->seen == 1) {
                                                                    ?>
                                                                    <span class="label label-success arrowed">Seen</span>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <span class="label label-danger arrowed-in">Unseen</span>
                                                                <?php } ?>
                                                            </td>
                                                            <td class="hidden-480">                                                                
                                                                <?php
                                                                if ($v_info->reply == 1) {
                                                                    ?>
                                                                    <span class="label label-success arrowed-in">Replied</span>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <span class="label label-danger arrowed"> Not Replied</span>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                    <?php
                                                                    if ($v_info->seen == 1) {
                                                                        ?>
                                                                        <a class="blue" href="{{URL::to('/unseen-contactus-inbox/'.$v_info->inbox_id)}}"><i class="ace-icon fa fa-envelope-o bigger-130"></i></a>
                                                                    <?php } else {
                                                                        ?>
                                                                        <a class="blue" href="{{URL::to('/seen-contactus-inbox/'.$v_info->inbox_id)}}"><i class="ace-icon fa fa-envelope bigger-130"></i></a>
                                                                    <?php } ?>

                                                                    <?php
                                                                    $admin_level = Session::get('admin_level');

                                                                    if ($admin_level == 1) {
                                                                        ?>
                                                                        <?php
                                                                        if ($v_info->reply == 1) {
                                                                            ?>
                                                                            <a class="blue" href="{{URL::to('/notreplied-contactus-inbox/'.$v_info->inbox_id)}}"><i class="ace-icon fa fa-check-square-o bigger-130"></i></a>
                                                                        <?php } else {
                                                                            ?>
                                                                            <a class="red" href="{{URL::to('/replied-contactus-inbox/'.$v_info->inbox_id)}}"><i class="ace-icon fa fa-square-o bigger-130"></i></a>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="hidden-md hidden-lg">
                                                                    <div class="inline pos-rel">
                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                            <?php
                                                                            if ($v_info->seen == 1) {
                                                                                ?>
                                                                                <li><a href="{{URL::to('/unseen-contactus-inbox/'.$v_info->inbox_id)}}" class="tooltip-info" data-rel="tooltip" title="Unseen"><span class="blue"><i class="ace-icon fa fa-envelope-o bigger-120"></i></span></a></li>
                                                                            <?php } else {
                                                                                ?>
                                                                                <li><a href="{{URL::to('/seen-contactus-inbox/'.$v_info->inbox_id)}}" class="tooltip-info" data-rel="tooltip" title="Seen"><span class="blue"><i class="ace-icon fa fa-envelope bigger-120"></i></span></a></li>
                                                                            <?php } ?>

                                                                            <?php
                                                                            $admin_level = Session::get('admin_level');

                                                                            if ($admin_level == 1) {
                                                                                ?>
                                                                                <?php
                                                                                if ($v_info->reply == 1) {
                                                                                    ?>
                                                                                    <li><a href="{{URL::to('/notreplied-contactus-inbox/'.$v_info->inbox_id)}}" class="tooltip-error" data-rel="tooltip" title="No Reply"><span class="red"><i class="ace-icon fa fa-check-square-o bigger-120"></i></span></a></li>
                                                                                <?php } else {
                                                                                    ?>
                                                                                    <li><a href="{{URL::to('/replied-contactus-inbox/'.$v_info->inbox_id)}}" class="tooltip-error" data-rel="tooltip" title="Reply"><span class="red"><i class="ace-icon fa fa-square-o bigger-120"></i></span></a></li>
                                                                                            <?php } ?>
                                                                                        <?php } ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>                                                            
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.span -->
            </div>
            <!-- /.row -->
            <!-- PAGE CONTENT ENDS -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection