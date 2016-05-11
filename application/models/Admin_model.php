<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
	public $key_jos = "asik-asik_jos";    
	
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        //$this->load->library('email');
    }
	
	function login(){
        $config = array(
            array('field' => 'user_name', 'label' => 'User Name', 'rules' => 'required'),
            array('field' => 'password', 'label' => 'Password', 'rules' => 'required')
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == true){
            $user_name = $this->input->post('user_name');
            $upass = $this->input->post('password');
            $login = $this->my_lib->login($user_name, $upass);
            if ($login == "1"){
                redirect('admin_controller');
            }else{
                return $login;
            }
        }else{
            return validation_errors();
        }
    }
	
	function logout(){
        $this->my_lib->logout();
        redirect('admin_controller/login');
    }
   
    function admin_menu(){
        return $this->my_lib->menu_be();
    }
	
    function edit_menu($id){
        $config = array(
            array('field' => 'menu_name', 'label' => 'menu name', 'rules' => 'required'),
            array('field' => 'menu_name_id', 'label' => 'menu name indonesia', 'rules' => 'required'),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == true){            
            $data = array(
                        'cu_by' => 'admin',
                        'created' => date('Y-m-d H:i:s'),
                        'menu_name' => $this->input->post('menu_name'),
                        'menu_name_id' => $this->input->post('menu_name_id'),
                    );
            $this->db->where('id', $id);
            $this->db->update('telkom_menu', $data);
            redirect('admin_controller/menu');
        }else{
            return validation_errors();
        }
    }

	function cek_auth(){
		if ($this->session->userdata('ses_uid') != ''){
			return $this->session->userdata('ses_user_name');
		}else{
			redirect('admin_controller/login');
		}
	}

    function hapus_users($id){
        $this->my_lib->hapus('users', $id);
        redirect('admin_controller/users');
    }

    // home
    function home() {
        return $this->my_lib->get_main_content_image('home');
    }

    function add_home(){
        //return $this->my_lib->add_main_content('home');
        $balikan = $this->my_lib->add_main_content_image('home');
        if ($balikan == "1") {
            redirect('admin_controller/home');
        }else{
            return $balikan;
        }
    }

    function edit_home($id, $id_image){
        //return $this->my_lib->edit_main_content($id);
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/home');
        }else{
            return $balikan;
        }
    }

    function delete_home($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/home');
    }

    // building
    function building() {
        return $this->my_lib->get_main_content('building');
    }

    function add_building(){
        $balikan = $this->my_lib->add_main_content('building');
        if ($balikan == "1") {
            redirect('admin_controller/building');
        }else{
            return $balikan;
        }
    }

    function edit_building($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/building');
        }else{
            return $balikan;
        }
    }

    // about us
    function about() {
        //return $this->my_lib->get_main_content_image('about');
        return $this->my_lib->get_main_content('about');
    }

    function add_about(){
        $balikan = $this->my_lib->add_main_content('about');
        if ($balikan == "1") {
            redirect('admin_controller/about');
        }else{
            return $balikan;
        }
    }

    function edit_about($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/about');
        }else{
            return $balikan;
        }
    }

    function add_image($content_name, $id_table){
        $balikan = $this->my_lib->tambah_slide($content_name, $id_table);
        if ($balikan == "1") {
            redirect('admin_controller/image_'.$content_name.'/'.$id_table);
            //redirect('admin_controller/image_about/'.$id_table);
        }else{
            return $balikan;
        }
    }

    function edit_image($content_name, $id_image, $id_table){
        $balikan = $this->my_lib->ubah_slide($id_image);
        if ($balikan == "1") {
            redirect('admin_controller/image_'.$content_name.'/'.$id_table);
            //redirect('admin_controller/image_about/'.$id_table);
        }else{
            return $balikan;
        }
    }

    function delete_image_about($id, $pid){
        $this->my_lib->hapus_image($id);
        redirect('admin_controller/image_about/'.$pid);
    }

    // board of directors
    function bod($pid) {
        return $this->my_lib->get_subcontent_image($pid);
    }

    function add_bod($pid){
        $balikan = $this->my_lib->add_submain_content_image('bod', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/bod/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_bod($id, $id_image, $pid){
        $balikan = $this->my_lib->edit_submain_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/bod/'.$pid);
        }else{
            return $balikan;
        }
    }

    function delete_bod($id, $pid){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/bod/'.$pid);
    }

    // awards
    function award() {
        return $this->my_lib->get_main_content('award');
    }

    function add_award(){
        $balikan = $this->my_lib->add_main_content('award');
        if ($balikan == "1") {
            redirect('admin_controller/award');
        }else{
            return $balikan;
        }
    }

    function edit_award($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/award');
        }else{
            return $balikan;
        }
    }

    function delete_image_award($id, $pid){
        $this->my_lib->hapus_image($id);
        redirect('admin_controller/image_award/'.$pid);
    }

    function awards($pid) {
        return $this->my_lib->get_subcontent_image($pid);
    }

    function add_awards($pid){
        $balikan = $this->my_lib->add_submain_content_image('awards', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/awards/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_awards($id, $id_image, $pid){
        $balikan = $this->my_lib->edit_submain_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/awards/'.$pid);
        }else{
            return $balikan;
        }
    }

    function delete_awards($id, $pid){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/awards/'.$pid);
    }

    // building specification
    function buildingspec() {
        return $this->my_lib->get_main_content('buildingspec');
    }

    function add_buildingspec($pid){
        $balikan = $this->my_lib->add_submain_content('buildingspec', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/buildingspec');
        }else{
            return $balikan;
        }
    }

    function edit_buildingspec($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/buildingspec');
        }else{
            return $balikan;
        }
    }

    function delete_image_buildingspec($id, $pid){
        $this->my_lib->hapus_image($id);
        redirect('admin_controller/image_buildingspec/'.$pid);
    }

    // specification
    function specification($pid) {
        return $this->my_lib->get_subcontent($pid);
    }

    function add_specification($pid){
        $balikan = $this->my_lib->add_submain_content('specification', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/specification/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_specification($id, $pid){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/specification/'.$pid);
        }else{
            return $balikan;
        }
    }

    function delete_specification($id, $pid){
        $this->my_lib->hapus_content($id);
        redirect('admin_controller/specification/'.$pid);
    }

    // projject teams
    function project_team() {
        return $this->my_lib->get_main_content('project_team');
    }

    function add_project_team($pid){
        $balikan = $this->my_lib->add_submain_content('project_team', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/project_team/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_project_team($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/project_team');
        }else{
            return $balikan;
        }
    }

    function team($pid) {
        return $this->my_lib->get_subcontent($pid);
    }

    function add_team($pid){
        $balikan = $this->my_lib->add_submain_content('team', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/team/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_team($id, $pid){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/team/'.$pid);
        }else{
            return $balikan;
        }
    }

    function delete_team($id, $pid){
        $this->my_lib->hapus_content($id);
        redirect('admin_controller/team/'.$pid);
    }

    // location
    function location() {
        return $this->my_lib->get_main_content('location');
    }

    function add_location(){
        $balikan = $this->my_lib->add_main_content('location');
        if ($balikan == "1") {
            redirect('admin_controller/location');
        }else{
            return $balikan;
        }
    }

    function edit_location($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/location');
        }else{
            return $balikan;
        }
    }

    // floorplan
    function floorplan() {
        return $this->my_lib->get_main_content('floorplan');
    }

    function add_floorplan(){
        $balikan = $this->my_lib->add_main_content('floorplan');
        if ($balikan == "1") {
            redirect('admin_controller/floorplan');
        }else{
            return $balikan;
        }
    }

    function edit_floorplan($id){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/floorplan');
        }else{
            return $balikan;
        }
    }

    function zone_floorplan($pid) {
        return $this->my_lib->get_subcontent_image($pid);
    }

    function add_zone_floorplan($pid){
        $balikan = $this->my_lib->add_submain_content_image('zone_floorplan', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/zone_floorplan/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_zone_floorplan($id, $id_image, $pid){
        $balikan = $this->my_lib->edit_submain_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/zone_floorplan/'.$pid);
        }else{
            return $balikan;
        }
    }

    function image_floorplan($pid) {
        return $this->my_lib->get_subcontent_image($pid);
    }
    
    function add_image_floorplan($pid, $mid){
        $balikan = $this->my_lib->add_submain_content_image('image_floorplan', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/image_floorplan/'.$pid.'/'.$mid);
        }else{
            return $balikan;
        }
    }

    function edit_image_floorplan($id, $id_image, $pid, $mid){
        $balikan = $this->my_lib->edit_submain_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/image_floorplan/'.$pid.'/'.$mid);
        }else{
            return $balikan;
        }
    }

    function delete_image_floorplan($id, $pid, $mid){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/image_floorplan/'.$pid.'/'.$mid);
    }

    // facilities
    function facilities() {
        return $this->my_lib->get_main_content_image('facilities');
    }

    function add_facilities(){
        $balikan = $this->my_lib->add_main_content_image('facilities');
        if ($balikan == "1") {
            redirect('admin_controller/facilities');
        }else{
            return $balikan;
        }
    }

    function edit_facilities($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/facilities');
        }else{
            return $balikan;
        }
    }

    function delete_facilities($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/facilities');
    }

    // news events
    function newsevents() {
        return $this->my_lib->get_main_content_image_desc('newsevents');
    }

    function add_newsevents(){
        //$balikan = $this->my_lib->add_main_content_image('newsevents');
        $balikan = $this->my_lib->add_main_content_newsevent('newsevents');
        if ($balikan == "1") {
            redirect('admin_controller/newsevents');
        }else{
            return $balikan;
        }
    }

    function edit_newsevents($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/newsevents');
        }else{
            return $balikan;
        }
    }

    function delete_newsevents($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/newsevents');
    }

    function detail_newsevents($pid) {
        //return $this->my_lib->get_subcontent($pid);
        return $this->my_lib->get_subcontent_image($pid);
    }

    function add_detail_newsevents($pid){
        $balikan = $this->my_lib->add_submain_content('detail_newsevents', $pid);
        if ($balikan == "1") {
            redirect('admin_controller/detail_newsevents/'.$pid);
        }else{
            return $balikan;
        }
    }

    function edit_detail_newsevents($id, $pid){
        $balikan = $this->my_lib->edit_main_content($id);
        if ($balikan == "1") {
            redirect('admin_controller/detail_newsevents/'.$pid);
        }else{
            return $balikan;
        }
    }

    function delete_detail_newsevents($id, $pid){
        //$this->my_lib->hapus_content_image($id);
        $this->my_lib->hapus('images', $id);
        redirect('admin_controller/detail_newsevents/'.$pid);
    }

    // gallery
    function gallery() {
        return $this->my_lib->get_main_content_image('gallery');
    }

    function add_gallery(){
        $balikan = $this->my_lib->add_main_content_image('gallery');
        if ($balikan == "1") {
            redirect('admin_controller/gallery');
        }else{
            return $balikan;
        }
    }

    function edit_gallery($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/gallery');
        }else{
            return $balikan;
        }
    }

    function delete_gallery($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/gallery');
    }

    // contact
    function contact() {
        //return $this->my_lib->get_main_content('contact');
        return $this->my_lib->get_main_content_image('contact');
    }

    function add_contact(){
        $balikan = $this->my_lib->add_main_content_image('contact');
        if ($balikan == "1") {
            redirect('admin_controller/contact');
        }else{
            return $balikan;
        }
    }

    function edit_contact($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/contact');
        }else{
            return $balikan;
        }
    }

    function delete_contact($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/contact');
    }

    // background contact
    function background_contact(){
        $balikan = $this->my_lib->get_main_content_image('background_contact');
        if ($balikan == "1") {
            redirect('admin_controller/background_contact');
        }else{
            return $balikan;
        }
    }

    function add_background_contact(){
        $balikan = $this->my_lib->add_main_content_image('background_contact');
        if ($balikan == "1") {
            redirect('admin_controller/background_contact');
        }else{
            return $balikan;
        }
    }

    function edit_background_contact($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/background_contact');
        }else{
            return $balikan;
        }
    }

    function delete_background_contact($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/background_contact');
    }

    // sosmed
    function sosmed() {
        return $this->my_lib->get_main_content_image('sosmed');
    }

    function add_sosmed(){
        $balikan = $this->my_lib->add_main_content_image('sosmed');
        if ($balikan == "1") {
            redirect('admin_controller/sosmed');
        }else{
            return $balikan;
        }
    }

    function adit_sosmed($id, $id_image){
        $balikan = $this->my_lib->edit_main_content_image($id, $id_image);
        if ($balikan == "1") {
            redirect('admin_controller/sosmed');
        }else{
            return $balikan;
        }
    }

    function delete_sosmed($id){
        $this->my_lib->hapus_content_image($id);
        redirect('admin_controller/sosmed');
    }
    // end sosmed	

    function messages(){
        return $this->my_lib->get_all_desc('contact');
    }

    function delete_messages($id){
        $this->my_lib->hapus('contact', $id);
        redirect('admin_controller/messages');
    }
}