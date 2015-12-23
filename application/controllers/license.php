<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->data['message'] = "";
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/license/index", $this->data);
    }
    
    public function update_license()
    {
       $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/license/update_license");   
    }
    
    public function delete_license()
    {
       $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/license/modal_delete_license_confirm");      
    }
}