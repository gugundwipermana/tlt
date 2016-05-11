<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template {
    protected $_ci;
    function __construct()
    {
        $this->_ci =&get_instance();
    }

    function admin_display($template,$data=null)
    {
        $data['_admin_content']=$this->_ci->load->view($template,$data, true);
        $data['_admin_header']=$this->_ci->load->view('admin/header',$data, true);
        $data['_admin_side_bar']=$this->_ci->load->view('admin/side_bar',$data, true);
        $data['_admin_footer']=$this->_ci->load->view('admin/footer',$data, true);
        $this->_ci->load->view('templates/admin_template.php',$data);
    }

    function site_display($template,$data=null)
    {
        $data['_site_content']=$this->_ci->load->view($template,$data, true);
        $data['_site_header']=$this->_ci->load->view('site/header',$data, true);
        $this->_ci->load->view('templates/site_template.php',$data);
    }

    function sub_display($template,$data=null)
    {
        $data['_site_content']=$this->_ci->load->view($template,$data, true);
        $data['_site_header']=$this->_ci->load->view('site/headerb',$data, true);
        $this->_ci->load->view('templates/detail_template.php',$data);
    }
}
