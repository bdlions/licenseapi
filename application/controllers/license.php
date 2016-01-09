<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class License extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('org/license_model');
    }

    public function index() {
        $this->data['license_list'] = $this->license_model->get_all_licenses();
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/license/index", $this->data);
    }

    public function update_license_info($license_key_id) {
        if ($this->input->post('submit_update_license')) {
            $license_info = new stdClass();
            $license_info->key = $license_key_id;
            $license_info->subscriptionDate = $this->input->post('subscription_date');
            $license_info->startDate = $this->input->post('start_date');
            $license_info->evolutionPeriod = $this->input->post('evolution_period');
            $license_info->macAddress = $this->input->post('mac_address');
            $license_info->cpuAddress = $this->input->post('cpu_address');
            $license_info->processorAddress = $this->input->post('processor_address');
            $this->license_model->update_license_info($license_info);
        }
        $license_info = $this->license_model->get_licnese_info($license_key_id);
        $this->data['license_info'] = $license_info;
        $this->data['key'] = array(
            'id' => 'key',
            'name' => 'key',
            'type' => 'text',
            'value' => $license_info->key
        );
        $this->data['subscription_date'] = array(
            'id' => 'subscription_date',
            'name' => 'subscription_date',
            'type' => 'subscription_date',
            'value' => $license_info->subscriptionDate
        );
        $this->data['start_date'] = array(
            'id' => 'start_date',
            'name' => 'start_date',
            'type' => 'text',
            'value' => $license_info->startDate
        );
        $this->data['evolution_period'] = array(
            'id' => 'evolution_period',
            'name' => 'evolution_period',
            'type' => 'text',
            'value' => $license_info->evolutionPeriod
        );
        $this->data['mac_address'] = array(
            'id' => 'mac_address',
            'name' => 'mac_address',
            'type' => 'text',
            'value' => $license_info->macAddress
        );
        $this->data['cpu_address'] = array(
            'id' => 'cpu_address',
            'name' => 'cpu_address',
            'type' => 'text',
            'value' => $license_info->cpuAddress
        );
        $this->data['processor_address'] = array(
            'id' => 'processor_address',
            'name' => 'processor_address',
            'type' => 'text',
            'value' => $license_info->processorAddress
        );
        $this->data['submit_update_license'] = array(
            'id' => 'submit_update_license',
            'name' => 'submit_update_license',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/license/update_license", $this->data);
    }

    public function delete_license() {
        $response = array();
        $license_key_id = $this->input->post('license_key_id');
        $result = $this->license_model->delete_license($license_key_id);
        if ($result != false) {
            $response['status'] = 1;
        } else {
            $response['status'] = 0;
        }
        echo json_encode($response);
    }

}
