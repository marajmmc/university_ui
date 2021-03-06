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
                    <div class="row">

                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Semester Name</label></div>
                        <div class="col-lg-3"><label for="pass1" class="control-label col-lg-12">Department</label> </div>
                        <div class="col-lg-3"><label for="pass1" class="control-label col-lg-12">Batch</label> </div>
                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Subject Code</label></div>

                    </div>

                    <div class="row">



                        <div class="col-lg-3">
                            <input type="text" id="semester_name" name="semester_name" placeholder="Semester Name" class="form-control">
                        </div>

                        <div class="col-lg-3">
                            <select class="form-control" id="department_name" name="department_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Computer Science & Engineering</option>
                                <option name="eee" value="eee">Electrical & Electronics Engineering</option>
                                <option name="ce" value="ce">Civil Engineering</option>
                                <option name="ce" value="ce">Bachelor of Business Administration</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="department_name" name="department_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">CSE-23rd</option>
                                <option name="eee" value="eee">EEE-22nd</option>
                                <option name="ce" value="ce">CE-7th</option>
                                <option name="ce" value="ce">BBA-20th</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <input class="form-control" type="text" name="" id=""/>
                        </div>


                    </div>
                    <div class="pull-right" style="margin: 10px 0px 10px 0px !important;">
                        <a id="cp4" class="btn btn-danger" data-color="rgb(255, 255, 255)" data-color-format="hex" href="#">Add Row</a>
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