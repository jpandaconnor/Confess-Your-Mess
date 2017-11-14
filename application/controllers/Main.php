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
        $confessions = $this->sin_model->get_confessions();
        $confessions_size = sizeof($confessions);

        $id_to_get = rand(1, $confessions_size);

        echo json_encode($this->sin_model->get_confession(array_values($confessions)[$id_to_get - 1]->id));
    }

    public function blessing_of_your_confession() {
        $confession = $_POST['confession'];

        if($this->sin_model->confess($confession)) {
            echo $this->build_response("success", "Confession Added!");
        } else {
            echo $this->build_response("error", "Failed to add confession");
        }
    }
}

?>