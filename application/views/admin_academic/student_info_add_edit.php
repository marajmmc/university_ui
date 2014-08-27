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
                        <label for="text1" class="control-label col-lg-4">First Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="teacher_first_name" name="teacher_first_name" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Last Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="teacher_last_name" name="teacher_last_name" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Nick Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="teacher_nick_name" name="teacher_nick_name" placeholder="Nick Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Full Name (Bangla)</label>
                        <div class="col-lg-8">
                            <input type="text" id="teacher_full_name_bangla" name="teacher_full_name_bangla" placeholder="Full Name (Bangla)" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Father/ Husband Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="father_husband_name" name="father_husband_name" placeholder="Father/ Husband Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Mother Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="mother_name" name="mother_name" placeholder="Mother Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Birth Date</label>
                        <div class="col-lg-8">
                            <input type="text" id="dp1" name="birth_date" placeholder="Birth Date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Gender</label>
                        <div class="col-lg-8">
                            <input type="radio" id="dp1" name="birth_date" placeholder="Birth Date" class="" checked="">Male
                            <input type="radio" id="dp1" name="birth_date" placeholder="Birth Date" class="">Female
<!--                            <select class="form-control" name="gender" id="gender" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="islam">Male</option>
                                <option value="hindu">Female</option>
                            </select>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Religion</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="sub_status" name="religion" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="christian">Christian</option>
                                <option value="buddhist">Buddhist</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Blood Group</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="blood_group" name="blood_group" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">National ID</label>
                        <div class="col-lg-8">
                            <input type="text" id="national_id" name="national_id" placeholder="National ID" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Birth Place</label>
                        <div class="col-lg-8">
                            <input type="text" id="birth_place" name="birth_place" placeholder="Birth Place" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Country</label>
                        <div class="col-lg-8">
                            <select data-placeholder="Choose a Country..." class="form-control chzn-select" tabindex="-1">
                                <option value=""></option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                                <option>American Samoa</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Anguilla</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Aruba</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>Bahamas</option>
                                <option>Bahrain</option>
                                <option selected="selected">Bangladesh</option>
                                <option>Barbados</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Department</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="designation" name="designation" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="DG-00001">CSE</option>
                                <option value="DG-00002">EEE</option>
                                <option value="DG-00003">Civil</option>
                                <option value="DG-00004">Electronics</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dp1" class="control-label col-lg-4">Admission Date</label>
                        <div class="col-lg-8">
                            <input type="text" data-date-format="mm/dd/yy" id="dp2" name="joining_date" placeholder="Admission Date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dp1" class="control-label col-lg-4">Student Photo</label>
                        <div class="col-lg-8">
                            <input id="teacher_pic" class="uniform" type="file" name="teacher_pic" size="21" style="opacity: 0;">

                        </div>
                    </div>

                    <header>
                        <div class="icons">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h5>Contact Information</h5>
                    </header><br/>
                    <div class="form-group">
                        <label for="dp1" class="control-label col-lg-4">Present Address</label>
                        <div class="col-lg-8">
                            <textarea id="present_address" class="textarea autogrow required" name="present_address" cols="102"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dp1" class="control-label col-lg-4">Permanent Address</label>
                        <div class="col-lg-8">
                            <textarea id="permanent_address" class="textarea autogrow required" name="permanent_address" cols="102"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Phone</label>
                        <div class="col-lg-8">
                            <input type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Email</label>
                        <div class="col-lg-8">
                            <input type="text" id="national_id" name="email" placeholder="Email ID" class="form-control">
                        </div>
                    </div>

                    <header>
                        <div class="icons">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h5>Highest Educational Information</h5>
                    </header><br/>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Degree Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="degree_name" name="degree_name" placeholder="Degree Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Division/ GPA</label>
                        <div class="col-lg-8">
                            <input type="text" id="division_gpa" name="division_gpa" placeholder="Division/ GPA" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Obtain Year</label>
                        <div class="col-lg-8">
                            <input type="text" id="obtain_year" name="obtain_year" placeholder="Obtain Year" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Board/ University</label>
                        <div class="col-lg-8">
                            <input type="text" id="board_uni" name="board_uni" placeholder="Board/ University" class="form-control">
                        </div>
                    </div>
                    <header>
                        <div class="icons">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h5>Other Degree</h5>
                    </header><br/>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Degree Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="degree_name_other" name="degree_name_other" placeholder="Degree Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Division/ GPA</label>
                        <div class="col-lg-8">
                            <input type="text" id="division_gpa_other" name="division_gpa_other" placeholder="Division/ GPA" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Obtain Year</label>
                        <div class="col-lg-8">
                            <input type="text" id="obtain_year_other" name="obtain_year_other" placeholder="Obtain Year" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Board/ University</label>
                        <div class="col-lg-8">
                            <input type="text" id="board_uni_other" name="board_uni_other" placeholder="Board/ University" class="form-control">
                        </div>
                    </div>
                    <header>
                        <div class="icons">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h5>Experience Information</h5>
                    </header><br/>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Institute/ Company Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="institute_name" name="institute_name" placeholder="Institute/ Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Position</label>
                        <div class="col-lg-8">
                            <input type="text" id="division_gpa_other" name="division_gpa_other" placeholder="Division/ GPA" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Year of Experience</label>
                        <div class="col-lg-8">
                            <input type="text" id="obtain_year_other" name="obtain_year_other" placeholder="Obtain Year" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Office Address</label>
                        <div class="col-lg-8">
                            <input type="text" id="board_uni_other" name="board_uni_other" placeholder="Board/ University" class="form-control">
                        </div>
                    </div>

                    <header>
                        <div class="icons">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h5>Teacher Resume</h5>
                    </header><br/>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Resume Upload (.pdf only)</label>
                        <div class="col-lg-8">
                            <input id="teacher_resume" class="uniform" type="file" name="teacher_resume" >
                        </div>
                    </div><!-- /.form-group -->
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