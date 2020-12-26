<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bepartner extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'choose_partner_type'];
        $this->load->view('front/includes/index',$data);
    }


    public function provider_register()
    {

        $data["city"] = $this->db->get("city")->result_array();

        $data['page_info'] = ['name' => 'register_partner_provider'];
        $this->load->view('front/includes/index',$data);
    }

    public function provider_register_submit()
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
        $remember  = $this->input->post("remember");


        if (!empty($name) && !empty($surname) && !empty($password) && !empty($mobile) && !empty($city) && !empty($birthday) && !empty($remember)){


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


            $this->db->insert("users", array(
                "user_type_id" => 2,
                "password" => $password,
                "name" => $name,
                "surname" => $surname,
                "email" => $email,
                "mobile" => $mobile,
                "birthday" => date('Y-m-d', strtotime($birthday)),
            ));
            $insert_id = $this->db->insert_id();
            $this->db->insert("providers", array(
                "user_id" => $insert_id,
                "city_id" => $city,
                "img" => $img,
                "about_az" => $about_az,
                "about_en" => $about_en,
                "about_ru" => $about_ru,
                "instagram" => $instagram,
                "facebook" => $facebook,
                "status" => 0,
            ));
            $this->session->unset_userdata("form_data");
            redirect(base_url(""));

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
                "remember" => $remember
            ));
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("become-partner-provider"));
        }

    }


    public function establishment_register()
    {

        $data["city"] = $this->db->get("city")->result_array();

        $data['page_info'] = ['name' => 'register_partner_establishment'];
        $this->load->view('front/includes/index',$data);
    }

    public function establishment_register_submit()
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

        $remember  = $this->input->post("remember");


        if (!empty($name) && !empty($surname) && !empty($password) && !empty($mobile) && !empty($city) && !empty($birthday) && !empty($remember) & !empty($estab_name)){


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


            $this->db->insert("users", array(
                "user_type_id" => 3,
                "password" => $password,
                "name" => $name,
                "surname" => $surname,
                "email" => $email,
                "mobile" => $mobile,
                "birthday" => date('Y-m-d', strtotime($birthday)),
            ));
            $insert_id = $this->db->insert_id();
            $this->db->insert("estab", array(
                "user_id" => $insert_id,
                "city_id" => $city,
                "img" => $img,
                "about_az" => $about_az,
                "about_en" => $about_en,
                "about_ru" => $about_ru,
                "instagram" => $instagram,
                "facebook" => $facebook,
                "status" => 0,

                "name" => $estab_name,

                "address_az" => $address_az,
                "address_en" => $address_en,
                "address_ru" => $address_ru,

                "lat" => $lat,
                "lon" => $lon,
            ));

            $this->session->unset_userdata("form_data");
            redirect(base_url(""));

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
                "remember" => $remember,
                "estab_name" => $estab_name,

                "address_az" => $address_az,
                "address_en" => $address_en,
                "address_ru" => $address_ru,
                "lat" => $lat,
                "lon" => $lon,
            ));
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("become-partner-establishment"));
        }

    }


}
