<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_lib {
    protected $_ci;
	var $key_jos = "asik-asik_jos";
    var $depan_db = "telkom_";
    var $sufix = "";

	function __construct()
    {
        $this->_ci =&get_instance();
    }

    public function bahasa(){
        if ($this->_ci->uri->segment(1) == "id") {
            $lang = "_id";
        }else{
            $lang = "";
        }
        return $lang;
    }

    function data_array_object($dataarray) {
        $this->sufix = $this->bahasa();
        $main = array();
        foreach ($dataarray as $i => $hsl) {
            $item = array(
                'id' =>$hsl->id,
                'name' => $hsl->content_name,
                'content_1'=>$hsl->{'content_description_1'.$this->sufix},
                'content_2'=>$hsl->{'content_description_2'.$this->sufix},
                'content_3'=>$hsl->{'content_description_3'.$this->sufix},
                'content_4'=>$hsl->{'content_description_4'.$this->sufix},
                'content_5'=>$hsl->{'content_description_5'.$this->sufix},
                'parent'=>$hsl->content_parent,
            );
            array_push($main,$item);
        }
        return $main;
    }

    function data_array_object_image($dataarray) {
        $this->sufix = $this->bahasa();
        $main = array();
        foreach ($dataarray as $i => $hsl) {
            $item = array(
                'id' =>$hsl->id,
                'name' => $hsl->content_name,
                'content_1'=>$hsl->{'content_description_1'.$this->sufix},
                'content_2'=>$hsl->{'content_description_2'.$this->sufix},
                'content_3'=>$hsl->{'content_description_3'.$this->sufix},
                'content_4'=>$hsl->{'content_description_4'.$this->sufix},
                'content_5'=>$hsl->{'content_description_5'.$this->sufix},
                'parent'=>$hsl->content_parent,
                'image_name'=>$hsl->images_name
            );
            array_push($main,$item);
        }
        return $main;
    }

    function data_array_menu($dataarray){
    	$this->sufix = $this->bahasa();
    	$main = array();
    	foreach ($dataarray as $i => $hsl) {
            $item = array(
                'id' =>$hsl->id,
                'menu_name' => $hsl->{'menu_name'.$this->sufix},
                'route_fe'=>$hsl->route_fe,
                'master'=>$hsl->master,                
            );
            array_push($main,$item);
        }
        return $main;
    }
	
	function login($user_name, $upass){
        $query = $this->_ci->db->get_where($this->depan_db.'users', array('user_name' => $user_name));
        if (count($query->result()) != 0){
            foreach ($query->result() as $row)
            {
                $uid = $row->id;
                $user_name = $row->user_name;
                $name = $row->name;
                $pass = $row->password;
                $gid = $row->group_id;
                $last_login = $row->last_login;
            }


			$this->_ci->load->library('encrypt');
			$decpass = $this->_ci->encrypt->decode($pass, $this->key_jos);
			if ($upass == $decpass){
				$data_session = array(
							'ses_uid'=>$uid,
							'ses_user_name'=>$user_name,
							'ses_name'=>$name,
							'ses_gid'=>$gid
						);

				/** update last  login **/
				$data = array(
							'last_login' => date("Y-m-d h:i:s")
						);
				$this->_ci->db->where('id', $uid);
				$this->_ci->db->update($this->depan_db.'users', $data);

				$this->_ci->load->library('session');
				$this->_ci->session->set_userdata($data_session);

				return "1";
			}else{
				return "Wrong user password ".$pass;
			}
        }else{
            return "Wrong user name";
        }
    }
	
	function logout(){
        $this->_ci->session->sess_destroy();
    }
	
	// users
	function users(){
		$this->_ci->db->select('*');
		return $this->_ci->db->get($this->depan_db.'users')->result();
	}

	function add_users(){
        date_default_timezone_set('Asia/Jakarta');
        $config = array(
            array('field' => 'user_name', 'label' => 'User name', 'rules' => 'required'),
            array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
            array('field' => 'password', 'label' => 'Password', 'rules' => 'required'),
            array('field' => 'cpassword', 'label' => 'Retype Password', 'rules' => 'required|matches[password]')
        );
        $this->_ci->form_validation->set_rules($config);

        if ($this->_ci->form_validation->run() == true){
            // cek user sudah ada atau belum
            $kondisi = array('user_name'=>$this->_ci->input->post('user_name'));
            $this->_ci->db->select('*');
            $this->_ci->db->where($kondisi);
            $this->_ci->db->order_by('id DESC'); 
            $hasil = $this->_ci->db->get('telkom_users')->result();

            if(count($hasil) > 0){
                return "User name sudah ada, coba dengan username yang lain";
            }else{
                $password = $this->_ci->input->post('password');
                $encpas = $this->_ci->encrypt->encode($password, $this->key_jos);
                $data = array(
                        'cu_by' => $this->_ci->session->userdata('ses_user_name'),
                        'user_name' => $this->_ci->input->post('user_name'),
                        'name' => $this->_ci->input->post('name'),
                        'password' => $encpas,
                        'created' => date('Y-m-d H:i:s'),
                        'group_id' => $this->_ci->input->post('group_id')
                        );
                        
                $this->_ci->db->insert($this->depan_db.'users', $data);
                redirect('admin_controller/users');
            }
        }else{
            return validation_errors();
        }
    }

    function edit_users($id){
        date_default_timezone_set('Asia/Jakarta');
        $config = array(
            array('field' => 'user_name', 'label' => 'User name', 'rules' => 'required'),
            array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
            array('field' => 'password', 'label' => 'Password', 'rules' => 'required'),
            array('field' => 'cpassword', 'label' => 'Retype Password', 'rules' => 'required|matches[password]')
        );
        $this->_ci->form_validation->set_rules($config);

        if ($this->_ci->form_validation->run() == true){
            /*
            if(count($hasil) > 0){
                return "User name sudah ada, coba dengan username yang lain";
            }else{
            */
                $password = $this->_ci->input->post('password');
                $encpas = $this->_ci->encrypt->encode($password, $this->key_jos);
                $data = array(
                        'cu_by' => $this->_ci->session->userdata('ses_user_name'),
                        'user_name' => $this->_ci->input->post('user_name'),
                        'name' => $this->_ci->input->post('name'),
                        'password' => $encpas,
                        'updated' => date('Y-m-d H:i:s'),
                        'group_id' => $this->_ci->input->post('group_id')
                        );
                        
                $this->_ci->db->where('id', $id);
                $this->_ci->db->update('telkom_users', $data);
                redirect('admin_controller/users');
            //}
        }else{
            return validation_errors();
        }
    }
    // end users

    // menu
	function add_menu(){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'menu_name', 'label' => 'menu name', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){            
			$data = array(
					'cu_by' => $this->_ci->session->userdata('ses_user_name'),
					'created' => date('Y-m-d H:i:s'),
					'menu_name' => $this->_ci->input->post('menu_name'),
					'menu_name_id' => $this->_ci->input->post('menu_name_id'),
					'route_be' => $this->_ci->input->post('route_be'),
					'route_fe' => $this->_ci->input->post('route_fe'),
					'fe' => $this->_ci->input->post('fe'),
					'be' => $this->_ci->input->post('be'),
					//'controller' => $this->_ci->input->post('controller'),
					'master' => $this->_ci->input->post('master'),
					'viewed' => $this->_ci->input->post('view'),
					'menu_order' => $this->_ci->input->post('menu_order'),
				);
			$this->_ci->db->insert($this->depan_db.'menu', $data);
        }else{
            return validation_errors();
        }
	}

	function edit_menu($id){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'menu_name', 'label' => 'menu name', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array(
						'cu_by' => $this->_ci->session->userdata('ses_user_name'),
						'updated' => date('Y-m-d H:i:s'),
						'menu_name' => $this->_ci->input->post('menu_name'),
						'menu_name_id' => $this->_ci->input->post('menu_name_id'),
						//'route_fe' => $this->_ci->input->post('route_fe'),
						//'route_be' => $this->_ci->input->post('route_be'),
						//'fe' => $this->_ci->input->post('fe'),
						//'be' => $this->_ci->input->post('be'),
						//'controller' => $this->_ci->input->post('controller'),
						//'master' => $this->_ci->input->post('master'),
						//'viewed' => $this->_ci->input->post('view'),
						//'menu_order' => $this->_ci->input->post('menu_order'),
					);
			$this->_ci->db->where('id', $id);
			$this->_ci->db->update($this->depan_db.'menu', $data);
			redirect('admin_controller/menu');
        }else{
            return validation_errors();
        }
	}

	function edit_menu_spesial($id){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'menu_name', 'label' => 'menu name', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array(
						'cu_by' => $this->_ci->session->userdata('ses_user_name'),
						'updated' => date('Y-m-d H:i:s'),
						'menu_name' => $this->_ci->input->post('menu_name'),
						'menu_name_id' => $this->_ci->input->post('menu_name_id'),
						'route_fe' => $this->_ci->input->post('route_fe'),
						'route_be' => $this->_ci->input->post('route_be'),
						'fe' => $this->_ci->input->post('fe'),
						'be' => $this->_ci->input->post('be'),
						//'controller' => $this->_ci->input->post('controller'),
						'master' => $this->_ci->input->post('master'),
						'viewed' => $this->_ci->input->post('view'),
						'menu_order' => $this->_ci->input->post('menu_order'),
					);
			$this->_ci->db->where('id', $id);
			$this->_ci->db->update($this->depan_db.'menu', $data);
			redirect('admin_controller/menu');
        }else{
            return validation_errors();
        }
	}

	function menu_fe(){
		$arrayName = array('viewed' => '1', 'fe' => '1', 'master' => '0');
		$this->_ci->db->select('*');
		$this->_ci->db->where($arrayName);
		$this->_ci->db->order_by('menu_order ASC');
		return $this->_ci->db->get($this->depan_db.'menu')->result();
	}

	function sub_menu_fe($id_top){
		$arrayName = array('viewed' => '1', 'fe' => '1', 'master' => $id_top);
		$this->_ci->db->select('*');
		$this->_ci->db->where($arrayName);
		$this->_ci->db->order_by('menu_order ASC');
		return $this->_ci->db->get($this->depan_db.'menu')->result();
	}

	function menu_be(){
		$this->_ci->db->select('*');
		$this->_ci->db->where('viewed', '1');
		$this->_ci->db->order_by('menu_order ASC');
		return $this->_ci->db->get($this->depan_db.'menu')->result();
	}
	// end menu

	// content
	function get_main_content($content_name){
		$this->_ci->db->select('*');
		$this->_ci->db->where('content_name', $content_name);
		$this->_ci->db->order_by('id ASC');
		return $this->_ci->db->get($this->depan_db.'contents')->result();
	}

	function get_main_content_image($content_name){
		$this->_ci->db->select('c.*, i.images_name, i.id as id_image');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where('content', $content_name);
		$this->_ci->db->order_by('id asc');
		return $this->_ci->db->get()->result();
	}

	function get_main_content_image_desc($content_name){
		$this->_ci->db->select('c.*, i.images_name, i.id as id_image');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where('content', $content_name);
		$this->_ci->db->order_by('id desc');
		return $this->_ci->db->get()->result();
	}

	function get_main_content_image_id($id){
		$arrayName=array('c.id'=>$id);
		$this->_ci->db->select('c.*, i.images_name, i.id_table');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where($arrayName);
		return $this->_ci->db->get()->row();		
	}

	function get_main_id($content_name){
		$this->_ci->db->select('id');
		$this->_ci->db->where('content_name', $content_name);
		$this->_ci->db->order_by('id ASC');
		return $this->_ci->db->get($this->depan_db.'contents')->row();
	}

	function get_subcontent($content_parent){
		//$pid = $this->get_main_id($content_parent);
		$this->_ci->db->select('*');
		$this->_ci->db->where('content_parent', $content_parent);
		$this->_ci->db->order_by('id ASC');
		return $this->_ci->db->get($this->depan_db.'contents')->result();
	}

	function get_subcontent_desc($content_parent){
		$this->_ci->db->select('*');
		$this->_ci->db->where('content_parent', $content_parent);
		$this->_ci->db->order_by('id DESC');
		return $this->_ci->db->get($this->depan_db.'contents')->result();
	}

	function get_subcontent_image($content_parent){
		$this->_ci->db->select('c.*, i.images_name, i.id as id_image');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where('content_parent', $content_parent);
		$this->_ci->db->order_by('c.id asc');
		return $this->_ci->db->get()->result();
		/**
		$this->_ci->db->select('*');
		$this->_ci->db->where('content_parent', $content_parent);
		$this->_ci->db->order_by('id ASC');
		return $this->_ci->db->get($this->depan_db.'contents')->result();
		**/
	}

	function add_main_content($content_name){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array();
			$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
			$data['created'] = date('Y-m-d H:i:s');
			$data['content_name'] = $content_name;
			$data['content_description_1'] = $this->_ci->input->post('content_description_1');

			if ($this->_ci->input->post('content_description_2')) {
				$data['content_description_2'] = $this->_ci->input->post('content_description_2');
			}
			if ($this->_ci->input->post('content_description_3')) {
				$data['content_description_3'] = $this->_ci->input->post('content_description_3');
			}
			if ($this->_ci->input->post('content_description_4')) {
				$data['content_description_4'] = $this->_ci->input->post('content_description_4');
			}
			if ($this->_ci->input->post('content_description_5')) {
				$data['content_description_5'] = $this->_ci->input->post('content_description_5');
			}
			if ($this->_ci->input->post('content_description_1_id')) {
				$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
			}
			if ($this->_ci->input->post('content_description_2_id')) {
				$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
			}
			if ($this->_ci->input->post('content_description_3_id')) {
				$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
			}
			if ($this->_ci->input->post('content_description_4_id')) {
				$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
			}
			if ($this->_ci->input->post('content_description_5_id')) {
				$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
			}
			
			$this->_ci->db->insert($this->depan_db.'contents', $data);
			return "1";
		}else{
            return validation_errors();
        }
	}

	function edit_main_content($id){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array();
			$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
			$data['updated'] = date('Y-m-d H:i:s');
			
			$data['content_description_1'] = $this->_ci->input->post('content_description_1');
			if ($this->_ci->input->post('content_description_2')) {
				$data['content_description_2'] = $this->_ci->input->post('content_description_2');
			}
			if ($this->_ci->input->post('content_description_3')) {
				$data['content_description_3'] = $this->_ci->input->post('content_description_3');
			}
			if ($this->_ci->input->post('content_description_4')) {
				$data['content_description_4'] = $this->_ci->input->post('content_description_4');
			}
			if ($this->_ci->input->post('content_description_5')) {
				$data['content_description_5'] = $this->_ci->input->post('content_description_5');
			}
			if ($this->_ci->input->post('content_description_1_id')) {
				$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
			}
			if ($this->_ci->input->post('content_description_2_id')) {
				$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
			}
			if ($this->_ci->input->post('content_description_3_id')) {
				$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
			}
			if ($this->_ci->input->post('content_description_4_id')) {
				$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
			}
			if ($this->_ci->input->post('content_description_5_id')) {
				$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
			}
			
			$this->_ci->db->where('id', $id);
			$this->_ci->db->update($this->depan_db.'contents', $data);
			return "1";
		}else{
            return validation_errors();
        }
	}

	function add_main_content_image($content_name){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
        	$nmfile = $_FILES['inputfile']['name'];
			if (!empty($nmfile)) {
				$data = array();
				$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
				$data['created'] = date('Y-m-d H:i:s');
				$data['content_name'] = $content_name;
				$data['content_description_1'] = $this->_ci->input->post('content_description_1');
				if ($this->_ci->input->post('content_description_2')) {
					$data['content_description_2'] = $this->_ci->input->post('content_description_2');
				}
				if ($this->_ci->input->post('content_description_3')) {
					$data['content_description_3'] = $this->_ci->input->post('content_description_3');
				}
				if ($this->_ci->input->post('content_description_4')) {
					$data['content_description_4'] = $this->_ci->input->post('content_description_4');
				}
				if ($this->_ci->input->post('content_description_5')) {
					$data['content_description_5'] = $this->_ci->input->post('content_description_5');
				}
				if ($this->_ci->input->post('content_description_1_id')) {
					$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
				}
				if ($this->_ci->input->post('content_description_2_id')) {
					$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
				}
				if ($this->_ci->input->post('content_description_3_id')) {
					$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
				}
				if ($this->_ci->input->post('content_description_4_id')) {
					$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
				}
				if ($this->_ci->input->post('content_description_5_id')) {
					$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
				}
				
				$this->_ci->db->trans_start();
				$this->_ci->db->insert($this->depan_db.'contents', $data);
				$currentid = $this->_ci->db->insert_id();
				$this->_ci->db->trans_complete();
			
			//$nmfile = $_FILES['inputfile']['name'];
			//if (!empty($nmfile)) {
				// uplooad gambar
				//return $this->tambah_slide($content_name, $currentid);
			//}
			//return "1";
				$naik = $this->tambah_slide($content_name, $currentid);
				if ($naik == "1"){
					return "1";
				}else{
					// hapus lagi content db nya
					$this->hapus('contents', $currentid);
					return $naik;
				}
			}else{
				return "The image field is required.";
			}
		}else{
            return validation_errors();
        }
	}

	function edit_main_content_image($id, $id_image){
		date_default_timezone_set('Asia/Jakarta');
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array();
			$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
			$data['updated'] = date('Y-m-d H:i:s');
			
			$data['content_description_1'] = $this->_ci->input->post('content_description_1');
			if ($this->_ci->input->post('content_description_2')) {
				$data['content_description_2'] = $this->_ci->input->post('content_description_2');
			}
			if ($this->_ci->input->post('content_description_3')) {
				$data['content_description_3'] = $this->_ci->input->post('content_description_3');
			}
			if ($this->_ci->input->post('content_description_4')) {
				$data['content_description_4'] = $this->_ci->input->post('content_description_4');
			}
			if ($this->_ci->input->post('content_description_5')) {
				$data['content_description_5'] = $this->_ci->input->post('content_description_5');
			}
			if ($this->_ci->input->post('content_description_1_id')) {
				$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
			}
			if ($this->_ci->input->post('content_description_2_id')) {
				$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
			}
			if ($this->_ci->input->post('content_description_3_id')) {
				$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
			}
			if ($this->_ci->input->post('content_description_4_id')) {
				$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
			}
			if ($this->_ci->input->post('content_description_5_id')) {
				$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
			}
			
			$this->_ci->db->where('id', $id);
			$this->_ci->db->update($this->depan_db.'contents', $data);

			$nmfile = $_FILES['inputfile']['name'];
			if (!empty($nmfile)) {
				// uplooad gambar
				return $this-> ubah_slide($id_image);
			}
			return "1";
		}else{
            return validation_errors();
        }
	}

	function add_submain_content($content_name, $pid){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array();
			$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
			$data['created'] = date('Y-m-d H:i:s');
			$data['content_name'] = $content_name;
			$data['content_description_1'] = $this->_ci->input->post('content_description_1');

			if ($this->_ci->input->post('content_description_2')) {
				$data['content_description_2'] = $this->_ci->input->post('content_description_2');
			}
			if ($this->_ci->input->post('content_description_3')) {
				$data['content_description_3'] = $this->_ci->input->post('content_description_3');
			}
			if ($this->_ci->input->post('content_description_4')) {
				$data['content_description_4'] = $this->_ci->input->post('content_description_4');
			}
			if ($this->_ci->input->post('content_description_5')) {
				$data['content_description_5'] = $this->_ci->input->post('content_description_5');
			}
			if ($this->_ci->input->post('content_description_1_id')) {
				$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
			}
			if ($this->_ci->input->post('content_description_2_id')) {
				$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
			}
			if ($this->_ci->input->post('content_description_3_id')) {
				$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
			}
			if ($this->_ci->input->post('content_description_4_id')) {
				$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
			}
			if ($this->_ci->input->post('content_description_5_id')) {
				$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
			}
			
			$data['content_parent'] = $pid;
			
			$this->_ci->db->insert($this->depan_db.'contents', $data);
			return "1";
		}else{
            return validation_errors();
        }
	}

	function add_submain_content_image($content_name, $pid){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
            //array('field' => 'inputfile', 'label' => 'image', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$nmfile = $_FILES['inputfile']['name'];
			if (!empty($nmfile)) {
				$data = array();
				$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
				$data['created'] = date('Y-m-d H:i:s');
				$data['content_name'] = $content_name;
				$data['content_description_1'] = $this->_ci->input->post('content_description_1');
				if ($this->_ci->input->post('content_description_2')) {
					$data['content_description_2'] = $this->_ci->input->post('content_description_2');
				}
				if ($this->_ci->input->post('content_description_3')) {
					$data['content_description_3'] = $this->_ci->input->post('content_description_3');
				}
				if ($this->_ci->input->post('content_description_4')) {
					$data['content_description_4'] = $this->_ci->input->post('content_description_4');
				}
				if ($this->_ci->input->post('content_description_5')) {
					$data['content_description_5'] = $this->_ci->input->post('content_description_5');
				}
				if ($this->_ci->input->post('content_description_1_id')) {
					$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
				}
				if ($this->_ci->input->post('content_description_2_id')) {
					$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
				}
				if ($this->_ci->input->post('content_description_3_id')) {
					$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
				}
				if ($this->_ci->input->post('content_description_4_id')) {
					$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
				}
				if ($this->_ci->input->post('content_description_5_id')) {
					$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
				}

				$data['content_parent'] = $pid;
				
				$this->_ci->db->trans_start();
				$this->_ci->db->insert($this->depan_db.'contents', $data);
				$currentid = $this->_ci->db->insert_id();
				$this->_ci->db->trans_complete();
			
				// uplooad gambar
				//return $this->tambah_slide($content_name, $currentid);
				$naik = $this->tambah_slide($content_name, $currentid);
				if ($naik == "1"){
					return "1";
				}else{
					// hapus lagi content db nya
					$this->hapus('contents', $currentid);
					return $naik;
				}
			}else{
				return "The image field is required.";
			}
			//return "1";
		}else{
            return validation_errors();
        }
	}

	function edit_submain_content_image($id, $id_image){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
			$data = array();
			$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
			$data['updated'] = date('Y-m-d H:i:s');
			//$data['content_name'] = $content_name;
			$data['content_description_1'] = $this->_ci->input->post('content_description_1');
			if ($this->_ci->input->post('content_description_2')) {
				$data['content_description_2'] = $this->_ci->input->post('content_description_2');
			}
			if ($this->_ci->input->post('content_description_3')) {
				$data['content_description_3'] = $this->_ci->input->post('content_description_3');
			}
			if ($this->_ci->input->post('content_description_4')) {
				$data['content_description_4'] = $this->_ci->input->post('content_description_4');
			}
			if ($this->_ci->input->post('content_description_5')) {
				$data['content_description_5'] = $this->_ci->input->post('content_description_5');
			}
			if ($this->_ci->input->post('content_description_1_id')) {
				$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
			}
			if ($this->_ci->input->post('content_description_2_id')) {
				$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
			}
			if ($this->_ci->input->post('content_description_3_id')) {
				$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
			}
			if ($this->_ci->input->post('content_description_4_id')) {
				$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
			}
			if ($this->_ci->input->post('content_description_5_id')) {
				$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
			}

			//$data['content_parent'] = $pid;
			
			$this->_ci->db->where('id', $id);
			$this->_ci->db->update($this->depan_db.'contents', $data);
			
			$nmfile = $_FILES['inputfile']['name'];
			if (!empty($nmfile)) {
				// uplooad gambar
				return $this->ubah_slide($id_image);
			}
			return "1";
		}else{
            return validation_errors();
        }
	}
	// end content

	// add content cuma buat newsevent
	function add_main_content_newsevent($content_name){
		date_default_timezone_set('Asia/Jakarta');
		$config = array(
            array('field' => 'content_description_1', 'label' => 'form input', 'rules' => 'required'),
        );
        $this->_ci->form_validation->set_rules($config);
        if ($this->_ci->form_validation->run() == true){ 
        	$nmfile = $_FILES['inputfile']['name'];
			if (!empty($nmfile)) {
				$data = array();
				$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
				$data['created'] = date('Y-m-d H:i:s');
				$data['content_name'] = $content_name;
				$data['content_description_1'] = $this->_ci->input->post('content_description_1');
				if ($this->_ci->input->post('content_description_2')) {
					$data['content_description_2'] = $this->_ci->input->post('content_description_2');
				}
				if ($this->_ci->input->post('content_description_3')) {
					$data['content_description_3'] = $this->_ci->input->post('content_description_3');
				}
				if ($this->_ci->input->post('content_description_4')) {
					$data['content_description_4'] = $this->_ci->input->post('content_description_4');
				}
				if ($this->_ci->input->post('content_description_5')) {
					$data['content_description_5'] = $this->_ci->input->post('content_description_5');
				}
				if ($this->_ci->input->post('content_description_1_id')) {
					$data['content_description_1_id'] = $this->_ci->input->post('content_description_1_id');
				}
				if ($this->_ci->input->post('content_description_2_id')) {
					$data['content_description_2_id'] = $this->_ci->input->post('content_description_2_id');
				}
				if ($this->_ci->input->post('content_description_3_id')) {
					$data['content_description_3_id'] = $this->_ci->input->post('content_description_3_id');
				}
				if ($this->_ci->input->post('content_description_4_id')) {
					$data['content_description_4_id'] = $this->_ci->input->post('content_description_4_id');
				}
				if ($this->_ci->input->post('content_description_5_id')) {
					$data['content_description_5_id'] = $this->_ci->input->post('content_description_5_id');
				}
				
				$this->_ci->db->trans_start();
				$this->_ci->db->insert($this->depan_db.'contents', $data);
				$currentid = $this->_ci->db->insert_id();
				$this->_ci->db->trans_complete();

				$naik = $this->tambah_slide($content_name, $currentid);

				// tambah detail content
				$data['content_name'] = 'detail_newsevents';
				$data['content_parent'] = $currentid;
				$this->_ci->db->insert($this->depan_db.'contents', $data);

				if ($naik == "1"){
					return "1";
				}else{
					// hapus lagi content db nya
					$this->hapus('contents', $currentid);
					return $naik;
				}
			}else{
				return "The image field is required.";
			}
		}else{
            return validation_errors();
        }
	}
	// end add content cuma buat newsevent
	
	function get_all_asc($tabel){
		$this->_ci->db->order_by('id asc');
		return $this->_ci->db->get($this->depan_db.$tabel)->result();
	}
	
	function get_all_desc($tabel){
		$this->_ci->db->order_by('id desc');
		return $this->_ci->db->get($this->depan_db.$tabel)->result();
	}
	
	function get_one($tabel){
		$this->_ci->db->order_by('id desc');
		return $this->_ci->db->get($this->depan_db.$tabel)->row();
	}
	
	function get_per_id($tabel, $id){
		return $this->_ci->db->get_where($this->depan_db.$tabel, array('id' => $id))->row();
	}

	function get_per_id_object($tabel, $id){
		return $this->_ci->db->get_where($this->depan_db.$tabel, array('id' => $id))->result();
	}
	
	// hapus data
	function hapus_content($id){
		$kondisi = array('id'=>$id);
		$this->_ci->db->where($kondisi);
		$this->_ci->db->delete($this->depan_db.'contents');
	}

	function hapus_content_image($id){
		$kondisi = array('id'=>$id);
		$this->_ci->db->where($kondisi);
		$this->_ci->db->delete($this->depan_db.'contents');

		// ambil nama gambar
		$data_gambar = $this->_ci->db->get_where($this->depan_db.'images', array('id_table'=>$id))->result();
		foreach ($data_gambar as $key => $value) {
			$image_id = $value->id;
			$image = $value->images_name;

			// hapus file dr directory
			unlink($_SERVER['DOCUMENT_ROOT'].str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/assets/images/upload/'.$image);

			// hapus images dr database
			$this->hapus('images', $image_id);
		}
		//return $data_gambar;
	}

	function hapus_image($id){
		// hapus gambar dr directory
		$this->hapus_file_gallery($id);
		// hapus tabel
		$this->hapus('images', $id);
	}

	function hapus($tabel, $id){
		$kondisi = array('id'=>$id);
		$this->_ci->db->where($kondisi);
		$this->_ci->db->delete($this->depan_db.$tabel);
	}	
	
	// hapus file gallery dr directory
	function hapus_file_gallery($id){
		$kondisi = array('id'=>$id);
		$this->_ci->db->where($kondisi);
		$nmfile = $this->_ci->db->get($this->depan_db.'images')->row();
		
		unlink($_SERVER['DOCUMENT_ROOT'].str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/assets/images/upload/'.$nmfile->image);
	}
	
	// upload file
	function upload_file($nminput, $nmfile){
        $path = './assets/images/upload/';
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|mp4|pdf|GIF|JPG|JPEG|PNG|MP4|PDF';
        $config['max_size']	= '30000';
        $config['file_name']  = $nmfile;

        $this->_ci->load->library('upload', $config);

        if ( ! $this->_ci->upload->do_upload($nminput)) {
            return "0";
        }else{
             return "1";
        }
    }

    // left join slide
    function get_slide_left_join($content_name){
    	$sql = "SELECT * FROM  telkom_contents c LEFT JOIN telkom_images i ON c.id = i.id_table WHERE content='".$content_name."'";
		return $this->_ci->db->query($sql)->result();
	}

    // ambil slide
    function get_slide($content_name){
		$this->_ci->db->select('i.*');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where('content', $content_name);
		$this->_ci->db->order_by('id asc');
		return $hasil = $this->_ci->db->get()->result();
	}

	function get_slide_idtable($id_table){
		$this->_ci->db->select('i.*');
		$this->_ci->db->from($this->depan_db.'contents c');
		$this->_ci->db->join($this->depan_db.'images i', 'i.id_table=c.id');
		$this->_ci->db->where('id_table', $id_table);
		$this->_ci->db->order_by('id asc');
		return $hasil = $this->_ci->db->get()->result();
	}
	
	// tambah slide
	function tambah_slide($content_name, $id_table){
		if ($this->_ci->input->post('insertdata')){
			$data = array();
			$nmfile = $_FILES['inputfile']['name'];
			$newname = "";
			$pattern="/.jpg|.JPG|.jpeg|.JPEG|.png|.PNG|.gif|.GIF$/";
				
				// cek file 
			if (preg_match($pattern, $nmfile, $matches,PREG_OFFSET_CAPTURE)) {
				$ext = $matches[0][0];
				$oldname = str_replace($ext, "", $nmfile);
				$newname = date("Ymd_His").$ext;

				// upload image 
				$upload_file = $this->upload_file('inputfile', $newname);
				if($upload_file == "0") {						
					return "Gagal Upload Images ".$upload_file;
				}else{
					$data['images_name'] = $newname;
				$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
				$data['created'] =  date('Y-m-d H:i:s');
				$data['content'] = $content_name;
				$data['id_table'] = $id_table;
				
				$this->_ci->db->insert($this->depan_db.'images', $data);
				return "1";
				}
			}else{
				return "File bukan gambar";
			}
		}
	}
	
	// ubah slide
	function ubah_slide($id){
		if ($this->_ci->input->post('insertdata')){
			$data = array();
			$nmfile = $_FILES['inputfile']['name'];
			$newname = "";
			$pattern="/.jpg|.JPG|.jpeg|.JPEG|.png|.PNG|.gif|.GIF$/";
				
				/** cek file **/
			if (preg_match($pattern, $nmfile, $matches,PREG_OFFSET_CAPTURE)) {
				$ext = $matches[0][0];
				$oldname = str_replace($ext, "", $nmfile);
				$newname = date("Ymd_His").$ext;

				/** upload image **/
				$upload_file = $this->upload_file('inputfile', $newname);
				if($upload_file == "0") {						
					return "Gagal Upload Images ".$upload_file;
				}else{
					// hapus file lama dr directory
					$hasil = $this->get_per_id('images', $id);
					unlink($_SERVER['DOCUMENT_ROOT'].str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/assets/images/upload/'.$hasil->images_name);

					$data['cu_by'] = $this->_ci->session->userdata('ses_user_name');
					$data['images_name'] = $newname;
					$data['updated'] =  date('Y-m-d H:i:s');

					$this->_ci->db->where('id', $id);
					$this->_ci->db->update($this->depan_db.'images', $data);
					
					return "1";
				}
			}else{
				return "File bukan gambar";
			}
		}
	}
	
	// hapus slide
	function hapus_slide($id){
		// hapus file
		$hasil = $this->get_per_id($this->depan_db.'images', $id);
		unlink($_SERVER['DOCUMENT_ROOT'].str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/assets/images/upload/'.$hasil->images_name);
		
		// hapus data
		$this->hapus($this->depan_db.'images', $id);
	}
}