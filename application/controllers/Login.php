<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (isset($_SESSION['user_id']) and isset($_SESSION['user_id'])){
            if ($_SESSION['user_type'] == 4) {
                redirect(base_url());
            } else {
                redirect(base_url('dashboard'));
            }
        }
        $data['page_info'] = ['name' => 'login'];
        $this->load->view('front/includes/index',$data);
    }

    public function login_act()
    {
        if (isset($_SESSION['user_id']) and isset($_SESSION['user_id'])){
            if ($_SESSION['user_type'] == 4) {
                redirect(base_url());
            } else {
                redirect(base_url('dashboard'));
            }
        }
        $email = $this->input->post('email',true);
        $pass = $this->input->post('password',true);
        if (!empty($email) and !empty($pass)){
            $data = [
                'email' => $email,
                'password' => md5($pass)
            ];
            $user = $this->db->select('users.id,users.user_type_id, users.name')->
                where($data)->get('users')->row_array();
            if (!empty($user)) {
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('user_type', $user['user_type_id']);
                $this->session->set_userdata('user_name', $user['name']);
                if ($user['user_type_id'] == 4) {
                    redirect(base_url());
                } else {
                    redirect(base_url('dashboard'));
                }
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
        unset($_SESSION['user_name']);
        redirect(base_url('login'));
    }

    public function register_act()
    {
        if (isset($_SESSION['user_id']) and isset($_SESSION['user_id'])){
            if ($_SESSION['user_type'] == 4) {
                redirect(base_url());
            } else {
                redirect(base_url('dashboard'));
            }
        }
        $name = $this->input->post('name',true);
        $surname = $this->input->post('surname',true);
        $mobile = $this->input->post('number',true);
        $email = $this->input->post('email',true);
        $pass = $this->input->post('password',true);
        if (!empty($email) and !empty($pass) and !empty($name) and !empty($surname) and !empty($mobile)){
            $data = [
                'user_type_id' => 4,
                'name' => $name,
                'surname' => $surname,
                'mobile' => $mobile,
                'email' => $email,
                'password' => md5($pass)
            ];
            $this->db->insert('users',$data);
            $insert_id = $this->db->insert_id();
            $this->db->insert('customer',['user_id' => $insert_id]);
            $this->session->set_userdata('user_id',$insert_id);
            $this->session->set_userdata('user_type',4);
            $this->session->set_userdata('user_name',$name);
            redirect(base_url());
        }
        else{
            $this->session->set_flashdata('err',"Fill All");
            $this->session->set_flashdata('register_err',1);
            redirect(base_url('login'));
        }
    }
}
