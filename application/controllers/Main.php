<?php
/**
 * Created by PhpStorm.
 * User: JPanda
 * Date: 13/11/2017
 * Time: 19:53
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CYM_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    // On load, loads a confession via JS AJAX
    public function index() {

        $this->load->view('main/index');
    }


    // This will get a confession in the database
    public function all_have_sinned_and_fall_short_of_the_glory_of_god() {
        $amount = $this->sin_model->get_confession_count()->amount;
        $id_to_get = rand(1, $amount);

        echo json_encode($this->sin_model->get_confession($id_to_get));
    }
}

?>