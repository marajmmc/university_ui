    <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        // $this->load->helper(array('url', 'form'));
    }

    public function index() {
        if (User_helper::is_login()) {
            $this->session->userdata("user_type");
            //go to its task
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Dashboard');
            $data['tasktitle'] = 'Dashboard';
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            $this->template->render();
        } else {
            redirect(base_url() . 'dashboard/login');
            // die();
        }
    }

    public function academic_dipartment($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Department');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/department_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/department_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_batch($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Batch');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/batch_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/batch_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function routine_create($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Routine - Create');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/routine_create_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/routine_create_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_subject($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Subject');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/subject_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/subject_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_semester($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Semester');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/semester_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/semester_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_semester_create($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Semester - Create');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/semester_create_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/semester_create_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_teacher($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Teacher');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/teacher_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/teacher_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_assign_teacher($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Assign Subject to Teacher');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {

                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/assign_teacher_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/assign_teacher_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function academic_assign_student($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Academic');
            $this->template->write('tasktitle', 'Academic - Assign Subject to Student');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/assign_student_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/assign_student_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function routine_period($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Routine - Period Setup');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/period_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/period_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function routine_room($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Routine - Room Setup');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/room_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/room_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function routine_class_routine($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Routine - Create Routine');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/class_routine_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/class_routine_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function exam_term_setup($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Examination - Term Setup');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/exam_term_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/exam_term_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function exam_configuration($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Exam Config');
            $this->template->write('tasktitle', 'Examination - Exam Configuration');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/exam_config_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/exam_config_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function exam_mark($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Exam Mark');
            $this->template->write('tasktitle', 'Examination - Exam Mark');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/exam_mark_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/exam_mark_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    public function exam_marking_criteria($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Exam Marking Criteria');
            $this->template->write('tasktitle', 'Examination - Marking Criteria');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/exam_marking_criteria_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/exam_marking_criteria_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function comm_teacher_file_upload($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Communication');
            $this->template->write('tasktitle', 'Communication - Teacher File Upload');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/comm_teacher_file_list', $data);
            } elseif ($task == "add_edit") {
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/comm_teacher_file_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
        }
    }
    
    public function comm_student_file_download($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Communication');
            $this->template->write('tasktitle', 'Communication - Student File Download');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/comm_student_file_download_list', $data);
            } elseif ($task == "add_edit") {
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/comm_student_file_download_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
        }
    }
    
    public function comm_teacher_message($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Communication');
            $this->template->write('tasktitle', 'Communication - Teacher Message');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/comm_teacher_message_list', $data);
            } elseif ($task == "add_edit") {
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/comm_teacher_message_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
        }
    }
   
    public function comm_student_message_view($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Communication');
            $this->template->write('tasktitle', 'Communication - Student Message View');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/comm_student_message_list', $data);
            } elseif ($task == "add_edit") {
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/comm_teacher_message_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
        }
    }
    
    
    public function student_profile_info($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Student - Profile Info');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/student_info_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/student_info_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    public function student_attendance($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Attendance');
            $this->template->write('tasktitle', 'Teacher - Student Attendance');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/student_attendance_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/student_attendance_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
        }
    }
    
    
    
    public function student_registration($task = "list", $id = 0) {
        if (User_helper::is_login()) {
            //go to its task
            $base_url = base_url();
            $this->template->set_template('dashboard');
            $this->template->write('title', 'Routine');
            $this->template->write('tasktitle', 'Student - Registration');
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($task == "list") {
                $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
                $data['featuretitle'] = 'Record List';
                $this->template->write_view('content', 'admin_academic/student_registration_list', $data);
            } elseif ($task == "add_edit") {
                
                $data['featuretitle'] = 'Record Add/Edit';
                $this->template->write_view('content', 'admin_academic/student_registration_add_edit', $data);
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'test/logout');
            // die();
        }
    }
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */