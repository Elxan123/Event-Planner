<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        echo md5("user");die();

        $data['cities'] = $this->db->select('city.id,city.name_en as name')->get('city')->result_array();
        $data['ctgs'] = $this->db->select('event_ctg.id, event_ctg.name_en as name, event_type.type, event_ctg.img')->from('event_ctg')->
            join('event_type','event_ctg.type_id = event_type.id')->get()->result_array();
        $data['estabs'] = $this->db->query("
        SELECT DISTINCT estab.user_id, estab.img, city.name_en as city, users.mobile, users.email, estab.name as estab, estab.address_en as address
        FROM estab
        INNER JOIN users
        ON users.id = estab.user_id
        LEFT JOIN city
        ON city.id = estab.city_id
        WHERE estab.status = 1
        LIMIT 6
        ")->result_array();
        $data['page_info'] = ['name' => 'home'];
        $this->load->view('front/includes/index',$data);
    }
}
