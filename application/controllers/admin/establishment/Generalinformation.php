<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generalinformation extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_id']) or !isset($_SESSION['user_type'])){
            show_404();
        }

    }

    
    public function index()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();

        $data['page_info'] = ['name' => 'dashboard'];
        $this->load->view('admin/includes/index',$data);
    }

    public function general_information()
    {
        $data["city"] = $this->db->get("city")->result_array();

        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();


        $data['page_info'] = ['name' => 'establishment/general_information/update'];
        $this->load->view('admin/includes/index',$data);
    }

    public function general_information_update()
    {

        $name = $this->input->post("name");
        $surname = $this->input->post("surname");
        $password = $this->input->post("password");
        $img = $this->input->post("img");
        $about_az = $this->input->post("about_az");
        $about_en = $this->input->post("about_en");
        $about_ru = $this->input->post("about_ru");
        $city = $this->input->post("city_id");
        $mobile = $this->input->post("mobile");
        $birthday = $this->input->post("birthday");
        $email = $this->input->post("email");
        $facebook = $this->input->post("facebook");
        $instagram  = $this->input->post("instagram");

        $estab_name  = $this->input->post("estab_name");

        $address_az  = $this->input->post("address_az");
        $address_en  = $this->input->post("address_en");
        $address_ru  = $this->input->post("address_ru");

        $lat  = $this->input->post("lat");
        $lon  = $this->input->post("lon");


        if (!empty($name) && !empty($surname) && !empty($password) && !empty($mobile) && !empty($city) && !empty($birthday) && !empty($estab_name)){


            $file_name_seo = convertToSEO(pathinfo($_FILES["img"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $config_upload['upload_path'] = "uploads/establishments";
            $config_upload['allowed_types'] = 'jpg|jpeg|png';
            $config_upload['file_name'] = $file_name_seo;
            $this->load->library('upload',$config_upload);
            $this->upload->initialize($config_upload);

            if (!empty($file_name_seo)){
                $is_upload = $this->upload->do_upload("img");

                if ($is_upload){
                    $img = $file_name_seo;
                }else{
                    $img = "default.png";
                }

            }else{
                $img = "default.png";
            }


            $this->db->where(
                array(
                    "id" => $this->session->userdata("user_id")
                )
            )->update("users", array(
                "user_type_id" => 3,
                "password" => $password,
                "name" => $name,
                "surname" => $surname,
                "email" => $email,
                "mobile" => $mobile,
                "birthday" => date('Y-m-d', strtotime($birthday)),
            ));

            $this->db->where(
                array(
                    "user_id" => $this->session->userdata("user_id")
                )
            )->update("estab", array(
                "user_id" => $this->session->userdata("user_id"),
                "city_id" => $city,
                "img" => $img,
                "about_az" => $about_az,
                "about_en" => $about_en,
                "about_ru" => $about_ru,
                "instagram" => $instagram,
                "facebook" => $facebook,

                "name" => $estab_name,

                "address_az" => $address_az,
                "address_en" => $address_en,
                "address_ru" => $address_ru,

                "lat" => $lat,
                "lon" => $lon,
            ));

            $this->session->unset_userdata("form_data");
            redirect(base_url("establishment/general-info"));

        }else{

            $this->session->set_userdata("form_data", array(
                "password" => $password,
                "name" => $name,
                "surname" => $surname,
                "email" => $email,
                "mobile" => $mobile,
                "birthday" => $birthday,
                "city_id" => $city,
                "img" => $img,
                "about_az" => $about_az,
                "about_en" => $about_en,
                "about_ru" => $about_ru,
                "instagram" => $instagram,
                "facebook" => $facebook,
                "status" => $birthday,
                "estab_name" => $estab_name,

                "address_az" => $address_az,
                "address_en" => $address_en,
                "address_ru" => $address_ru,
                "lat" => $lat,
                "lon" => $lon,
            ));
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("establishment/general-info"));
        }

    }

    public function gallery()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();
        $data["gallery"] = $this->db->where("estab_id", $this->session->userdata("user_id"))->get("gallery_estab")->result_array();


        $data['page_info'] = ['name' => 'establishment/gallery/content'];
        $this->load->view('admin/includes/index',$data);
    }

    public function gallery_add()
    {
        $id = $this->session->userdata("user_id");

        $img_limit = 9;

        $gallery_count = $this->db->where(['estab_id'=>$id])->from("gallery_estab")->count_all_results();

        if ($gallery_count < $img_limit){

            $file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);


            $config_upload['upload_path'] = "uploads/establishments/";
            $config_upload['allowed_types'] = 'jpg|png|jpeg';
            $config_upload["file_name"] = $file_name;

            $this->load->library('upload',$config_upload);
            $this->upload->initialize($config_upload);

            if (!empty($config_upload['file_name'])){
                $is_upload = $this->upload->do_upload("file");
                if ($is_upload){
                    $name = $this->upload->data('file_name');
                }else{
                    $name = "default.png";
                }

            }else{
                $is_upload = false;
                $name = "default.png";
            }

            $data = array(
                "estab_id" => $id,
                "img" => $name,
            );

            $this->db->insert("gallery_estab", $data);

            
        }else{
            echo "error";
        }
        
    }

    public function gallery_delete($id)
    {

        $row = $this->db->where("id", $id)->get("gallery_estab")->row_array();

        if ($row["img"] !== "default.png" && file_exists("uploads/establishments/$row[img]")) {
            unlink("uploads/establishments/$row[img]");
        }

        $this->db->where("id", $id)->delete("gallery_estab");

        redirect(base_url("establishment/gallery"));

    }
    
    public function gallery_refresh_page()
    {
        $data["gallery"] = $this->db->where("estab_id", $this->session->userdata("user_id"))->get("gallery_estab")->result_array();
        $this->load->view('admin/establishment/gallery/refresh_page',$data);
        
    }

    public function calendar()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();

        $data['page_info'] = ['name' => 'establishment/calendar/content'];
        $this->load->view('admin/includes/index',$data);
    }

    public function event_category()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();

        $data["ctg_estab"] = $this->db->select("ctg_estab.id as ctg_estab_id, event_ctg.*, event_type.*")
            ->from("ctg_estab")
            ->join("event_ctg", "event_ctg.id = ctg_estab.event_ctg_id ")
            ->join("estab", "estab.user_id = ctg_estab.estab_id")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->where("ctg_estab.estab_id", $this->session->userdata("user_id"))
            ->get()->result_array();



        $data['page_info'] = ['name' => 'establishment/event_category/content'];
        $this->load->view('admin/includes/index',$data);
    }

    public function event_category_add()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["estab_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("estab")->row_array();

        $data["categories"] = $this->db->select("event_ctg.*, event_type.type")
            ->from("event_ctg")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->get()
            ->result_array();


        $data['page_info'] = ['name' => 'establishment/event_category/add'];
        $this->load->view('admin/includes/index',$data);
    }

    public function event_category_add_action()
    {
        $id = $this->session->userdata("user_id");

        $category_id = $this->input->post("category_id");

        if (!empty($category_id)){

            if(empty($this->db->where(array("event_ctg_id " => $category_id, "estab_id " => $id))->get("ctg_estab")->result_array())){

                $this->db->insert("ctg_estab", array(
                    "estab_id" => $id,
                    "event_ctg_id " => $category_id,
                ));

                redirect(base_url("establishment/choose-event-category"));

            }else{
                $this->session->set_flashdata("register_alert", "You cannot add the same service twice");
                redirect(base_url("establishment/add-event-category"));
            }

        }else{
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("establishment/add-event-category"));
        }

    }

    public function event_category_delete($category_id)
    {
        $this->db->where("id", $category_id)->delete("ctg_estab");
        redirect(base_url("establishment/choose-event-category"));
    }
    

}
