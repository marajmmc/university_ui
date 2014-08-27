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
                        <label for="text1" class="control-label col-lg-4">Teacher Name</label>
                        <div class="col-lg-8">
                            <select name="teacher_name" id="teacher_name" data-placeholder="Choose a Teacher..." class="form-control chzn-select" tabindex="-1">
                                <option>--Select--</option>
                                <option>Imran Mahmud</option>
                                <option>Farid Ahmmad</option>
                                <option>Mohammed Yasir</option>
                                <option>Mostafizur Rahman</option>
                                <option>Imran Mahmud</option>
                                <option>Farid Ahmmad</option>
                                <option>Mohammed Yasir</option>
                                <option>Mostafizur Rahman</option>
                                <option>Imran Mahmud</option>
                                <option>Farid Ahmmad</option>
                                <option>Mohammed Yasir</option>
                                <option>Mostafizur Rahman</option>
                            </select>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Department</label>
                        <div class="col-lg-8">
                            <select name="department_name" id="department_name" data-placeholder="Choose a Department..." class="form-control chzn-select" tabindex="-1">
                                <option>--Select--</option>
                                <option>Computer Science & Engineering</option>
                                <option>Electrical & Electronics Engineering</option>
                                <option>Civil Engineering</option>
                                <option>Computer Science & Engineering</option>
                                <option>Electrical & Electronics Engineering</option>
                                <option>Civil Engineering</option>
                                <option>Computer Science & Engineering</option>
                                <option>Electrical & Electronics Engineering</option>
                                <option>Civil Engineering</option>
                                <option>Computer Science & Engineering</option>
                                <option>Electrical & Electronics Engineering</option>
                                <option>Civil Engineering</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Course Name</label>
                        <div class="col-lg-8">
                            <select multiple="" style="height: 150px;" class="form-control" id="faculty_name" name="faculty_name" data-original-title="Faculty Name" data-placement="top">
                                <!--<option>--Select--</option>-->
                                <option>Database Design & Development</option>
                                <option>Dynamics</option>
                                <option>Building Technology</option>
                                <option>System Analysis & Design</option>
                                <option>Managing Business Projects</option>
                                <option>Algorithm & Data Analysis</option>
                            </select>
                            <b>Note:</b> if you want to select multiple options please click <b>Ctrl+Select</b>.
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