<?php

class License_key_model extends Ion_auth_model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * This method will return transaction list
     */

    public function get_all_license_keys($limit = 0, $offset = 0) {
        $license_key_list = array();
        $this->curl->create(WEBSERVICE_URL_GET_ALL_LICENSE_KEYS);
        $this->curl->post(array("username" => "admin"));
        $result_event = json_decode($this->curl->execute());

        if (!empty($result_event)) {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if ($response_code == RESPONSE_CODE_SUCCESS) {
                $license_key_list = $result_event->result;
            }
        }
        return $license_key_list;
    }

    public function get_licnese_key_info($license_key_id) {
        $license_key_info = new stdClass();
        $this->curl->create(WEBSERVICE_URL_GET_LICENSE_KEY_INFO);
        $this->curl->post(array("licensekeyid" => $license_key_id));
        $result_event = json_decode($this->curl->execute());

        if (!empty($result_event)) {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if ($response_code == RESPONSE_CODE_SUCCESS) {
                $license_key_info = $result_event->result;
            }
        }
        return $license_key_info;
    }

    public function create_license_key($license_key_info) {
        $this->curl->create(WEBSERVICE_URL_CREATE_LICENSE_KEY);
        $this->curl->post(array("key" => $license_key_info['key']));
        $result_event = json_decode($this->curl->execute());
        if (!empty($result_event)) {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if ($response_code == RESPONSE_CODE_SUCCESS) {
                return true;
            }
        }
        return false;
    }

    public function update_license_key($license_key_id, $license_is_used) {
           $this->curl->create(WEBSERVICE_URL_UPDATE_LICENSE_KEY);
        $this->curl->post(array("key" => $license_key_id, 'is_used' => $license_is_used));
        $result_event = json_decode($this->curl->execute());
        if (!empty($result_event)) {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if ($response_code == RESPONSE_CODE_SUCCESS) {
                return true;
            }
        }
        return false; 
    }


    public function delete_license_key($license_key_id) {
        $this->curl->create(WEBSERVICE_URL_DELETE_LICENSE_KEY);
        $this->curl->post(array("licensekeyid" => $license_key_id));
        $result_event = json_decode($this->curl->execute());
        if (!empty($result_event)) {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if ($response_code == RESPONSE_CODE_SUCCESS) {
                return true;
            }
        }
        return false;
    }

}
