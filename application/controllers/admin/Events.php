<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or !isset($_SESSION['user_type'])) {
            show_404();
        }
    }

    public function customer()
    {
        if ($_SESSION['user_type'] != 4){
            show_404();
        }
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['events'] = $this->db->select('events.id,events.provider_status,events.provider_id,events.title,events.description,events.estab_status')
            ->where('events.customer_id',$_SESSION['user_id'])->get('events')->result_array();
        $data['page_info'] = ['name' => 'events/customer'];
        $this->load->view('admin/includes/index',$data);
    }

    public function provider()
    {
        if ($_SESSION['user_type'] != 2){
            show_404();
        }
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();

        $data['events'] = $this->db->select('events.id,events.provider_status,events.provider_id,events.title,events.description,events.estab_status,events.estab_id')
            ->where('events.provider_id',$_SESSION['user_id'])->get('events')->result_array();
        $data['page_info'] = ['name' => 'events/provider'];
        $this->load->view('admin/includes/index',$data);
    }

    public function estab()
    {
        if ($_SESSION['user_type'] != 3){
            show_404();
        }
        $data['events'] = $this->db->select('events.id,events.provider_status,events.provider_id,events.title,events.description,events.estab_status,events.estab_id')
            ->where('events.estab_id',$_SESSION['user_id'])->get('events')->result_array();
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();

        $data['page_info'] = ['name' => 'events/estab'];
        $this->load->view('admin/includes/index',$data);
    }

    public function estab_choose($id)
    {
        if ($_SESSION['user_type'] != 2){
            show_404();
        }
        $this->session->set_userdata('estabch_event',$id);
        redirect(base_url('event-organize-establishments'));
    }

    public function approve($id)
    {
        if ($_SESSION['user_type'] == 2){
            $this->db->where('id',$id)->update('events',['provider_status' => 1]);
            $this->session->set_flashdata('suc',"Successfully Changed");
            redirect(base_url('provider-events'));
        }elseif ($_SESSION['user_type'] == 3){
            $this->db->where('id',$id)->update('events',['estab_status' => 1]);
            $this->session->set_flashdata('suc',"Successfully Changed");
            redirect(base_url('estab-events'));
        }
        else{
            show_404();
        }
    }

    public function reject($id)
    {
        if ($_SESSION['user_type'] == 2){
            $this->db->where('id',$id)->update('events',['provider_status' => 2]);
            $this->session->set_flashdata('suc',"Successfully Changed");
            redirect(base_url('provider-events'));
        }elseif ($_SESSION['user_type'] == 3){
            $this->db->where('id',$id)->update('events',['estab_status' => 2]);
            $this->session->set_flashdata('suc',"Successfully Changed");
            redirect(base_url('estab-events'));
        }
        else{
            show_404();
        }
    }
}
