<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or $_SESSION['user_type'] != 1) {
            show_404();
        }
    }

    public function index()
    {
        $data['cities'] = $this->db->select('city.id, city.name_en as name')->
            from('city')->order_by('id','DESC')->
            get()->result_array();
        $data['page_info'] = ['name' => 'cities/list'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add()
    {
        $data['page_info'] = ['name' => 'cities/add'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add_act()
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru)){
           
                $data = [
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                ];
                $this->db->insert('city',$data);
                redirect(base_url('cities'));
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('city_add'));
        }
    }

    public function update($id)
    {

        $data['city'] = $this->db->
        where('id',$id)->get('city')->row_array();
        $data['page_info'] = ['name' => 'cities/update'];
        $this->load->view('admin/includes/index',$data);
    }

    public function update_act($id)
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru)){
                $data = [
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                ];
            $this->db->where('id',$id)->update('city',$data);
            redirect(base_url('cities'));
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('city_update'));
        }

    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('city');
        $this->session->set_flashdata('suc','Successfully Deleted');
        redirect(base_url('cities'));
    }
}
