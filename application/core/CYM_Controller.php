<?php
/**
 * Created by PhpStorm.
 * User: JPanda
 * Date: 13/11/2017
 * Time: 19:49
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CYM_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $data = array();
        
        $this->load->helper('url');
    }

    public function build_response($errorOrSuccess, $message) {
        $message_array = array();
        $message_array['response'] = $errorOrSuccess;
        $message_array['message'] = $message;
        return json_encode($message_array);
    }
}

?>