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

                        <div class="col-lg-4"><label for="text1" class="control-label col-lg-12">Department</label></div>
                        <div class="col-lg-4"><label for="pass1" class="control-label col-lg-12">Semester</label> </div>
                        <div class="col-lg-4"><label for="text1" class="control-label col-lg-12">Batch</label></div>


                    </div>

                    <div class="row">

                        <div class="col-lg-4">
                            <select class="form-control" id="department_name" name="department_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Computer Science & Engineering</option>
                                <option name="eee" value="eee">Electrical & Electronics Engineering</option>
                                <option name="ce" value="ce">Civil Engineering</option>
                                <option name="ce" value="ce">Bachelor of Business Administration</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" id="semester_name" name="semester_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Summer</option>
                                <option name="eee" value="eee">Fall</option>
                                <option name="ce" value="ce">Spring</option>
                                <option name="ce" value="ce">Autumn</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <select class="form-control" id="batch_name" name="batch_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">20th</option>
                                <option name="eee" value="eee">21st</option>
                                <option name="ce" value="ce">22nd</option>
                                <option name="ce" value="ce">23rd</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="text1" class="control-label col-lg-12">Day</label>
                            <select class="form-control" id="subject_name" name="subject_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Day 1</option>
                                <option name="eee" value="eee">Day 2</option>
                                <option name="ce" value="ce">Day 3</option>
                                <option name="ce" value="ce">Day 4</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <div class="pull-left" style="margin: 25px 0px 10px 0px !important;">
                                <a id="cp4" class="btn btn-danger" data-color="rgb(255, 255, 255)" data-color-format="hex" href="#">Add Row</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
                    </div>

                    <div class="row">

                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Teacher</label></div>
                        <div class="col-lg-3"><label for="pass1" class="control-label col-lg-12">Subject</label> </div>
                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Period</label></div>
                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Room</label></div>


                    </div>

                    <div class="row">

                        <div class="col-lg-3">
                            <select class="form-control" id="department_name" name="department_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Imran Mahmud</option>
                                <option name="eee" value="eee">Iftekharul Islam</option>
                                <option name="ce" value="ce">Shawon Chowdhury</option>
                                <option name="ce" value="ce">Mofizul Islam</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="semester_name" name="semester_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">CSE-101</option>
                                <option name="eee" value="eee">CE-109</option>
                                <option name="ce" value="ce">EEE-105</option>
                                <option name="ce" value="ce">PHRM-112</option>
                                <option name="ce" value="ce">CE-110</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <select class="form-control" id="batch_name" name="batch_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">8:30 AM ~ 9:50 AM</option>
                                <option name="eee" value="eee">10:00 AM ~ 11:20 AM</option>
                                <option name="ce" value="ce">11:30 AM ~ 12:50 PM</option>
                                <option name="ce" value="ce">2:00 PM ~ 3:20 PM</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="batch_name" name="batch_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">EXT-101</option>
                                <option name="eee" value="eee">EXT-103</option>
                                <option name="ce" value="ce">AD-203</option>
                                <option name="ce" value="ce">AD-303</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2 pull-right"><label for="text1" class="control-label col-lg-6"><a href="#">Add More</a></label></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
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