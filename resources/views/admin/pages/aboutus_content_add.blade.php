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
        <li class="active">About Us Content</li>
        <li><a href="{{URL::to('add-aboutus-content')}}">Add About Us Content</a></li>
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
                            <h5 class="widget-title">Add About Us Content ...</h5>
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
                                    {!! Form::open(['url' => '/save-aboutus-content','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Description</label>
                                            <div class="col-md-8">
                                                <textarea name='aboutus_description' class="form-control" id="form-field-8" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Mission Description</label>
                                            <div class="col-md-8">
                                                <textarea name='mission_description' class="form-control" id="form-field-8" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Mission Image - <b>(768x450)</b></label>
                                            <div class="col-md-8">
                                                <input name="p_image1" type="file" id="id-input-file-2" required/>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Plan Description</label>
                                            <div class="col-md-8">
                                                <textarea name='plan_description' class="form-control" id="form-field-8" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Plan Image - <b>(768x450)</b></label>
                                            <div class="col-md-8">
                                                <input name="p_image2" type="file" id="id-input-file-2" required/>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Vission Description</label>
                                            <div class="col-md-8">
                                                <textarea name='vission_description' class="form-control" id="form-field-8" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label class="col-md-4" for="form-field-1">Vission Image - <b>(768x450)</b></label>
                                            <div class="col-md-8">
                                                <input name="p_image3" type="file" id="id-input-file-2" required/>
                                            </div>
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