<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or $_SESSION['user_type'] != 1) {
            show_404();
        }
    }

    public function index()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['ctgs'] = $this->db->select('event_ctg.id, event_ctg.name_en as name,event_ctg.img,event_type.type')->
            from('event_ctg')->join('event_type','event_ctg.type_id = event_type.id','left')->order_by('id','DESC')->
            get()->result_array();
        $data['page_info'] = ['name' => 'categories/list'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['types'] = $this->db->select('event_type.id, event_type.type')->
            get('event_type')->result_array();
        $data['page_info'] = ['name' => 'categories/add'];
        $this->load->view('admin/includes/index',$data);
    }

    public function add_act()
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        $type = $this->input->post('type',true);
        $img = $this->input->post('img',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru) and !empty($type)){
            $file_name_seo = convertToSEO(pathinfo($_FILES["img"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $config_upload['upload_path'] = "uploads/event_categories";
            $config_upload['allowed_types'] = 'jpg|jpeg|png';
            $config_upload['file_name'] = $file_name_seo;
            $this->load->library('upload',$config_upload);
            $this->upload->initialize($config_upload);

            if (!empty($file_name_seo)){
                $is_upload = $this->upload->do_upload("img");

                if ($is_upload){
                    $img = $file_name_seo;
                }else{
                    $this->session->set_flashdata('err','Upload image correctly jpg, jpeg and pngs accepted(under 2MB)');
                    redirect(base_url('category_add'));
                }

                $data = [
                    'type_id' => $type,
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                    'img' => $img
                ];
                $this->db->insert('event_ctg',$data);
                redirect(base_url('categories'));
            }else{
                $this->session->set_flashdata('err','Upload image correctly jpg, jpeg and pngs accepted(under 2MB)');
                redirect(base_url('category_add'));
            }
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('category_add'));
        }
    }

    public function update($id)
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data['types'] = $this->db->select('event_type.id, event_type.type')->
        get('event_type')->result_array();
        $data['ctg'] = $this->db->
        where('id',$id)->get('event_ctg')->row_array();
        $data['page_info'] = ['name' => 'categories/update'];
        $this->load->view('admin/includes/index',$data);
    }

    public function update_act($id)
    {
        $name_az = $this->input->post('name_az',true);
        $name_en = $this->input->post('name_en',true);
        $name_ru = $this->input->post('name_ru',true);
        $type = $this->input->post('type',true);
        $img = $this->input->post('img',true);
        if (!empty($name_az) and !empty($name_en) and !empty($name_ru) and !empty($type)){
            $file_name_seo = convertToSEO(pathinfo($_FILES["img"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $config_upload['upload_path'] = "uploads/event_categories";
            $config_upload['allowed_types'] = 'jpg|jpeg|png';
            $config_upload['file_name'] = $file_name_seo;
            $this->load->library('upload',$config_upload);
            $this->upload->initialize($config_upload);

            if (!empty($file_name_seo)){
                $is_upload = $this->upload->do_upload("img");

                if ($is_upload){
                    $img = $file_name_seo;
                }else{
                    unset($img);
                }
            }else{
                unset($img);
            }
            if (isset($img)) {
                $data = [
                    'type_id' => $type,
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                    'img' => $img
                ];
            }else{
                $data = [
                    'type_id' => $type,
                    'name_az' => $name_az,
                    'name_en' => $name_en,
                    'name_ru' => $name_ru,
                ];
            }
            $this->db->where('id',$id)->update('event_ctg',$data);
            redirect(base_url('categories'));
        }
        else{
            $this->session->set_flashdata('err','Fill All');
            redirect(base_url('category_update'));
        }

    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('event_ctg');
        $this->session->set_flashdata('suc','Successfully Deleted');
        redirect(base_url('categories'));
    }
}
