<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Establishmentsingle extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

    }

    public function index($id)
    {

        $data["user"] = $this->db->where("id", $id)->get("users")->row_array();
        $data["estab"] = $this->db->where("user_id", $id)->where("status", 1)->get("estab")->row_array();
        $data["gallery"] = $this->db->where("estab_id", $id)->get("gallery_estab")->result_array();

        $data["event_categories"] = $this->db->select("event_ctg.*, event_type.type")
            ->from("event_ctg")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->join("ctg_estab", "ctg_estab.event_ctg_id = event_ctg.id")
            ->where("ctg_estab.estab_id", $id)
            ->get()->result_array();
        $data["estab_id"] = $id;

        $data['page_info'] = ['name' => 'establishment_single'];

        if (!empty($data["user"])){
            $this->load->view('front/includes/index',$data);
        }

    }

    public function register($id)
    {


        if ($this->session->userdata("user_type") != 4){
            redirect(base_url("login"));
        }

        $data["user"] = $this->db->where("id", $id)->get("users")->row_array();
        $data["estab"] = $this->db->where("user_id", $id)->where("status", 1)->get("estab")->row_array();
        $data["gallery"] = $this->db->where("estab_id", $id)->get("gallery_estab")->result_array();

        $data["event_categories"] = $this->db->select("event_ctg.*, event_type.type")
            ->from("event_ctg")
            ->join("event_type", "event_type.id = event_ctg.type_id")
            ->join("ctg_estab", "ctg_estab.event_ctg_id = event_ctg.id")
            ->where("ctg_estab.estab_id", $id)
            ->get()->result_array();
        $data["estab_id"] = $id;

        $data['page_info'] = ['name' => 'establishment_single_event_booking'];

        if (!empty( $data["user"])){
            $this->load->view('front/includes/index',$data);
        }
    }

    public function register_action($id)
    {
        if (empty($this->session->userdata("user_type")) || $this->session->userdata("user_type") != 4){
            redirect(base_url("login"));
        }

        $title = $this->input->post("title", true);
        $description = $this->input->post("description", true);
        $event_catg = $this->input->post("event_catg", true);
        $event_start = $this->input->post("event_start", true);
        $event_end = $this->input->post("event_end", true);

        if (!empty($title) && !empty($description) && !empty($event_catg) && !empty($event_start) && !empty($event_end) ){

            $this->db->insert("events", array(
                "customer_id" => $this->session->userdata("user_id"),
                "estab_id" => $id,
                "provider_id" => 0,
                "title" => $title,
                "description" => $description,
                "event_start" => date('Y-m-d', strtotime($event_start)),
                "event_end" => date('Y-m-d', strtotime($event_end)),
                "provider_status" => 0,
                "estab_status" => 0
            ));

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

    public function choose_for_provider($estab_id)
    {
        $this->db->where("id", $this->session->userdata("estabch_event"))->update("events", array(
            "estab_id" => $estab_id
        ));
        $this->session->set_flashdata("suc", "Successfully choosed");
        redirect(base_url("provider-events"));
    }
    
    
}
