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
        <li class="active">Home Content</li>
        <li><a href="{{URL::to('add-team-content')}}">Add Team Content</a></li>
    </ul>
    <!-- /.breadcrumb -->
    <!--        <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div>
             /.nav-search -->
</div>
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12 widget-container-col">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h5 class="widget-title">Add Team Content ...</h5>
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
                                    <!--'enctype'=>'multipart/form-data' -- For Upload Image-->
                                    {!! Form::open(['url' => '/save-team-content','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Name</label>
                                            <div class="col-md-8">
                                                <input name='name' type="text" id="form-field-1" placeholder="Name" class="col-xs-12" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Designation</label>
                                            <div class="col-md-8">
                                                <textarea name='designation' class="form-control" id="form-field-8" placeholder="Designation" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">

                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Image - <b>(400x400)</b></label>
                                            <div class="col-md-8">
                                                <input name="image" type="file" id="id-input-file-2" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                        </div>                                    
                                    </div>
                                    <div class="col-xs-12">
                                        <br>
                                        <div class="col-lg-4 col-sm-4">
                                            <!--<button class="btn btn-info" type="button"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>-->
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <button class="btn btn-info" type="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <!--<button class="btn btn-info" type="button"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>-->
                                            <h6 style="color:green">
                                                <?php
                                                $message = Session::get('message');

                                                if ($message) {
                                                    echo $message;
                                                    Session::put('message', null);
                                                }
                                                ?>
                                            </h6>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
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