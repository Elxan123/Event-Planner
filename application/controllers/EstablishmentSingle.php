<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstablishmentSingle extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'establishment_single'];
        $this->load->view('front/includes/index',$data);
    }
}
