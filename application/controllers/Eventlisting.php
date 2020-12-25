<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventlisting extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'event_listing'];
        $this->load->view('front/includes/index',$data);
    }
}
