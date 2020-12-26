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
        $data["providers"] = $this->db->select("providers.*")
            ->from("providers")
            ->join("service_provider", "service_provider.provider_id = providers.user_id")
            ->join("services", "services.id = service_provider.service_id")
            ->get()->result_array();

//        pr($data["providers"]);


        $data['page_info'] = ['name' => 'choose_services_organizers_list'];
        $this->load->view('front/includes/index',$data);
    }


    public function establishments()
    {
        $data['page_info'] = ['name' => 'choose_establishment_list'];
        $this->load->view('front/includes/index',$data);
    }

    public function service_filter()
    {

        $ctgs = $this->input->get('menu',true);
        $amenities = $this->input->get('amenities',true);
        $type = $this->input->get('type',true);
        $search = $this->input->get('search',true);

        //Make string for query
        $search_cafe = $this->search_maker($search, 'salon.name_az');
        $search_service = $this->search_maker($this->input->get('search',true), "services.service_name_$lang");
        $search_category = $this->search_maker($this->input->get('search',true), "categories.name_$lang");
        $amenity_string = $this->string_maker($amenities,'`as`.`amenity_id`');
        $ctg_string = $this->string_maker($ctgs, 'categories.id');

        $query_string_having = 'true ';
        if (!empty($search_cafe)){
            $query_string_having = $query_string_having.' and ('.$search_cafe.' or '.$search_category.' or '.$search_service.")";
        }
        if (!empty($amenity_string)){
            $query_string_having = $query_string_having.' and '.$amenity_string;
        }
        if (!empty($ctg_string)){
            $query_string_having = $query_string_having.' and '.$ctg_string;
        }
        $query_string_where = 'true ';
        if (!empty($type)){
            $query_string_where = $query_string_where.'and (salon.type_id = '.$type.' or salon.type_id2 = '.$type.')';
        }


        $cafes = $this->db->query("
        SELECT DISTINCT salon.id, salon.name_az, areas.areas_name_$lang as area, city.name_$lang as city, salon.rating, salon.rating_count, salon.img, services.service_name_az, categories.name_az, `type`.name_$lang as type_name
        FROM salon 
        LEFT JOIN areas 
        ON salon.area_id = areas.areas_id 
        LEFT JOIN city 
        ON areas.city_id = city.id
        LEFT JOIN `type`
        ON `type`.id = salon.type_id
        RIGHT JOIN `as` 
        ON `as`.salon_id = salon.id
        RIGHT JOIN css
        ON css.salon_id = salon.id
        LEFT JOIN services
        ON services.service_id = css.service_id
        LEFT JOIN categories
        ON categories.id = services.category_id
        WHERE $query_string_where
        group by salon.id
		having $query_string_having
        ")->result_array();

        print_r(json_encode($cafes));

    }


}
