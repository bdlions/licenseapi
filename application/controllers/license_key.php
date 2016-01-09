<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class License_key extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('org/license_key_model');
    }

    public function index() {
        $this->data['license_key_list'] = $this->license_key_model->get_all_license_keys();
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/license_key/index", $this->data);
    }

    public function create_license_key() {
        if ($this->input->post('submit_create_license_key')) {
            $license_key_info = array(
                'key' => $this->input->post('key')
            );
            $this->license_key_model->create_license_key($license_key_info);
            redirect('license_key', 'refresh');
        }
        $this->data['key'] = array(
            'id' => 'key',
            'name' => 'key',
            'type' => 'text'
        );
        $this->data['submit_create_license_key'] = array(
            'id' => 'submit_create_license_key',
            'name' => 'submit_create_license_key',
            'type' => 'submit',
            'value' => 'Create',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/license_key/create_license_key", $this->data);
    }

    public function update_license_key($license_key_id) {
        if ($this->input->post('submit_update_license_key')) {
//            $license_key_id = $this->input->post('key');
            $is_used = $this->input->post('is_used');
            $this->license_key_model->update_license_key($license_key_id, $is_used);
            redirect('license_key', 'refresh');
        }
        $license_key_info = $this->license_key_model->get_licnese_key_info($license_key_id);
        $this->data['license_key_info'] = $license_key_info;
        $this->data['key'] = array(
            'id' => 'key',
            'name' => 'key',
            'type' => 'text',
            'value' => $license_key_info->key
        );
        $this->data['is_used'] = array(
            'id' => 'is_used',
            'name' => 'is_used',
            'type' => "checkbox",
            'checked' => ($license_key_info->isUsed == '1') ? TRUE : FALSE,
        );
        $this->data['submit_update_license_key'] = array(
            'name' => 'submit_update_license_key',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/license_key/update_license_key", $this->data);
    }

    public function delete_license_key() {
        $response = array();
        $license_key_id = $this->input->post('license_key_id');
        $result = $this->license_key_model->delete_license_key($license_key_id);
        if ($result != false) {
            $response['status'] = 1;
        } else {
            $response['status'] = 0;
        }
        echo json_encode($response);
    }

}
