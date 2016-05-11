<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('admin_model');
    }

    public function index()
    { 
		 $data['admin'] = $this->admin_model->cek_auth();
         $data['admin_menu'] = $this->admin_model->admin_menu();
         $this->template->admin_display('admin/index', $data);
    }    
	
    public function login()
    {
        $data['error_post'] = $this->admin_model->login();
		$this->load->view('admin/login', $data);
    }

    public function logout(){
        $this->admin_model->logout();
    }

    public function menu(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $this->template->admin_display('admin/menu', $data);
    }

    public function add_menu(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        //$data['error_post'] = $this->admin_model->add_menu();
        $data['error_post'] = $this->my_lib->add_menu();
        //$this->template->admin_display('admin/form/form_menu', $data);
        $this->template->admin_display('admin/form/form_menu_spesial', $data);
    }

    public function edit_menu($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['menu'] = $this->my_lib->get_per_id('menu', $id);
        $data['error_post'] = $this->my_lib->edit_menu($id);
        $this->template->admin_display('admin/form/form_menu', $data);
    }

    public function users(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['users'] = $this->my_lib->users();
        $this->template->admin_display('admin/users', $data);
    }

    public function add_users(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->my_lib->add_users();
        $this->template->admin_display('admin/form/form_users', $data);
    }

    public function edit_users($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->my_lib->edit_users($id);
        $data['user'] = $this->my_lib->get_per_id('users', $id);
        $this->template->admin_display('admin/form/form_users', $data);
    }

    public function delete_users($id){
        $this->admin_model->hapus_users($id);
    }

    // home
    public function home(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['home'] = $this->admin_model->home();
        $this->template->admin_display('admin/home', $data);
    }

    public function add_home(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_home();
        $this->template->admin_display('admin/form/form_home', $data);
    }

    public function edit_home($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_home($id, $id_image);
        //$data['home'] = $this->my_lib->get_per_id('contents', $id);
        $data['home'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_home', $data);
    }

    public function delete_home($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_home($id);
    }

    // building
    public function building(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['building'] = $this->admin_model->building();
        $this->template->admin_display('admin/building', $data);
    }

    public function add_building(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_building();
        $this->template->admin_display('admin/form/form_building', $data);
    }

    public function edit_building($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_building($id);
        $data['building'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_building', $data);
    }

    // about us
    public function about(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['about'] = $this->admin_model->about();
        $this->template->admin_display('admin/about', $data);
    }

    public function add_about(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_about();
        $this->template->admin_display('admin/form/form_about', $data);
    }

    public function edit_about($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_building($id);
        $data['about'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_about', $data);
    }

    public function image_about($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['img'] = $this->my_lib->get_slide('about');
        $data['id'] = $id;
        $this->template->admin_display('admin/image_abaut', $data);
    }

    public function add_image($content_name, $id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_image($content_name, $id);
        $data['id_content'] = $id;
        $data['kembali'] = $content_name;
        $this->template->admin_display('admin/form/form_image', $data);
    }

    public function edit_image($content_name, $id_image, $id_table){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_image($content_name, $id_image, $id_table);
        $data['image'] = $this->my_lib->get_per_id('images', $id_image);
        $data['id_content'] = $id_table;
        $data['kembali'] = $content_name;
        $this->template->admin_display('admin/form/form_image', $data);
    }

    public function delete_image_about($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_image_about($id, $pid);
    }

    // board of directors
    public function bod($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['bod'] = $this->admin_model->bod($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/bod', $data);
    }

    public function add_bod($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_bod($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_bod', $data);
    }

    public function edit_bod($id, $id_image, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_bod($id, $id_image, $pid);
        $data['pid'] = $pid;
        $data['bod'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_bod', $data);
    }

    public function delete_bod($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_bod($id, $pid);
    }

    // awards
    public function award(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['award'] = $this->admin_model->award();
        $this->template->admin_display('admin/award', $data);
    }

    public function add_award(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_award();
        $this->template->admin_display('admin/form/form_award', $data);
    }

    public function edit_award($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_award($id);
        $data['award'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_award', $data);
    }

    public function image_award($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['img'] = $this->my_lib->get_slide('award');
        $data['id'] = $id;
        $this->template->admin_display('admin/image_award', $data);
    }

    public function delete_image_award($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_image_award($id, $pid);
    }

    public function awards($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['awards'] = $this->admin_model->awards($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/awards', $data);
    }

    public function add_awards($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_awards($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_awards', $data);
    }

    public function edit_awards($id, $id_image, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_awards($id, $id_image, $pid);
        $data['pid'] = $pid;
        $data['awards'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_awards', $data);
    }

    public function delete_awards($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_awards($id, $pid);
    }

    // building specification
    public function buildingspec(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['buildingspec'] = $this->admin_model->buildingspec();
        $this->template->admin_display('admin/buildingspec', $data);
    }

    public function add_buildingspec($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_buildingspec($pid);
        $this->template->admin_display('admin/form/form_buildingspec', $data);
    }

    public function edit_buildingspec($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_buildingspec($id);
        $data['buildingspec'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_buildingspec', $data);
    }

    public function image_buildingspec($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['img'] = $this->my_lib->get_slide('buildingspec');
        $data['id'] = $id;
        $this->template->admin_display('admin/image_buildingspec', $data);
    }

    public function delete_image_buildingspec($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_image_buildingspec($id, $pid);
    }

    // specification
    public function specification($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['specification'] = $this->admin_model->specification($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/specification', $data);
    }

    public function add_specification($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_specification($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_specification', $data);
    }

    public function edit_specification($id, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_specification($id, $pid);
        $data['specification'] = $this->my_lib->get_per_id('contents', $id);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_specification', $data);
    }

    public function delete_specification($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_specification($id, $pid);
    }

    //projec team
    public function project_team(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['project_teams'] = $this->admin_model->project_team();
        $this->template->admin_display('admin/project_teams', $data);
    }

    public function add_project_team($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_project_team($pid);
        $this->template->admin_display('admin/form/form_project_team', $data);
    }

    public function edit_project_team($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_project_team($id);
        $data['project_team'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_project_team', $data);
    }

    public function team($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['teams'] = $this->admin_model->team($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/team', $data);
    }

    public function add_team($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_team($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_team', $data);
    }

    public function edit_team($id, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_team($id, $pid);
        $data['team'] = $this->my_lib->get_per_id('contents', $id);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_team', $data);
    }

    public function delete_team($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_team($id, $pid);
    }

    // loccation
    public function location(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['location'] = $this->admin_model->location();
        $this->template->admin_display('admin/location', $data);
    }

    public function add_location(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_location();
        $this->template->admin_display('admin/form/form_location', $data);
    }

    public function edit_location($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_location($id);
        $data['location'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_location', $data);
    }

    // floorplan
    public function floorplan(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['floorplan'] = $this->admin_model->floorplan();
        $this->template->admin_display('admin/floorplan', $data);
    }

    public function add_floorplan(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_floorplan();
        $this->template->admin_display('admin/form/form_floorplan', $data);
    }

    public function edit_floorplan($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_floorplan($id);
        $data['floorplan'] = $this->my_lib->get_per_id('contents', $id);
        $this->template->admin_display('admin/form/form_floorplan', $data);
    }

    public function zone_floorplan($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['zone_floorplan'] = $this->my_lib->get_subcontent_image($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/zone_floorplan', $data);
    }

    public function add_zone_floorplan($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_zone_floorplan($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_zone_floorplan', $data);
    }

    public function edit_zone_floorplan($id, $id_image, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_zone_floorplan($id, $id_image, $pid);
        $data['zone_floorplan'] = $this->my_lib->get_main_content_image_id($id);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_zone_floorplan', $data);
    }

    public function image_floorplan($pid, $mid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['floorplan_image'] = $this->my_lib->get_subcontent_image($pid);
        $data['pid'] = $pid;
        $data['mid'] = $mid;
        $this->template->admin_display('admin/image_floorplan', $data);
    }

    public function add_image_floorplan($pid, $mid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_image_floorplan($pid, $mid);
        $data['pid'] = $pid;
        $data['mid'] = $mid;
        $this->template->admin_display('admin/form/form_image_floorplan', $data);
    }

    public function edit_image_floorplan($id, $id_image, $pid, $mid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_image_floorplan($id, $id_image, $pid, $mid);
        $data['image_floorplan'] = $this->my_lib->get_main_content_image_id($id);
        $data['pid'] = $pid;
        $data['mid'] = $mid;
        $this->template->admin_display('admin/form/form_image_floorplan', $data);
    }

    public function delete_image_floorplan($id, $pid, $mid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_image_floorplan($id, $pid, $mid);
    }

    // facilities
    public function facilities(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['facilities'] = $this->admin_model->facilities();
        $this->template->admin_display('admin/facilities', $data);
    }

    public function add_facilities(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_facilities();
        $this->template->admin_display('admin/form/form_facilities', $data);
    }

    public function edit_facilities($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_facilities($id, $id_image);
        $data['facilities'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_facilities', $data);
    }

    public function delete_facilities($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_facilities($id);
    }

    // news events
    public function newsevents(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['newsevents'] = $this->admin_model->newsevents();
        $this->template->admin_display('admin/newsevents', $data);
    }

    public function add_newsevents(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_newsevents();
        $this->template->admin_display('admin/form/form_newsevents', $data);
    }

    public function edit_newsevents($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_newsevents($id, $id_image);
        $data['newsevents'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_newsevents', $data);
    }

    public function delete_newsevents($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_newsevents($id);
    }

    public function detail_newsevents($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['detail_newsevents'] = $this->admin_model->detail_newsevents($pid);
        $data['newsevent'] = $this->my_lib->get_subcontent($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/detail_newsevents', $data);
    }

    public function add_detail_newsevents($pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_detail_newsevents($pid);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_detail_newsevents', $data);
    }

    public function edit_detail_newsevents($id, $pid){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_detail_newsevents($id, $pid);
        $data['detail_newsevents'] = $this->my_lib->get_per_id('contents', $id);
        $data['pid'] = $pid;
        $this->template->admin_display('admin/form/form_detail_newsevents', $data);
    }

    public function delete_detail_newsevents($id, $pid){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_detail_newsevents($id, $id);
    }

    public function image_detail_newsevents($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['img'] = $this->my_lib->get_slide_idtable($id);
        $data['pid'] = $this->my_lib->get_per_id('contents', $id);
        $data['id'] = $id;
        $this->template->admin_display('admin/image_detail_newsevents', $data);
    }

    // gallery
    public function gallery(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['gallery'] = $this->admin_model->gallery();
        $this->template->admin_display('admin/gallery', $data);
    }

    public function add_gallery(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_gallery();
        $this->template->admin_display('admin/form/form_gallery', $data);
    }

    public function edit_gallery($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_gallery($id, $id_image);
        $data['gallery'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_gallery', $data);
    }

    public function delete_gallery($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_gallery($id);
    }

    // contact
    public function contact(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['contact'] = $this->admin_model->contact();
        $this->template->admin_display('admin/contact', $data);
    }

    public function add_contact(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_contact();
        $this->template->admin_display('admin/form/form_contact', $data);
    }

    public function edit_contact($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_contact($id, $id_image);
        //$data['contact'] = $this->my_lib->get_per_id('contents', $id);
        $data['contact'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_contact', $data);
    }

    public function delete_contact($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_contact($id);
    }

    public function image_contact($id){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['img'] = $this->my_lib->get_slide('contact');
        $data['id'] = $id;
        $this->template->admin_display('admin/image_contact', $data);
    }

    // background contact
    public function background_contact(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['background_contact'] = $this->admin_model->background_contact();
        $this->template->admin_display('admin/background_contact', $data);
    }

    public function add_background_contact(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_background_contact();
        $this->template->admin_display('admin/form/form_background_contact', $data);
    }

    public function edit_background_contact($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->edit_gallery($id, $id_image);
        $data['background_contact'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_background_contact', $data);
    }

    public function delete_background_contact($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_background_contact($id);
    }

    // sosmed
    public function sosmed(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['sosmed'] = $this->admin_model->sosmed();
        $this->template->admin_display('admin/sosmed', $data);
    }

    public function add_sosmed(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->add_sosmed();
        $this->template->admin_display('admin/form/form_sosmed', $data);
    }

    public function edit_sosmed($id, $id_image){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['error_post'] = $this->admin_model->adit_sosmed($id, $id_image);
        $data['sosmed'] = $this->my_lib->get_main_content_image_id($id);
        $this->template->admin_display('admin/form/form_sosmed', $data);
    }

    public function delete_sosmed($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_sosmed($id);
    }

    public function messages(){
        $data['admin'] = $this->admin_model->cek_auth();
        $data['admin_menu'] = $this->admin_model->admin_menu();
        $data['message'] = $this->admin_model->messages();
        $this->template->admin_display('admin/message', $data);
    }

    public function delete_messages($id){
        $this->admin_model->cek_auth();
        $this->admin_model->delete_messages($id);
    }
}
