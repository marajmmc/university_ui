<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons">
                    <i class="fa fa-edit"></i>
                </div>
                <h5><?php echo $featuretitle; ?></h5>

                <!-- .toolbar -->
                <div class="toolbar">
                    <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                            <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                            <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                            <i class="fa fa-times"></i>
                        </a> 
                    </nav>
                </div><!-- /.toolbar -->
            </header>
            <div id="div-1" class="body">
                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Period Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="semester_name" name="semester_name" placeholder="Period Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Start Time</label>
                        <div class="col-lg-8">
                            <div class="input-group bootstrap-timepicker">
                                <input class="form-control timepicker-default" type="text">
                                <span class="input-group-addon add-on">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">End Time</label>
                        <div class="col-lg-8">
                            <div class="input-group bootstrap-timepicker">
                                <input class="form-control timepicker-default" type="text">
                                <span class="input-group-addon add-on">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Status</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="status" name="status" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="Active" selected="">Active</option>
                                <option value="In-Active">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-left" data-original-title="" title="">Back</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-right" data-original-title="" title="">Save</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        formGeneral();
    });
</script>