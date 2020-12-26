<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or !isset($_SESSION['user_type'])){
            show_404();
        }
    }

    public function index()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();

        $data['page_info'] = ['name' => 'dashboard'];
        $this->load->view('admin/includes/index',$data);
    }

}
