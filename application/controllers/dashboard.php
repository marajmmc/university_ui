<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
            $this->template->write_view('top_nav', 'dashboard/top_nav');
            $this->template->write_view('user_info', 'dashboard/user_info');
            $this->template->write_view('left_menu', 'dashboard/menu');
            if ($this->session->userdata("user_type") == 'Admin') {
                $this->template->write('tasktitle', 'Admin - Dashboard');
                $this->template->write_view('content', 'dashboard/dashboard_admin');
            } elseif ($this->session->userdata("user_type") == 'Student') {
                $this->template->write('tasktitle', 'Student - Dashboard');
                $this->template->write_view('content', 'dashboard/dashboard_student');
            } elseif ($this->session->userdata("user_type") == 'Teacher') {
                $this->template->write('tasktitle', 'Teacher - Dashboard');
                $this->template->write_view('content', 'dashboard/dashboard_teacher');
            } else {
                
            }
            $this->template->render();
        } else {
            redirect(base_url() . 'dashboard/login');
            // die();
        }
    }

    public function login() {
        //echo "login";
        if (User_helper::is_login()) {
            redirect(base_url() . 'dashboard');
        } else {
            $this->template->set_template('login');
//            $this->load->view('dashboard/login');
            //$this->template->write_view('content','dashboard/login');
            $this->template->render();
        }
    }

    public function menu() {
        //echo "login";
        $this->load->view('dashboard/menu');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */