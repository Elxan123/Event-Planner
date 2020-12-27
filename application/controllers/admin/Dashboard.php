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
        if ($_SESSION['user_type'] == 1){
            $data['dashes']['Events'] = $this->db->count_all_results('events');
            $data['dashes']['Customers'] = $this->db->count_all_results('customer');
            $data['dashes']['Providers'] = $this->db->count_all_results('providers');
            $data['dashes']['Establishers'] = $this->db->count_all_results('estab');
        }
        if ($_SESSION['user_type'] == 2){
            $data['dashes']['Approved Events'] = $this->db->where(['events.provider_status' => 1, 'events.provider_id' => $_SESSION['user_id']])->count_all_results('events');
            $data['dashes']['Pending Events'] = $this->db->where(['events.provider_status' => 0, 'events.provider_id' => $_SESSION['user_id']])->count_all_results('events');
            $data['dashes']['Rejected Events'] = $this->db->where(['events.provider_status' => 2, 'events.provider_id' => $_SESSION['user_id']])->count_all_results('events');
        }
        if ($_SESSION['user_type'] == 3){
            $data['dashes']['Approved Events'] = $this->db->where(['events.estab_status' => 1, 'events.estab_id' => $_SESSION['user_id']])->count_all_results('events');
            $data['dashes']['Pending Events'] = $this->db->where(['events.estab_status' => 0, 'events.estab_id' => $_SESSION['user_id']])->count_all_results('events');
            $data['dashes']['Rejected Events'] = $this->db->where(['events.estab_status' => 2, 'events.estab_id' => $_SESSION['user_id']])->count_all_results('events');
        }
        if ($_SESSION['user_type'] == 4){
            $data['dashes']['Approved Events'] = $this->db->where(['events.estab_status' => 1, 'events.customer_id' => $_SESSION['user_id']])->count_all_results('events');
        }
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();

        $data['page_info'] = ['name' => 'dashboard'];
        $this->load->view('admin/includes/index',$data);
    }

}
