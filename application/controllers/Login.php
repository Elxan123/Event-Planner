<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'login'];
        $this->load->view('front/includes/index',$data);
    }

    public function login_act()
    {
        $email = $this->input->post('email',true);
        $pass = $this->input->post('password',true);
        if (!empty($email) and !empty($pass)){
            $data = [
                'email' => $email,
                'password' => ($pass)
            ];
            $user = $this->db->select('users.id,users.user_type_id')->
                where($data)->get('users')->row_array();
            if (!empty($user)){
                $this->session->set_userdata('user_id',$user['id']);
                $this->session->set_userdata('user_type',$user['user_type_id']);
                redirect(base_url('dashboard'));
            }
            else{
                $this->session->set_flashdata('err',"Information is not true");
                redirect(base_url('login'));
            }
        }
        else{
            $this->session->set_flashdata('err',"Enter email and password");
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_type']);
        redirect(base_url('login'));
    }
}
