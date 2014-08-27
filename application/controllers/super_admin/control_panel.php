<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Control_panel extends CI_Controller {

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
        echo "hi";
    }

    public function module($task = "list", $id = 0) {

        $this->template->set_template('dashboard');
        $this->template->write('title', 'Module');

        //$this->template->write_view('content','dashboard/login');

        if ($task == "list") {
            $base_url = base_url();
            $this->template->write('css', "<link rel='stylesheet' href='$base_url" . "assets/lib/datatables/css/DT_bootstrap.css'>");
            $data['list']='this is list page';
            $this->template->write_view("content", "super_admin/module_list", $data);
        } elseif ($task == "add_edit") {
            $this->template->write_view("content", "super_admin/module_add_edit");
        }
        $this->template->render();
    }

    public function user_group($task = "list", $id = 0) {
        $this->template->set_template('dashboard');
        $this->template->write('title', 'Module');

        //$this->template->write_view('content','dashboard/login');

        if ($task == "list") {
            $this->template->write_view("content", "super_admin/module_list");
        } elseif ($task == "add_edit") {
            $this->template->write_view("content", "super_admin/module_add_edit");
        }
        $this->template->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */