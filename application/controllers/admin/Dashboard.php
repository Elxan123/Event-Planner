<?php class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'dashboard'];
        $this->load->view('admin/includes/index',$data);
    }
}
