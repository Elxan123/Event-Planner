<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or $_SESSION['user_type'] != 1) {
            show_404();
        }
    }

    public function index()
    {
        $data['services'] = $this->db->select('services.id, services.name_en as name')->
            from('services')->order_by('id','DESC')->
            get()->result_array();
        $data['page_info'] = ['name' => 'services/list'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add()
    {
        $data['page_info'] = ['name' => 'services/add'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add_act()
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        $desc_az = $this->input->post('desc_az',true);
        $desc_en = $this->input->post('desc_en',true);
        $desc_ru = $this->input->post('desc_ru',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru) and !empty($desc_az) and !empty($desc_en) and !empty($desc_ru)){
           
                $data = [
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                    'desc_az' => $desc_az,
                    'desc_en' => $desc_en,
                    'desc_ru' => $desc_ru
                ];
                $this->db->insert('services',$data);
                redirect(base_url('services'));
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('service_add'));
        }
    }

    public function update($id)
    {

        $data['service'] = $this->db->
        where('id',$id)->get('services')->row_array();
        $data['page_info'] = ['name' => 'services/update'];
        $this->load->view('admin/includes/index',$data);
    }

    public function update_act($id)
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        $desc_az = $this->input->post('desc_az',true);
        $desc_en = $this->input->post('desc_en',true);
        $desc_ru = $this->input->post('desc_ru',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru)){
                $data = [
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                    'desc_az' => $desc_az,
                    'desc_en' => $desc_en,
                    'desc_ru' => $desc_ru
                ];
            $this->db->where('id',$id)->update('services',$data);
            redirect(base_url('services'));
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('service_update'));
        }

    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('services');
        $this->session->set_flashdata('suc','Successfully Deleted');
        redirect(base_url('services'));
    }
}
