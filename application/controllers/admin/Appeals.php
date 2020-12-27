<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appeals extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or $_SESSION['user_type'] != 1) {
            show_404();
        }
    }

    public function estab()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['appeals'] = $this->db->select('users.id, users.name, users.surname, users.email, users.mobile, estab.img, estab.name as estab_name, estab.status')->
            from('users')->where('user_type_id',3)
            ->join('estab','estab.user_id = users.id','inner')
            ->order_by('status','ASC')
            ->get()->result_array();
        $data['page_info'] = ['name' => 'appeals/estab'];
        $this->load->view('admin/includes/index',$data);
    }

    public function provider()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['appeals'] = $this->db->select('users.id, users.name, users.surname, users.email, users.mobile, providers.img, providers.status')->
        from('users')->where('user_type_id',2)
            ->join('providers','providers.user_id = users.id','inner')
            ->order_by('status','ASC')
            ->get()->result_array();
        $data['page_info'] = ['name' => 'appeals/provider'];
        $this->load->view('admin/includes/index',$data);
    }

    public function approve($type,$id)
    {
        if (!empty($type) and !empty($id)){
            if ($type == 3){
                $this->db->where('user_id',$id)->update('estab',['status' => 1]);
                $this->session->set_flashdata('suc',"Successfully Changed");
                redirect(base_url('estab_approve'));
            }elseif ($type == 2){
                $this->db->where('user_id',$id)->update('providers',['status' => 1]);
                $this->session->set_flashdata('suc',"Successfully Changed");
                redirect(base_url('provider_approve'));
            }else{
                show_404();
            }
        }else{
            show_404();
        }
    }

    public function reject($type,$id)
    {
        if (!empty($type) and !empty($id)){
            if ($type == 3){
                $this->db->where('user_id',$id)->update('estab',['status' => 2]);
                $this->session->set_flashdata('suc',"Successfully Changed");
                redirect(base_url('estab_approve'));
            }elseif ($type == 2){
                $this->db->where('user_id',$id)->update('providers',['status' => 2]);
                $this->session->set_flashdata('suc',"Successfully Changed");
                redirect(base_url('provider_approve'));
            }else{
                show_404();
            }
        }else{
            show_404();
        }
    }
}
