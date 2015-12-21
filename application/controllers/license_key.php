<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License_key extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->data['message'] = "";
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/license_key/index", $this->data);
    }
    
    public function create_license_key()
    {
        
    }
    
    public function update_license_key()
    {
        
    }
    
    public function delete_license_key()
    {
        
    }
}