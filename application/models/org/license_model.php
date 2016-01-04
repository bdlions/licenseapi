<?php
class License_model extends Ion_auth_model 
{
    public function __construct() {
        parent::__construct();    
    }
    /*
     * This method will return license list
     */
    public function get_all_licenses()
    {
        $license_list = array();
        $this->curl->create(WEBSERVICE_URL_GET_ALL_LICENSES);
        $this->curl->post(array("username" => "admin"));
        $result_event = json_decode($this->curl->execute());
        
        if (!empty($result_event)) 
        {
            $response_code = '';
            if (property_exists($result_event, "responseCode") != FALSE) {
                $response_code = $result_event->responseCode;
            }
            if($response_code == RESPONSE_CODE_SUCCESS)
            {
                $license_list = $result_event->result;
            }
        }        
        return $license_list;
    }
    public function delete_license()
    {
        
    }
    public function get_license_info()
    {
        
    }
    public function update_license_info()
    {
        
    }
}