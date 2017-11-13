<?php
/**
 * Created by PhpStorm.
 * User: JPanda
 * Date: 13/11/2017
 * Time: 21:08
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Sin_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Returns the amount of confessions in the database
    public function get_confession_count() {
        $db = $this->load->database('default', TRUE);

        $query = $db->query("SELECT COUNT(*) AS amount FROM confessions;");

        return $query->row();
        $db->close();
    }

    // Returns a certain confession
    public function get_confession($id) {
        $db = $this->load->database('default', TRUE);

        $query = $db->query("SELECT confession,date(date_created) AS date_created FROM confessions WHERE id = '$id'");

        return $query->row();
        $db->close();
    }
}

?>