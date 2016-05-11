<?php
class Site_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('site_model');
    }

    public function index(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['home'] = $this->site_model->home();
        $data['building'] = $this->site_model->building();
        //$data['sub_menu'] = $this->site_model->submenu();
        $data['about'] = $this->site_model->about();
        $data['award'] = $this->site_model->award();
        $data['buildingspec'] = $this->site_model->buildingspec();
        $data['project_team'] = $this->site_model->project_team();
        $data['location'] = $this->site_model->location();
        $data['floorplan'] = $this->site_model->floorplan();
        $data['zone_floorplan'] = $this->site_model->zone_floorplan();
        $data['image_floorplan'] = $this->site_model->image_floorplan();
        $data['facilities'] = $this->site_model->facilities();
        $data['newsevents'] = $this->site_model->newsevents();
        $data['gallery'] = $this->site_model->gallery();
        $data['contact'] = $this->site_model->contact();
        $data['background_contact'] = $this->site_model->background_contact();
        $data['sosmed'] = $this->site_model->sosmed();
        //$data['error_post'] = $this->site_model->send_message();        
        $data['error_post'] = $this->site_model->subscribe();
        
        $this->template->site_display('site/index', $data);
    }

    public function about(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['about'] = $this->site_model->about_us();
        $data['bod'] = $this->site_model->bod();
         //print_r($this->site_model->about_us());
        $this->template->sub_display('site/about', $data);
    }

    public function awards(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['award'] = $this->site_model->award_image();
        $data['awards'] = $this->site_model->awards();
         //print_r($this->site_model->about_us());
        $this->template->sub_display('site/awards', $data);
    }

    public function building(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['buildingspec'] = $this->site_model->buildingspec_image();
        $data['specification'] = $this->site_model->specification();
        //print_r($this->site_model->about_us());
        $this->template->sub_display('site/building', $data);
    }

    public function project(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['project_team'] = $this->site_model->project_team();
        $data['team'] = $this->site_model->team();
        //print_r($this->site_model->about_us());
        $this->template->sub_display('site/project', $data);
    }

    public function newsevents($pid){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['detail_newsevent'] = $this->site_model->detail_newsevent($pid);
        $data['newsevent'] = $this->site_model->get_per_id($pid);
        //$data['newsevents'] = $this->my_lib->get_main_content_image_id($pid);
        //print_r($this->site_model->detail_newsevent($pid));
        $this->template->sub_display('site/newsevents', $data);
    }

    public function search(){
        $data['bahasa'] = $this->site_model->url_lang();
        $data['menu'] = $this->site_model->menu();
        $data['cari'] = $this->site_model->cari();
        //print_r($cari);
        $this->template->sub_display('site/search', $data);
    }
}
