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
        $data['page_info'] = ['name' => 'dashboard'];
        $this->load->view('admin/includes/index',$data);
    }

}
