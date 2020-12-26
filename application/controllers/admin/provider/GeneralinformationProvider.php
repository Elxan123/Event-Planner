<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralinformationProvider extends CI_Controller{
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

    public function general_information()
    {
        $data["city"] = $this->db->get("city")->result_array();

        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();


        $data['page_info'] = ['name' => 'provider/general_information/update'];
        $this->load->view('admin/includes/index',$data);
    }

    public function general_information_update()
    {

        $name = $this->input->post("name");
        $surname = $this->input->post("surname");
        $email = $this->input->post("email");
        $mobile = $this->input->post("mobile");
        $password = $this->input->post("password");
        $birthday = $this->input->post("birthday");
        $city = $this->input->post("city_id");
        $img = $this->input->post("img");
        $about_az = $this->input->post("about_az");
        $about_en = $this->input->post("about_en");
        $about_ru = $this->input->post("about_ru");
        $instagram  = $this->input->post("instagram");
        $facebook = $this->input->post("facebook");


        if (!empty($name) && !empty($surname) && !empty($password) && !empty($mobile) && !empty($city) && !empty($birthday) ){

            $file_name_seo = convertToSEO(pathinfo($_FILES["img"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $config_upload['upload_path'] = "uploads/providers";
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
                "user_type_id" => 2,
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
            )->update("providers", array(
                "user_id" => $this->session->userdata("user_id"),
                "city_id" => $city,
                "img" => $img,
                "about_az" => $about_az,
                "about_en" => $about_en,
                "about_ru" => $about_ru,
                "instagram" => $instagram,
                "facebook" => $facebook,

            ));

            $this->session->unset_userdata("form_data");
            redirect(base_url("providers/general-info"));

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

            ));
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("providers/general-info"));
        }

    }


    public function gallery()
    {

        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();
        $data["gallery"] = $this->db->where("provider_id", $this->session->userdata("user_id"))->get("gallery_provider")->result_array();

        $data['page_info'] = ['name' => 'provider/gallery/content'];
        $this->load->view('admin/includes/index',$data);
    }

    public function gallery_add()
    {
        $id = $this->session->userdata("user_id");

        $img_limit = 9;

        $gallery_count = $this->db->where(['provider_id'=>$id])->from("gallery_provider")->count_all_results();

        if ($gallery_count < $img_limit){

            $file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);


            $config_upload['upload_path'] = "uploads/providers/";
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
                "provider_id" => $id,
                "img" => $name,
            );

            $this->db->insert("gallery_provider", $data);

            
        }else{
            echo "error";
        }
        
    }

    public function gallery_delete($id)
    {

        $row = $this->db->where("id", $id)->get("gallery_provider")->row_array();

        if ($row["img"] !== "default.png" && file_exists("uploads/provider/$row[img]")) {
            unlink("uploads/provider/$row[img]");
        }

        $this->db->where("id", $id)->delete("gallery_provider");

        redirect(base_url("providers/gallery"));

    }
    
    public function gallery_refresh_page()
    {
        $data["gallery"] = $this->db->where("provider_id", $this->session->userdata("user_id"))->get("gallery_provider")->result_array();
        $this->load->view('admin/provider/gallery/refresh_page',$data);
        
    }

    public function services()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();

        $data["service_providers"] = $this->db->select("service_provider.id as sp_id, service_provider.price, services.name_en as service_name_en, services.desc_en as service_desc_en")
            ->from("service_provider")
            ->join("providers", "providers.user_id = service_provider.provider_id")
            ->join("services", "services.id = service_provider.service_id")
            ->get()->result_array();



        $data['page_info'] = ['name' => 'provider/services/content'];
        $this->load->view('admin/includes/index',$data);
    }

    public function services_add()
    {
        $data["profile"] = $this->db->where("id", $this->session->userdata("user_id"))->get("users")->row_array();
        $data["provider_profile"] = $this->db->where("user_id", $this->session->userdata("user_id"))->get("providers")->row_array();

        $data["services"] = $this->db->get("services")->result_array();


        $data['page_info'] = ['name' => 'provider/services/add'];
        $this->load->view('admin/includes/index',$data);
    }

    public function services_add_action()
    {
        $id = $this->session->userdata("user_id");
        $service_id = $this->input->post("service_id");
        $price = $this->input->post("price");

        if (!empty($service_id) && !empty($price)){


            if(empty($this->db->where(array("service_id" => $service_id, "provider_id" => $id))->get("service_provider")->result_array())){

                $this->db->insert("service_provider", array(
                    "service_id" => $service_id,
                    "provider_id" => $id,
                    "price" => $price
                ));
                redirect(base_url("providers/choose-service"));

            }else{
                $this->session->set_flashdata("register_alert", "You cannot add the same service twice");
                redirect(base_url("providers/add-service"));
            }



        }else{
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("providers/add-service"));
        }

    }

    public function services_delete($service_id)
    {
        $this->db->where("id", $service_id)->delete("service_provider");
        redirect(base_url("providers/choose-service"));
    }



}
