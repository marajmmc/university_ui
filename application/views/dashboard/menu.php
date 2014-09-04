<html>
    <head>
        <!--/////////////////////////     start top menu css, js file link ///////////////////////-->

        <!--[if lte IE 8]>
        <script src="js/menu/html5shiv.js"></script>
        <link rel="stylesheet" href="css/menu/ie8.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/menu/blue.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/menu/fa.min.css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>js/menu/html5shiv.js"></script> 
        <!--/////////////////////////     end top menu css, js file link ///////////////////////-->

        <meta charset="UTF-8">
    </head>
    <ul id="menu" class="">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <!--        <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-dashboard"></i>
                        <span class="link-title">Control Panel</span> 
                        <span class="fa arrow"></span> 
                    </a> 
                    <ul>
                        <li class="">
                            <a href="<?php echo base_url() . "super_admin/control_panel/module/list"; ?>">
                                <i class="fa fa-angle-right"></i>&nbsp; Module
                            </a> 
                        </li>
                        <li class="">
                            <a href="<?php echo base_url() . "super_admin/control_panel/user_group/list"; ?>">
                                <i class="fa fa-angle-right"></i>&nbsp;User Group
                            </a> 
                        </li>
                    </ul>
                </li>
                <li class="nav-divider"></li>-->
        <?php
        if ($this->session->userdata('user_type') == "Admin") {
            ?>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Academic
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_dipartment/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Department</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_batch/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Batch</a> 
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_subject/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Subject</a> 
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>&nbsp;Semester</a> 
                        <ul>
                            <li><a href="<?php echo base_url() ?>admin/academic_semester/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;Semester Info</a> </li>
    <!--                            <li><a href="<?php echo base_url() ?>admin/academic_semester_create/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;Create Semester</a> </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_teacher/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Teacher</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_assign_teacher/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Assign Subject to Teacher</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/academic_semester_create/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Assign Subject to Student</a> 
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Routine
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/routine_period/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Period Setup</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/routine_create/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Routine Setup</a> 
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Examination
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_term_setup/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Term Setup</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_configuration/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Exam Configuration</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_mark/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Exam Mark</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_marking_criteria/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Marking Criteria</a> 
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Student
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/student_profile_info/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Registration</a> 
                    </li>
                    <!--                    <li>
                                            <a href="<?php echo base_url() ?>admin/student_registration/list">
                                                <i class="fa fa-angle-right"></i>&nbsp;Registration</a> 
                                        </li>-->
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/notice_board">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Notice Board
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
            </li>
            <?php
        } else if ($this->session->userdata('user_type') == "Student") {
            ?>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Routine
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>dashboard">
                            <i class="fa fa-angle-right"></i>&nbsp;Routine View</a> 
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Communication
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>

                    <li>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>&nbsp;Student</a> 
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>admin/comm_student_file_download/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;File Download</a> 
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>admin/comm_student_message_view/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;Message View</a> 
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Student
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/student_profile_info/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Profile Info</a> 
                    </li>
                    <!--                    <li>
                                            <a href="<?php echo base_url() ?>admin/student_registration/list">
                                                <i class="fa fa-angle-right"></i>&nbsp;Registration</a> 
                                        </li>-->
                </ul>
            </li>

            <?php
        } else if ($this->session->userdata('user_type') == "Teacher") {
            ?>


            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Routine
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>dashboard">
                            <i class="fa fa-angle-right"></i>&nbsp;Routine View</a> 
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Examination
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_mark/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Exam Mark</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/exam_marking_criteria/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Marking Criteria</a> 
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Communication
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>&nbsp;Teacher</a> 
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>admin/comm_teacher_file_upload/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;File Upload</a> 
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>admin/comm_teacher_message/list">
                                    <i class="fa fa-angle-right"></i>&nbsp;Message</a> 
                            </li>

                        </ul>
                    </li>


                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Student
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>admin/student_profile_info/list">
                            <i class="fa fa-angle-right"></i>&nbsp;Profile Info</a> 
                    </li>
                    <!--                    <li>
                                            <a href="<?php echo base_url() ?>admin/student_registration/list">
                                                <i class="fa fa-angle-right"></i>&nbsp;Registration</a> 
                                        </li>-->
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/student_attendance/list">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                        Attendance
                    </span> 
                    <span class="fa arrow"></span> 
                </a> 
            </li>
            
            <?php
        }
        ?>


        <li class="nav-divider"></li>
        <li>
            <a href="<?php echo base_url() ?>test/logout">
                <i class="fa fa-sign-in"></i>
                <span class="link-title">
                    Log Out
                </span> 
            </a> 
        </li>
    </ul>

</html>

