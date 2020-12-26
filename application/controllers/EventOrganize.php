<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventOrganize extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_info'] = ['name' => 'choose_event_organizer'];
        $this->load->view('front/includes/index',$data);
    }


    public function services()
    {
        $data['services'] = $this->db->select('services.id, services.name_en as name')->get('services')->result_array();
        $data['cities'] = $this->db->select('city.id, city.name_en as name')->get('city')->result_array();
        $data['ctgs'] = $this->db->select('event_ctg.id, event_ctg.name_en as name, event_type.type')->
            from('event_ctg')->join('event_type','event_type.id = event_ctg.type_id','left')->
            get()->result_array();
        if ($this->input->get('city')){
            $data['selectedCity'] = $this->input->get('city');
        }
        if ($this->input->get('ctg')){
            $data['selectedCtg'] = $this->input->get('ctg');
        }
        $data['page_info'] = ['name' => 'choose_services_organizers_list'];
        $this->load->view('front/includes/index',$data);
    }

    public function services_load()
    {

        $services = $this->input->get('services',true);
        $city = $this->input->get('city',true);
        $ctg = $this->input->get('ctg',true);
        $search = $this->input->get('search',true);

        //Make string for query
        $search_cafe = $this->search_maker($search, 'users.name');
        $search_service = $this->search_maker($search, 'users.surname');
        $search_category = $this->search_maker($search, "services.name_en");
        $amenity_string = $this->string_maker($services,'service_provider.service_id');

        $query_string_having = 'true ';
        if (!empty($search_cafe)){
            $query_string_having = $query_string_having.' and ('.$search_cafe.' or '.$search_category.' or '.$search_service.")";
        }
        if (!empty($amenity_string)){
            $query_string_having = $query_string_having.' and '.$amenity_string;
        }

        $query_string_where = 'providers.status = 1 ';
        if (!empty($city)){
            $query_string_where = $query_string_where.'and (providers.city_id = '.$city.')';
        }
        if (!empty($ctg)){
            $query_string_where = $query_string_where.'and (ctg_provider.event_ctg_id = '.$ctg.')';
        }


        $providers = $this->db->query("
        SELECT DISTINCT providers.user_id, providers.img, users.name, users.surname, city.name_en as city, users.mobile, providers.facebook, providers.instagram, services.name_en
        FROM providers 
        INNER JOIN users 
        ON users.id = providers.user_id
        LEFT JOIN city
        ON city.id = providers.city_id
        RIGHT JOIN service_provider
        ON service_provider.provider_id = providers.user_id
        LEFT JOIN services
        ON services.id = service_provider.service_id
        RIGHT JOIN ctg_provider 
        ON ctg_provider.provider_id = providers.user_id
        WHERE $query_string_where
        group by providers.user_id
		having $query_string_having
        ")->result_array();

        print_r(json_encode($providers));
    }


    public function establishments()
    {
        $data['cities'] = $this->db->select('city.id, city.name_en as name')->get('city')->result_array();
        $data['ctgs'] = $this->db->select('event_ctg.id, event_ctg.name_en as name, event_type.type')->
        from('event_ctg')->join('event_type','event_type.id = event_ctg.type_id','left')->
        get()->result_array();
        if ($this->input->get('city')){
            $data['selectedCity'] = $this->input->get('city');
        }
        if ($this->input->get('ctg')){
            $data['selectedCtg'] = $this->input->get('ctg');
        }
        $data['page_info'] = ['name' => 'choose_establishment_list'];
        $this->load->view('front/includes/index',$data);
    }

    public function estabs_load()
    {
        $city = $this->input->get('city',true);
        $ctg = $this->input->get('ctg',true);
        $search = $this->input->get('search',true);

        //Make string for query
        $search_cafe = $this->search_maker($search, 'estab.name');
        $search_category = $this->search_maker($search, "estab.address_en");

        $query_string_having = 'true ';
        if (!empty($search_cafe)){
            $query_string_having = $query_string_having.' and ('.$search_cafe.' or '.$search_category.")";
        }

        $query_string_where = 'estab.status = 1 ';
        if (!empty($city)){
            $query_string_where = $query_string_where.'and (estab.city_id = '.$city.')';
        }
        if (!empty($ctg)){
            $query_string_where = $query_string_where.'and (ctg_estab.event_ctg_id = '.$ctg.')';
        }


        $providers = $this->db->query("
        SELECT DISTINCT estab.user_id, estab.img, users.name, users.surname, city.name_en as city, users.mobile, estab.facebook, estab.instagram, estab.name as estab, estab.address_en as address
        FROM estab 
        INNER JOIN users 
        ON users.id = estab.user_id
        LEFT JOIN city
        ON city.id = estab.city_id
        RIGHT JOIN ctg_estab 
        ON ctg_estab.estab_id = estab.user_id
        WHERE $query_string_where
        group by estab.user_id
		having $query_string_having
        ")->result_array();

        print_r(json_encode($providers));
    }



    private function string_maker($array,$column){
        if (!empty($array)) {
            $array = explode(" ",$array);
            $string = "(sum(case when ".$column." =";
            foreach ($array as $item) {
                $string = $string . " $item then 1 else 0 end) > 0 and sum(case when ".$column." =";
            }
            $string = substr($string, 0, -(21 + strlen($column)));
            $string = $string . ')';
        }else{
            $string = null;
        }
        return $string;
    }
    private function search_maker($array,$column){
        if (!empty($array)) {
            $array = explode(" ",$array);
            $string = "(".$column." LIKE '%";
            foreach ($array as $item) {
                $string = $string . "$item%' or".$column." LIKE '%";
            }
            $string = substr($string, 0, -(11 + strlen($column)));
            $string = $string . ')';
        }else{
            $string = null;
        }
        return $string;
    }
    private function search_for_adds($search, $column){
        $string = "(sum(case when ".$column." LIKE '%".$search."%' then 1 else 0 end) > 0)";
    }


   


}
