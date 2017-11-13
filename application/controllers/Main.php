<?php
/**
 * Created by PhpStorm.
 * User: JPanda
 * Date: 13/11/2017
 * Time: 19:53
 */

class Main extends CYM_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    // On load, loads a confession via JS AJAX
    public function index() {


        $this->load->view('main/index');
    }
}

?>