<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('org/license_model');
    }
    public function index()
    {
        $this->data['license_list'] = $this->license_model->get_all_licenses();
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