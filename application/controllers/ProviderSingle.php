<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProviderSingle extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {

        $data["user"] = $this->db->where("id", $id)->get("users")->row_array();
        $data["provider"] = $this->db->where("user_id", $id)->where("status", 1)->get("providers")->row_array();
        $data["gallery"] = $this->db->where("provider_id", $id)->get("gallery_provider")->result_array();

        $data["services"] = $this->db->select("services.*, service_provider.price")
            ->from("services")
            ->join("service_provider", "service_provider.service_id = services.id")
            ->get()->result_array();

        $data["event_categories"] = $this->db->select("event_ctg.*, event_type.type")
            ->from("event_ctg")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->join("ctg_provider", "ctg_provider.event_ctg_id = event_ctg.id")
            ->where("ctg_provider.provider_id", $id)
            ->get()->result_array();
        $data["provider_id"] = $id;


        $data['page_info'] = ['name' => 'provider_single'];
        $this->load->view('front/includes/index',$data);
    }

    public function register($id)
    {
        if (empty($this->session->userdata("user_type")) || $this->session->userdata("user_type") != 4){
            redirect(base_url("login"));
        }

        $data["user"] = $this->db->where("id", $id)->get("users")->row_array();
        $data["provider"] = $this->db->where("user_id", $id)->where("status", 1)->get("providers")->row_array();
        $data["gallery"] = $this->db->where("provider_id", $id)->get("gallery_provider")->result_array();

        $data["services"] = $this->db->select("services.*, service_provider.price")
            ->from("services")
            ->join("service_provider", "service_provider.service_id = services.id")
            ->get()->result_array();

        $data["event_categories"] = $this->db->select("event_ctg.*, event_type.type")
            ->from("event_ctg")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->join("ctg_provider", "ctg_provider.event_ctg_id = event_ctg.id")
            ->where("ctg_provider.provider_id", $id)
            ->get()->result_array();
        $data["provider_id"] = $id;


        $data['page_info'] = ['name' => 'provider_single_event_booking'];
        $this->load->view('front/includes/index',$data);
    }

    public function register_action($id)
    {
        if (empty($this->session->userdata("user_type")) || $this->session->userdata("user_type") != 4){
            redirect(base_url("login"));
        }

        $title = $this->input->post("title", true);
        $description = $this->input->post("description", true);
        $event_catg = $this->input->post("event_catg", true);
        $service_check = $this->input->post("service_check", true);
        $event_start = $this->input->post("event_start", true);
        $event_end = $this->input->post("event_end", true);

        if (!empty($title) && !empty($description) && !empty($event_catg) && !empty($event_start) && !empty($event_end) ){

            $service_providers = $this->db->where_in("service_id", $service_check)->get("service_provider")->result_array();


            $this->db->insert("events", array(
                "customer_id" => $this->session->userdata("user_id"),
                "provider_id" => $id,
                "title" => $title,
                "description" => $description,
                "event_start" => date('Y-m-d', strtotime($event_start)),
                "event_end" => date('Y-m-d', strtotime($event_end)),
                "provider_status" => 0,
                "estab_status" => 0
            ));
            $insert_id = $this->db->insert_id();

            foreach ($service_providers as $item){
                $this->db->insert("service_event", array(
                    "service_provider_id" => $item["id"],
                    "event_id" => $insert_id,
                ));
            }

            redirect(base_url("register-success"));

        }else{
            $this->session->set_flashdata("register_alert", "Dont empty the important fields");
            redirect(base_url("provider-single-register/$id"));
        }

    }

    public function success()
    {
        $data['page_info'] = ['name' => 'event_success_confirmation'];
        $this->load->view('front/includes/index',$data);
    }

}
