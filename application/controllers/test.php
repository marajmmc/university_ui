<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller {

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
//        $this->load->database();
    }

    public function index() {
        $usertype=  $this->input->post('type');
        $this->session->set_userdata('user_type', $usertype);
        $this->session->set_userdata('user_id', 1);
        redirect(base_url() . 'dashboard/login');
//		echo "Test controller";
//        $data = array("name" => 'Super Admin', 'created_date'=>time(),"status"=>1);
//        $this->db->insert('sys_user_group', $data);
        
    }
    public function logout(){
        $this->session->set_userdata('user_id', 0);
        redirect(base_url() . 'dashboard/login');
    }

    public function add_edit($id = 0) {
        echo $id;
        $name = "islam";
        $data = array("id" => $id, "name" => $name);
        //$this->load->view("add_edit",$data);
        print_r($data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */