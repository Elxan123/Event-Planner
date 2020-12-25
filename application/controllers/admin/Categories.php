<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or !isset($_SESSION['user_type'])){
            show_404();
        }
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'categories/list'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add()
    {
        $data['types'] = $this->db->select('event_type.id, event_type.type')->
            get('event_type')->result_array();
        $data['page_info'] = ['name' => 'categories/add'];
        $this->load->view('admin/includes/index',$data);
    }

}
