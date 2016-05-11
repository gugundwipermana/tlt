<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site_model extends CI_Model {
	
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->library('email');
    }

    function menu(){
    	$menu = $this->my_lib->menu_fe();
    	return $this->my_lib->data_array_menu($menu);
    }

    function sub_menu(){
        return $this->my_lib->sub_menu_fe(5);
    }

    function home(){
    	$home = $this->my_lib->get_main_content_image('home');
    	return $this->my_lib->data_array_object_image($home);
    }

    function building(){
    	$building = $this->my_lib->get_main_content('building');
    	return $this->my_lib->data_array_object($building);
    }

    function about(){
        $about = $this->my_lib->get_main_content('about');
        return $this->my_lib->data_array_object($about);
    }

    function about_us(){
        $about = $this->my_lib->get_main_content_image('about');
        return $this->my_lib->data_array_object_image($about);
    }

    function award(){
        $award = $this->my_lib->get_main_content('award');
        return $this->my_lib->data_array_object($award);
    }

    function buildingspec(){
        $buildingspec = $this->my_lib->get_main_content('buildingspec');
        return $this->my_lib->data_array_object($buildingspec);
    }

    function project_team(){
        $project_team = $this->my_lib->get_main_content('project_team');
        return $this->my_lib->data_array_object($project_team);
    }

    function team(){
        $team = $this->my_lib->get_main_content('team');
        return $this->my_lib->data_array_object($team);
    }

    function location(){
        $location = $this->my_lib->get_main_content('location');
        return $this->my_lib->data_array_object($location);
    }

    function floorplan(){
        $floorplan = $this->my_lib->get_main_content('floorplan');
        return $this->my_lib->data_array_object($floorplan);
    }

    function zone_floorplan(){
        $zone_floorplan = $this->my_lib->get_main_content_image('zone_floorplan');
        return $this->my_lib->data_array_object_image($zone_floorplan);
    }

    function image_floorplan(){
        $image_floorplan = $this->my_lib->get_main_content_image('image_floorplan');
        return $this->my_lib->data_array_object_image($image_floorplan);
    }

    function facilities(){
        $facilities = $this->my_lib->get_main_content_image('facilities');
        return $this->my_lib->data_array_object_image($facilities);
    }

    function newsevents(){
        $newsevents = $this->my_lib->get_main_content_image_desc('newsevents');
        return $this->my_lib->data_array_object_image($newsevents);
    }

    function gallery(){
        $gallery = $this->my_lib->get_main_content_image('gallery');
        return $this->my_lib->data_array_object_image($gallery);
    }

    function contact(){
        $contact = $this->my_lib->get_main_content_image('contact');
        return $this->my_lib->data_array_object_image($contact);
    }

    function background_contact(){
        $ddata = $this->my_lib->get_main_content_image('background_contact');
        return $this->my_lib->data_array_object_image($ddata);
    }

    function sosmed(){
        $sosmed = $this->my_lib->get_main_content_image('sosmed');
        return $this->my_lib->data_array_object_image($sosmed);
    }

    function bod(){
        $bod = $this->my_lib->get_main_content_image('bod');
        return $this->my_lib->data_array_object_image($bod);
    }

    function award_image(){
        $award = $this->my_lib->get_main_content_image('award');
        return $this->my_lib->data_array_object_image($award);
    }

    function awards(){
        $awards = $this->my_lib->get_main_content_image('awards');
        return $this->my_lib->data_array_object_image($awards);
    }

    function buildingspec_image(){
        $ddata = $this->my_lib->get_main_content_image('buildingspec');
        return $this->my_lib->data_array_object_image($ddata);
    }

    function specification(){
        $ddata = $this->my_lib->get_main_content('specification');
        return $this->my_lib->data_array_object($ddata);
    }

    function detail_newsevent($pid){
        $ddata = $this->my_lib->get_subcontent_image($pid);
        return $this->my_lib->data_array_object_image($ddata);
    }
    
    function get_per_id($id){
        $ddata = $this->my_lib->get_per_id_object('contents', $id);
        return $this->my_lib->data_array_object($ddata);
    }

    function send_message() {
        date_default_timezone_set('Asia/Jakarta');
        $config = array(
            array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
            array('field' => 'phone', 'label' => 'phone', 'rules' => 'required'),
            array('field' => 'message', 'label' => 'message', 'rules' => 'required'),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == true){ 
            $data = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'message' => $this->input->post('message'),
                        'send_date' => date('Y-m-d H:i:s'),
                    );

            $this->db->insert('telkom_contact', $data);
            redirect('');
        }else{
            return validation_errors();
        }
    }

    function url_lang(){
        $bahasa = $this->my_lib->bahasa();
        return str_replace("_", "", $bahasa)."/";
    }

    function cari(){
        $array_link = array(
                array('content'=>'home', 'link'=>'#1'),
                array('content'=>'building', 'link'=>'#2'),
                array('content'=>'location', 'link'=>'#3'),
                array('content'=>'floorplan', 'link'=>'#4'),
                array('content'=>'facilities', 'link'=>'#5'),
                array('content'=>'newsevents', 'link'=>'#6'),
                array('content'=>'gallery', 'link'=>'#7'),
                array('content'=>'contact', 'link'=>'#8'),
                array('content'=>'about', 'link'=>'about'),
                array('content'=>'bod', 'link'=>'about'),
                array('content'=>'awards', 'link'=>'awards'),
                array('content'=>'building', 'link'=>'building'),
                array('content'=>'project', 'link'=>'project'),
                array('content'=>'newsevents', 'link'=>'newsevents'),
                array('content'=>'detail_newsevents', 'link'=>'newsevents'),
            );

        $config = array(
            array('field' => 'key_word', 'label' => 'key word', 'rules' => 'required'),
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == true){
            $key_word = $this->input->post('key_word');
            
            $query = "SELECT * FROM `telkom_contents` where content_name like '%".$key_word."%' or content_description_1 like '%".$key_word."%' or content_description_2 like '%".$key_word."%' or content_description_3 like '%".$key_word."%' or content_description_4 like '%".$key_word."%' or content_description_5 like '%".$key_word."%' or content_description_1_id like '%".$key_word."%' or content_description_2_id like '%".$key_word."%' or content_description_3_id like '%".$key_word."%' or content_description_4_id like '%".$key_word."%' or content_description_5_id like '%".$key_word."%'";
            $hasil = $this->db->query($query)->result();
            
            $balikan = array();
            foreach ($hasil as $key => $value) {
                # cek content_name
                foreach ($array_link as $k => $val) {
                    if ($value->content_name == $val['content']){
                        $lu = base_url($val['link']);
                        $li = base_url('id/'.$val['link']);
                        break;
                    } else {
                        $lu = base_url();
                        $li = base_url('id/');
                    }                    
                }

                if ($value->content_name == 'detail_newsevents') { 
                    $lu = $lu.'/'.$value->content_parent; 
                    $li = $li.'/'.$value->content_parent; 
                }

                $item = array(
                        'content_name' => strip_tags($value->content_name),
                        'content_1'=>strip_tags($value->content_description_1),
                        'content_2'=>strip_tags($value->content_description_2),
                        'content_3'=>strip_tags($value->content_description_3),
                        'content_4'=>strip_tags($value->content_description_4),
                        'content_5'=>strip_tags($value->content_description_5),
                        'content_1_id'=>strip_tags($value->content_description_1_id),
                        'content_2_id'=>strip_tags($value->content_description_2_id),
                        'content_3_id'=>strip_tags($value->content_description_3_id),
                        'content_4_id'=>strip_tags($value->content_description_4_id),
                        'content_5_id'=>strip_tags($value->content_description_5_id),
                        'link'=>$lu,
                        'link_id'=>$li,
                    );
                array_push($balikan, $item);
            }

            return $balikan;
        }else{
            return validation_errors();
        }
    }

    function subscribe(){
        $config = array(
            array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
            array('field' => 'phone', 'label' => 'phone', 'rules' => 'required'),
            array('field' => 'message', 'label' => 'message', 'rules' => 'required')
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == true){
  
            $config['protocol']    = 'smtp'; //'smtp' 'mail' 'sendmail';
            //$config['smtp_host']    = 'mail.psinformatika.com';
            $config['smtp_host']    = 'm001.dapurhosting.com'; //'ssl://smtp.googlemail.com'; //'7001.dapurhosting.com';
            
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_port']    = '465'; //'143' '465' '993' '25' '995'
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'marketing@tlt.co.id';
            $config['smtp_pass']    = 'Marketing2016';
            //$config['smtp_user']    = 'firman@psinformatika.com';
            //$config['smtp_pass']    = 'p51p4ssword';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['crlf'] = "\r\n";
            $config['mailtype'] = 'html'; //'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not
            $config['useragent']           = "CodeIgniter";
            $config['mailpath']            = "/usr/bin/sendmail";
            $config['charset']            = "iso-8859-1";

            $this->email->initialize($config);

            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('marketing@tlt.co.id');
            //$this->email->cc('firman@psinformatika.com');
            //$this->email->cc('another@another-example.com');
            //$this->email->bcc('them@their-example.com');

            $msg = 'name: '.$this->input->post('name').'<br>'.'Phone: '.$this->input->post('phone').'<br><br>'.$this->input->post('message');

            $this->email->subject('Email Subscribe');
            $this->email->message($msg);
            
            $this->email->send();




            $this->email->from('marketing@tlt.co.id');
            $this->email->to($this->input->post('email'), $this->input->post('name'));
            

            $msg = 'Thanks You for your message';


            $this->email->subject('Email Subscribe');
            $this->email->message($msg);
            
            if($this->email->send())
            {
                return '<script>alert("Mail Sent Success!");</script>';
            } else {
                return '<script>alert("Mail Sent Failed!");</script>';
            }






        }else{
            return validation_errors();
        }
    }
    /*
    detail_newsevents => newsevents/$1
    strip_tags($text)
    */
}